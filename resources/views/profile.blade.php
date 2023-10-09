<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->name." (@".$user->username.") / 𝕏" }}</title>
    
    <script src="https://kit.fontawesome.com/b40b33d160.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="/css/blogs.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="/css/profile.css">
=======
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
    <!-- Styles -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>
<body>
  <div class="blur-bg" id="blur-bg" onclick="post();"></div>
  @include("post")
    <div class="main">
      @include("left-side-menu")
        <div class="container blogContainer">
<<<<<<< HEAD
            <header class="page-detail-header content-header" onclick="goTopMenu();">
                <div class="side-left">
                  <button onclick="goBack();" class="back-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                  </button>
                  <h2>
                    {{ $user->name }}
                    <span>334 Gönderi</span>
                  </h2>
                </div>
                <div class="side-right" id="side-right">
                  @if($user->profilepic)
                    <img src="/img/{{ $post->user->profilepic }}" onclick="goTopMenu();">
                  @else
                    <img src="/img/profile.jpeg" onclick="goTopMenu();">
                  @endif
                </div>
            </header>
            <div class="details">
              <div class="card mb-2 form-card profile-card">
                <div class="user-profile-side">
                  <div class="banner">
                    <img src="">
                  </div>
                  <div class="user-container">
                    <div class="user-details">
                      <div class="user-profilepic-box">
                        <div class="user-profilepic-banner">
                          <img src="{{ $user->banner }}">
                        </div>
                      </div>
                      <div class="user-txt-container">
                        <div class="user-profile-picture">
                          <img src="/img/profile.jpeg" alt="{{ $user->name }}">
                        </div>
                        <div class="profile-edit-btn">
                          <span></span>
                          @if($user->myProfile == true)
                          <button class="normal-btn" onclick="editProfileOpen();">Profili Düzenle</button>
                          @endif
                          @if(/*$user->following == true*/true)
                          <button class="normal-btn" onclick="unfollowUser();">Takip Ediliyor</button>
                          @else
                          <button class="normal-btn" onclick="followUser();">Takip Et</button>
                          @endif
                        </div>
                        <div class="user-txt-details">
                          <div class="user-txt-menu1">
                            <h1>{{ $user->name }}</h1>
                            <span class="grey-color">{{ "@".$user->username }}</span>
                          </div>
                          @if($user->about)
                          <div class="user-txt-about">
                            <p>{{ $user->about }}</p>
                          </div>
                          @endif

                          @if($user->location || $user->website || $user->birthday || $user->created_at)
                          <div class="user-txt-other grey-color">
                            @if($user->location)
                            <div class="location">
                              {{ $user->location }}
                            </div>
                            @endif

                            @if($user->website)
                            <div class="website">
                              {{ $user->website }}
                            </div>
                            @endif

                            @if($user->birthday)
                            <div class="birthday">
                              {{ $user->birthday }}
                            </div>
                            @endif

                            @if($user->created_at)
                            <div class="created_at">
                              <i class="fa-regular fa-calendar-days"></i> {{ $user->created_at }}
                            </div>
                            @endif
                          </div>
                          @endif
                          <div class="user-statics">
                            <div class="following">
                              <p id="following-number">86</p><span class="grey-color">Takip Edilen</span>
                            </div>
                            <div class="followers">
                              <p id="followers-number">7</p><span class="grey-color">Takipçi</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
=======
            <header class="page-detail-header">
                <h2>{{ $user->name }}</h2>
            </header>
            <div class="details">
              <div class="card mb-2 form-card">
                <form action="{{ route('postBlog') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="date" value="<?php echo date('d.m.Y'); ?>">
                  <div class="post-center">
                    <div class="card-profile-side">
                      <img src="/img/profile.jpeg" alt="@TrinsyCa">
                    </div>
                    <div class="inputBx">
                      <textarea name="text" id="textarea" placeholder="Neler oluyor?" cols="30" rows="10"></textarea><br>
                    </div>
                  </div>
                  <hr>
                  <footer>
                    <label class="file">
                      <input type="file" name="file" class="file_upload">
                      <i class="fa-regular fa-image"></i>
                    </label>
                    <input type="submit" class="send" value="Gönder">
                  </footer>
                </form>
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
              </div>
            </div>
            @if($posts ?? '' && $user->banned == false)
                @foreach ($posts as $post)
                @if($post->banned == false)
                <div class="details">
                  <div class="card mb-2">
                      <div class="card-profile-side">
