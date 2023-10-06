var header = document.querySelector('.header');
var screenHeight = window.innerHeight;

// При прокрутке страницы
window.addEventListener('scroll', function () {
    var scrollHeight = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollHeight > screenHeight) {
        header.classList.add('show');
    } else {
        header.classList.remove('show');
    }
});