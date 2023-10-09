const blurBox = document.getElementById("blur-bg");
const postBox = document.getElementById("post");
const body = document.querySelector("body");
const textarea = document.getElementById("textarea");
const userProfiles = document.getElementById("userProfiles");

function goBack()
{
    event.stopPropagation();
    window.history.back();
}

function post()
{
    blurBox.classList.toggle("blur-bg-active");
    postBox.classList.toggle("postActive");
    body.classList.toggle("stop-scroll");
    textarea.classList.toggle("textareaActive");
}

function deletePost(id)
{
    window.location.href = '/sil/' + id;
}
function banUser(id)
{
    window.location.href = '/ban/' + id;
}
function goProfile(username)
{
    window.location.href = '/' + username;
}

function postSettings(id)
{
    const optionMenu = document.getElementById("option-menu-"+id);
    optionMenu.classList.toggle("option-menu-active");
}

function openAccounts()
{
    userProfiles.classList.toggle("userprofilesContainer-active");
}

function goTopMenu()
{
    window.scrollTo(0,0);
}

function refresh(menu)
{
    window.scrollTo(0,0);
    
    if(menu == undefined)
    { window.location.href = "/"; }
    else
    { window.location.href = "/"+menu; }
}