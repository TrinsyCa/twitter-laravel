<div class="userContainerFix">
    <div class="userContainer">
      <a href="/" class="userButtons"><div class="userBtnsBg logo"><span><img src="/img/logo/logo-white.png" alt="𝕏"></span></div></a>
      <a href="/" class="userButtons"><div class="userBtnsBg" id="mainpage-menu-btn"><i class="fa-solid fa-house"></i><span>Anasayfa</span></div></a>
      <a href="#" class="userButtons"><div class="userBtnsBg" id="search-menu-btn"><i class="fa-solid fa-magnifying-glass"></i><span>Keşfet</span></div></a>
      <a href="#" class="userButtons"><div class="userBtnsBg" id="notifications-menu-btn"><i class="fa-regular fa-bell"></i><span>Bildirimler</span></div></a>
      <a href="#" class="userButtons"><div class="userBtnsBg" id="messages-menu-btn"><i class="fa-regular fa-message"></i><span>Mesajlar</span></div></a>
      <a href="#" class="userButtons"><div class="userBtnsBg" id="lists-menu-btn"><i class="fa-solid fa-hashtag"></i><span>Listeler</span></div></a>
      <a href="#" class="userButtons"><div class="userBtnsBg" id="save-menu-btn"><i class="fa-regular fa-bookmark"></i><span>Kaydedilenler</span></div></a>
      <a href="/{{ session('username') }}" class="userButtons"><div class="userBtnsBg" id="profile-menu-btn"><i class="fa-regular fa-user"></i><span>Profil</span></div></a>
      <a href="#" class="userButtons"><div class="userBtnsBg" id="more-options-menu-btn"><i class="fa-solid fa-ellipsis"></i><span>Daha Fazla</span></div></a>
      <button onclick="post();" class="send">Gönder</button>
      <div class="userProfiles">
        <div class="userprofilesContainer" id="userProfiles" >
          <div class="userprofileBtns">
            <button>Var olan bir hesap ekle</button>
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <button :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Çıkış Yap') }}
              </button>
          </form>
          </div> 
          <div class="triangle"></div>
        </div>
        <button class="userBtnsBg userProfileCon" onclick="openAccounts();">
          <div class="myprofile">
            <div class="myprofileContainer">
              <div class="myprofileDetail">
                <div class="imgBox">
                  <img src="/img/profile.jpeg">
                </div>
                <div class="nameBox">
                  <h4>{{ session('name') }}</h4>
                  <p class="text-body-secondary">{{ "@".session('username') }}</p>
                </div>
              </div>
              <div class="moreBtn">
                <i class="fa-solid fa-ellipsis"></i>
              </div>
            </div>
          </div>
        </button>
      </div>
    </div>
  </div>