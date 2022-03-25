<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [

                'name'              => 'required|regex:/^[A-Za-z -]+$/|max:255',
                "email"             => "required",
                'phone'             => 'required|regex:/^[+][0-9]/|min:12',
                "country"           => "required",
                "paper_type"        => "required",
                "paper_topic"       => "required",
                "reference"         => "required",
                "subject_area"      => "required",
                "style"             => "required",
                "academic_level"    => "required",
                "cost_per_page"     => "required",
                "deadline"          => "required",
                "detail"            => "nullable|string",
                "total_price"       => 'required',
                'emailAttachments.*' => 'nullable|file|mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,gif,sav,sps,spv,spo,mat,zip,rar|max:250000',


                // "_token": "efPssqIyMnP2NyZy0faDRNbR1lqNBpDR4vlT8eXZ",
                // "paper_topic": "Libero ea cillum eli",
                // "paper_type": "1",
                // "deadline": "2",
                // "subject_area": "Dolores natus sed qu",
                // "academic_level": "2",
                // "reference": "2",
                // "style": "Aut ipsam dolor est",
                // "cost_per_page": "1",
                // "total_price": "1",
                // "detail": "Ipsum odit ut optio",
                // "name": "Freya England",
                // "email": "facixuzaz@mailinator.com",
                // "country": "2",
                // "phone": "+1 (952) 248-7796"

        ];
    }

}
