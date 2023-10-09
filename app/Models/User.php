<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory,\Illuminate\Auth\Authenticatable;
    protected $table = "users";
    protected $fillable = [
        "username",
        "password",
        "name_surname",
        "about",
        "website",
        "birthday",
        "email",
        "phone",
        "location",
        "country",
        "gender",
        "premium",
        "confirm",
        "theme"
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
