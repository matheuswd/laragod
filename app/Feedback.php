<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    public $timestamps = false;

    protected $fillable = [
        'type', 'description',
    ];

    protected $dates = [
        'created_at',
    ];

    public function creator()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }
}
