var content_right = document.getElementById("side-right");

window.addEventListener("scroll", function() {
    if (window.scrollY >= 500) {
        content_right.classList.add("content-right-active");
    } else {
        content_right.classList.remove("content-right-active"); // Opsiyonel: 200'den küçükse sınıfı kaldırabilirsiniz.
    }
});