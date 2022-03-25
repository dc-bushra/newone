<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\File;
use App\Order;
use App\WebSetting;
use App\PaperType;
use App\Subject;
use App\ReferenceStyle;
use App\AcademicLevel;
use App\Deadline;
use App\Country;
use Illuminate\Support\Facades\DB;
use App\Requests\StoreOrderRequest;

class OrderController extends Controller
{
    public function create()
    {

        // $web_setting = WebSetting::first();
        $paper_types = PaperType::all();
        $subjects = Subject::all();
        $reference_styles = ReferenceStyle::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
        $countries = Country::all();
        return view('pages.order', compact('paper_types', 'subjects', 'reference_styles', 'academic_levels', 'deadlines', 'countries'));

    }
    public function success()
    {
        return view('pages.order-success');
    }

    public function store(Request $request)
    {
        // return $request->all();

        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'file quantity exceeded the limit.');
                return redirect()->route('order.now');
            }

            if ($fileSize >  25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.');
                return redirect()->route('order.now');
            }
        }

        $files = [];

        DB::beginTransaction();
            $order = Order::create($request->all());

            if ($request->hasfile('emailAttachments')) {
                foreach($request->file('emailAttachments') as $file)
                {
                    $fileName = uniqid().'_'.time().'_'.$file->getClientOriginalName();
                    $filePath = $file->storeAs( 'uploads' , $fileName, 'public');

                    array_push( $files, $filePath);

                    File::create([
                        "order_id" => $order->id,
                        "file_path" => $filePath
                    ]);
                }
            }

            // Send mail to user
            // Mail::to($request->email)->send(new OrderMail($request, $files));

            // Send mail to admin
            // Mail::to(env('MAIL_FROM_ADDRESS', 'info@contentwritingservice.ae') )->send(new OrderAdminMail($request, $files));

        DB::commit();

        // return view('pages.order-success', compact('order'))->with('success', 'Thank you for reaching out!');
          return redirect()-> back()->with('success', 'thanku you for reach out');
        // $order = Order::create($request->all());

        // event(new OrderCreated($order));

        return redirect()->back()->withSuccess('Thank you for showing your intrest, We\'ve receive your order successfully.');
    }
}


