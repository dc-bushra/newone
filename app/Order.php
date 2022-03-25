<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'id',
        "paper_topic",
        "paper_type",
        "deadline",
        "subject_area",
        "academic_level",
        "reference",
        "style",
        "cost_per_page",
        "total_price",
        "detail",
        "name",
        "email",
        "country",
        "phone",
        "language",
        'emailAttachments.*' => 'nullable|file|mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,gif,sav,sps,spv,spo,mat,zip,rar|max:250000',

    ];
    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function deadline()
    {
        return $this->belongsTo(Deadline::class);
    }
}
