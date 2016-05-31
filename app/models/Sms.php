<?php

class Sms extends Eloquent
{
    protected $fillable = [
        'category_id',
        'user_id',
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

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}