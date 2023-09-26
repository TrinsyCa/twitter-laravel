const yazi = document.getElementById('yazi');
const yazi2 = document.getElementById('yazi2');
const blogyazi = document.getElementById('blog-yazisi');

function yazdir()
{
    let sonuc = 0;
    sonuc = Number(yazi.value) + Number(yazi2.value);
    console.log(sonuc);

    console.log(blogyazi.innerHTML);
}