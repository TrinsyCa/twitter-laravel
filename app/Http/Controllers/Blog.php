<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use DB;

class Blog extends Controller
{
    public function postBlog(Request $request)
    {
        $text = $request->text;
        $date = $request->date;
        $file = $request->file;
        $link = rand(0,999999999999999999);

        if(empty($title))
        {
            $title = "";
        }
        if(empty($text))
        {
            $text = "";
        }
        if(!empty($file))
        {
            $filename = rand(0,9999999999999999);
            $fileupload = $file->move(public_path('img'),$filename);
        }
        else
        {
            $filename = "";
        }

        BlogModel::create([
            'text' => $text,
            'date' => $date,
            'file' => $filename,
            'link' => $link,
        ]);

        header("Refresh:0; url=/blogs");
    }
    public function index()
    {
        $posts = BlogModel::orderBy('id','DESC')->get();
        return view("blogs" , compact('posts'));
    }
}
