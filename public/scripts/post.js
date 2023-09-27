const blurBox = document.getElementById("blur-bg");
const postBox = document.getElementById("post");
const body = document.querySelector("body");
const textarea = document.getElementById("textarea");

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
