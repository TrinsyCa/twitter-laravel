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
            <header class="page-detail-header">
                <h2>Anasayfa</h2>
            </header>
            <div class="details">
              <div class="card mb-2">
                <form action="{{ route('postBlog') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="date" value="<?php echo date('d.m.Y'); ?>">
                  <div class="post-center">
                    <div class="card-profile-side">
                      <img src="/img/6493862841241912" alt="@TrinsyCa">
                    </div>
                    <div class="inputBx">
                      <textarea name="text" id="textarea" placeholder="Neler oluyor?" cols="30" rows="10"></textarea><br>
                    </div>
                  </div>
                  <hr>
                  <footer>
                    <label class="file">
                      <input type="file" name="file" class="file_upload">
                      Dosya Seç
                    </label>
                    <input type="submit" class="send" value="Gönder">
                  </footer>
                </form>
              </div>
            </div>
            @if($posts ?? '')
            @foreach ($posts as $post)
            <div class="details">
                <div class="card mb-2">
                  <div class="card-profile-side">
                    <img src="/img/6493862841241912" alt="@TrinsyCa">
                  </div>
                  <div class="card-inf">
                    <div class="card-body">
                        <div class="card-detail">
                            <div class="card-owner">
                              <h5 class="card-title">Ömer İslamoğlu</h5>
                              <p class="card-text"><small class="text-body-secondary"><span>@TrinsyCa</span>・{{ $post->date }}</small></p>
                            </div>
                            <div class="options">
                              <button class="open" onclick="postSettings();" onblur="postSettings();"><i class="fa-solid fa-ellipsis"></i></button>
                              <div class="option-menu" id="option-menu">
                                <button class="delete" onclick="deletePost({{ $post->id }})"><i class="fa-regular fa-trash-can"></i> Paylaşımı Sil</button>
                                <button class="edit"><i class="fa-regular fa-pen-to-square"></i> Paylaşımı Düzenle</button>
                              </div>
                            </div>
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
            @endforeach
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="/scripts/post.js"></script>
    <script src="/scripts/postSettings.js"></script>
</body>
</html>