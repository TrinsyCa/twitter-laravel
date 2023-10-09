<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Models\BlogModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\MyUser;

class Profile extends Controller
{
    protected $myUser;
    public function __construct(MyUser $myUser) {
        $this->myUser = $myUser;
    }
    public function index($username)
    {
        $user = UserModel::where('username',$username)->orderBy('id','DESC')->first();

        if (!$user) {
            abort(404); // Kullanıcı bulunamazsa 404 hatası gönder
        }

        $bans = explode(",", UserModel::orderBy('id', 'DESC')->find(auth()->id())->ban);
        $bans = array_filter(array_map('trim', $bans));

        if(in_array($user->id , $bans))
        {
            $user->banned = true;
        }
        $myUserId = auth()->id();

        $myUser = $this->myUser->userData();
        
        $posts = BlogModel::orderBy('id', 'DESC')->where('userId',$user->id)->get();
        if(!in_array($user->id , $bans))
        {
            foreach ($posts as $post)
            {
                $user = DB::table('users')->find($post->userId);
                $post->user = $user;
    
                $postId = $post->userId;
                $postUserId = $post->user->id;
<<<<<<< HEAD

                $post->myPost = false;
                $user->myProfile = false;
                $post->zIndex = 100 + $postId;
                $user->profileLink = "/".$post->user->username;
=======
                $post->myPost = false;
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
    
                if ($post->userId == $myUserId)
                {
                    $post->myPost = true;
<<<<<<< HEAD
                    $user->myProfile = true;
=======
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
                }
                else
                {
                    $post->myPost = false;
<<<<<<< HEAD
                    $user->myProfile = false;
=======
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
                }
                if (in_array($post->user->id, $bans)) {
                    $post->banned = true;
                }
            }
        }
        
        return view('profile', compact('user', 'posts'));
    }
}
