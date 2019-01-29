<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\UserMeta as Meta;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, SoftDeletes;

    protected $table = 'users';

    protected $perPage = 4;

    protected $fillable = [
        'name', 'email', 'password',
        'is_admin', 'email_verified_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded = [
        'id', 'created_at', 'updated_at',
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
        'email_verified_at', 'last_seen_at',
    ];

    public function meta()
    {
        return $this->hasOne('App\UserMeta', 'user_id', 'id');
    }

    public function scopeSearch($query, $text, $fields)
    {
        $query->where('id', $text);
        foreach ($fields as $field)
        {
            $query->orWhereHas('meta', function($query) use ($text, $field) {
                $query->where($field, 'LIKE', '%'.$text.'%');
            });
        }
        return $query;
    }
}