<<<<<<< HEAD
                        <a href="{{ $user->profileLink }}">
                          @if($post->user->profilepic)
                            <img src="/img/{{ $post->user->profilepic }}" alt="{{ "@".$post->user->username }}">
                          @else
                            <img src="/img/profile.jpeg" alt="{{ "@".$post->user->username }}">
                          @endif
                        </a>
=======
                        @if($post->user->profilepic)
                          <img src="/img/{{ $post->user->profilepic }}" alt="{{ "@".$post->user->username }}" onclick="goProfile('{{ $post->user->username }}')">
                        @else
                          <img src="/img/profile.jpeg" alt="{{ "@".$post->user->username }}" onclick="goProfile('{{ $post->user->username }}')">
                        @endif
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
                      </div>
                      <div class="card-inf">
                          <div class="card-body">
                              <div class="card-detail">
                                  <div class="card-owner">
<<<<<<< HEAD
                                      <a href="{{ $user->profileLink }}" class="card-title-link">
                                        <h5 class="card-title" >{{ $post->user->name ?? '' }}</h5>
                                      </a>
                                      <p class="card-text"><small class="grey-color"><a class="username grey-color" href="{{ $user->profileLink }}"><span>{{ "@".$post->user->username }}</span></a>・{{ $post->date }}</small></p>
=======
                                      <h5 class="card-title" onclick="goProfile('{{ $post->user->username }}')">{{ $post->user->name ?? '' }}</h5>
                                      <p class="card-text"><small class="text-body-secondary"><span onclick="goProfile('{{ $post->user->username }}')">{{ "@".$post->user->username }}</span>・{{ $post->date }}</small></p>
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
                                  </div>
                                  @if($post->myPost == true)
                                    <div class="options">
                                      <button class="open" onclick="postSettings('{{ $post->id }}');" onblur="postSettings('{{ $post->id }}');"><i class="fa-solid fa-ellipsis"></i></button>
<<<<<<< HEAD
                                      <div class="option-menu" id="option-menu-{{ $post->id }}" style="z-index: {{ $post->zIndex }};">
=======
                                      <div class="option-menu" id="option-menu-{{ $post->id }}">
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
                                          <button class="delete" onclick="deletePost({{ $post->id }})"><i class="fa-regular fa-trash-can"></i> Paylaşımı Sil</button>
                                          <button class="edit"><i class="fa-regular fa-pen-to-square"></i> Paylaşımı Düzenle</button>
                                      </div>
                                    </div>
                                  @else
                                    <div class="options">
                                      <button class="open" onclick="postSettings('{{ $post->id }}');" onblur="postSettings('{{ $post->id }}');"><i class="fa-solid fa-ellipsis"></i></button>
<<<<<<< HEAD
                                      <div class="option-menu" id="option-menu-{{ $post->id }}" style="z-index: {{ $post->zIndex }};">
=======
                                      <div class="option-menu" id="option-menu-{{ $post->id }}">
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
                                          <button><i class="fa-solid fa-circle-exclamation"></i> Gönderiyi şikayet et</button>
                                          <button onclick="banUser('{{ $post->user->id }}')"><i class="fa-solid fa-ban"></i> {{ "@".$post->user->username }} adlı kişiyi engelle</button>
                                      </div>
                                    </div>
                                  @endif
                              </div>
                              <p class="card-text blog-text">{{ $post->text }}</p>
                          </div>
                          @if(!empty($post->file))
                          <img src="/img/{{ $post->file }}" class="card-img-bottom" alt="...">
                          @endif
                          <div class="card-extensions">

                          </div>
                      </div>
                  </div>
                </div>
                @endif
                @endforeach
            @else
            <div class="details">
                <div class="card mb-2">
                    Bu Kullanıcıyı Engellediniz
                </div>
              </div>
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="/scripts/main.js"></script>
<<<<<<< HEAD
    <script src="/scripts/profile.js"></script>
    @if($user->myProfile == true)
    <script>
      var userBtnBg = document.getElementById("profile-menu-btn");

      userBtnBg.classList.add("active-menu");
    </script>
    @endif
=======
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
</body>
</html>