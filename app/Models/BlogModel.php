<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = "tweets";
    protected $fillable = ["userId","text","file","link","date","created_at","updated_at"];
}
