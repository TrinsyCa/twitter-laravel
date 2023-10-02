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