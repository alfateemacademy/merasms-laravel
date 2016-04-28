<?php

class Sms extends Eloquent
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'sms_content',
        'views',
        'sms_status'
    ];

    public function category()
    {
        return $this->belongsTo('Category', 'category_id');
    }
}