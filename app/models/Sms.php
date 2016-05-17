<?php

class Sms extends Eloquent
{
    public $title;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'type',
        'sms_content',
        'image_url',
        'views',
        'sms_status'
    ];

    public function category()
    {
        return $this->belongsTo('Category', 'category_id');
    }
}