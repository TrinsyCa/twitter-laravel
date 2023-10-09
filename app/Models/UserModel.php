<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class UserModel extends Model implements Authenticatable
{
    use HasFactory,AuthenticatableTrait;
    protected $table = "users";
    protected $fillable = [
        'id',

        'email',
        'phone',
        'password',
        'username',
        'name',
        'country',
        'gender',
        
        'profile-pic',
        'banner',
        'about',
        'birthday',
        'location',
        'website',
        'confirm',
        'notifications',
        
        'followers',
        'follows',
        'ban',

        'created_at',
        'updated_at',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}