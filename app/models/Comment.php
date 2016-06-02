<?php

class Comment extends Eloquent
{
    protected $fillable = [
        'sms_id',
        'user_id',
        'comment_status',
        'comment_content',
        'likes'
    ];

    protected $table = 'comment';

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function sms()
    {
        return $this->belongsTo('Sms', 'sms_id');
    }
}