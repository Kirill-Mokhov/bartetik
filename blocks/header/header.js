var header = document.querySelector('.header');
var screenHeight = window.innerHeight;
const headerHeight = header.offsetHeight;

// При прокрутке страницы
window.addEventListener('scroll', function () {
    var scrollHeight = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollHeight > screenHeight) {
        header.classList.add('show');
    } else {
        header.classList.remove('show');
    }
});


document.addEventListener('DOMContentLoaded', function () {
    // Обработчик клика по ссылкам
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(function (link, index) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            let additionalPixels;
            if (index != links.length - 1) {
                additionalPixels = 15;
            } else {
                additionalPixels = 0;
            }
            const target = document.querySelector(this.getAttribute('href'));
            const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - (headerHeight + additionalPixels);

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        });
    });
});