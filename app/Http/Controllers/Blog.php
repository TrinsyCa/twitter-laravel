<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Models\BlogModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\MyUser;

class Blog extends Controller
{
    protected $myUser;

    public function __construct(MyUser $myUser) {
        $this->myUser = $myUser;
    }
    public function postBlog(Request $request)
    {
        $userId = Session::get('userId');
        $text = $request->text;
        $date = $request->date;
        $file = $request->file;
        $link = rand(0,999999999999999999);

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

        if(empty($text) == false || empty($file) == false)
        {
            BlogModel::create([
                'userId' => $userId,
                'text' => $text,
                'date' => $date,
                'file' => $filename,
                'link' => $link,
            ]);
        }

        return redirect()->back();
    }
    public function index()
    {
        $myUserId = auth()->id();

        $myUser = $this->myUser->userData();
        
        $posts = BlogModel::orderBy('id', 'DESC')->get();

        $bans = explode(",", UserModel::orderBy('id', 'DESC')->find(auth()->id())->ban);
        $bans = array_filter(array_map('trim', $bans));

        foreach ($posts as $post) {
            $user = DB::table('users')->find($post->userId);
            $post->user = $user;

            $postId = $post->userId;
            $postUserId = $post->user->id;
            $post->myPost = false;
            $post->zIndex = 100 + $postId;
            $post->user->profileLink = "/".$post->user->username;

            if ($post->userId == $myUserId)
            {
                $post->myPost = true;
            }
            else
            {
                $post->myPost = false;
            }
            if (in_array($post->user->id, $bans)) {
                $post->banned = true;
            }
        }
        return view("blogs", compact('posts'));
    }
    public function sil($id)
    {
        DB::table("tweets")->where('id', $id)->delete();
        
        return redirect()->back();
    }
    public function ban($id)
    {
        $myUserId = auth()->id();
        $banUser = DB::table('users')->where('id', $id)->first();
        $myUser = DB::table('users')->where('id', $myUserId)->first();

        if ($banUser && $myUser)
        {
            $myUser->ban .= $banUser->id.',';
            DB::table('users')->where('id', $myUserId)->update(['ban' => $myUser->ban]);
        }
        
        return redirect()->back();
    }

}