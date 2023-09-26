<div class="post" id="post">
    <header>
      <h1>Gönderi Paylaş</h1>
      <button onclick="post();"><i class="fa-solid fa-x"></i></button>
    </header>
    <form action="{{ route('postBlog') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="date" value="<? echo date("d.m.Y"); ?>">
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
        <input type="file" name="file" class="file">
        <input type="submit" class="send" value="Gönder">
      </footer>
    </form>
  </div>