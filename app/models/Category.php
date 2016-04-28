<?php

class Category extends Eloquent
{
    protected $fillable = [
        'title',
        'slug',
        'category_status'
    ];

    protected $table = 'category';

    public function sms()
    {
        return $this->hasMany('Sms', 'category_id');
    }

}