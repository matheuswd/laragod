<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    protected $table = 'user_meta';

    public $timestamps = false;

    protected $fillable = [
        'avatar',
        'company', 'position',
        'city', 'country',
        'birth',
        'facebook', 'whatsapp', 'linkedin',
        'instagram', 'twitter', 'youtube',
        'biography', 'interests',
    ];

    protected $guarded = [
        'id', 'user_id',
    ];

    protected $dates = [
        'birth',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

}
