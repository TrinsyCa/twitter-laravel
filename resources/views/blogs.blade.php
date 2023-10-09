<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anasayfa / 𝕏</title>
    
    <script src="https://kit.fontawesome.com/b40b33d160.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="/css/blogs.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
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
            <header class="page-detail-header" onclick="refresh();">
                <h2>Anasayfa</h2>
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
              </div>
            </div>
            @if($posts ?? '')
            @foreach ($posts as $post)
            @if($post->banned == false)
            <div class="details">
              <div class="card mb-2">
                  <div class="card-profile-side">
                    <a href="{{ $post->user->profileLink }}">
                      @if($post->user->profilepic)
                        <img src="/img/{{ $post->user->profilepic }}" alt="{{ "@".$post->user->username }}">
                      @else
                        <img src="/img/profile.jpeg" alt="{{ "@".$post->user->username }}">
                      @endif
                    </a>
                  </div>
                  <div class="card-inf">
                      <div class="card-body">
                          <div class="card-detail">
                              <div class="card-owner">
                                  <a href="{{ $post->user->profileLink }}" class="card-title-link">
                                    <h5 class="card-title" >{{ $post->user->name ?? '' }}</h5>
                                  </a>
                                  <p class="card-text"><small class="grey-color"><a class="username grey-color" href="{{ $post->user->profileLink }}"><span>{{ "@".$post->user->username }}</span></a>・{{ $post->date }}</small></p>
                              </div>
                              @if($post->myPost == true)
                                <div class="options">
                                  <button class="open" onclick="postSettings('{{ $post->id }}');" onblur="postSettings('{{ $post->id }}');"><i class="fa-solid fa-ellipsis"></i></button>
                                  <div class="option-menu" id="option-menu-{{ $post->id }}" style="z-index: {{ $post->zIndex }};">
                                      <button class="delete" onclick="deletePost({{ $post->id }})"><i class="fa-regular fa-trash-can"></i> Paylaşımı Sil</button>
                                      <button class="edit"><i class="fa-regular fa-pen-to-square"></i> Paylaşımı Düzenle</button>
                                  </div>
                                </div>
                              @else
                                <div class="options">
                                  <button class="open" onclick="postSettings('{{ $post->id }}');" onblur="postSettings('{{ $post->id }}');"><i class="fa-solid fa-ellipsis"></i></button>
                                  <div class="option-menu" id="option-menu-{{ $post->id }}" style="z-index: {{ $post->zIndex }};">
                                      <button><i class="fa-solid fa-circle-exclamation"></i> Gönderiyi şikayet et</button>
                                      <button onclick="banUser('{{ $post->user->id }}')"><i class="fa-solid fa-ban"></i> {{ "@".$post->user->username }} adlı kişiyi engelle</button>
                                  </div>
                                </div>
                              @endif
                          </div>
                          <p class="card-text blog-text">{!! nl2br(e($post->text)) !!}</p>
                      </div>
                      @if(!empty($post->file))
                        <div class="file-box">
                          <img src="/img/{{ $post->file }}" class="card-img-bottom">
                          <img src="/img/{{ $post->file }}" class="card-img-bottom-bg">
                        </div>
                      @endif
                      <div class="card-extensions">
                          <div class="reviews do-ext">
                            <i class="fa-regular fa-comment"></i>
                            <span id="review-number">1.424</span>
                          </div>
                          <div class="retweet do-ext">
                            <i class="fa-solid fa-retweet"></i>
                            <span id="retweet-number">1.424</span>
                          </div>
                          <div class="like do-ext">
                            <i class="fa-regular fa-heart"></i>
                            <span id="heart-number">1.424</span>
                          </div>
                          <div class="statistic do-ext">
                            
                          </div>
                          <div class="send-options do-ext">

                          </div>
                      </div>
                  </div>
              </div>
          </div>
            @endif
            @endforeach
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="/scripts/main.js"></script>
    <script src="/scripts/homepage.js"></script>
</body>
</html>