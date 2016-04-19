<?php

class Category extends Eloquent
{
    protected $fillable = [
        'title',
        'slug',
        'category_status'
    ];

    protected $table = 'category';

}