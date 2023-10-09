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

document.querySelector('a[href="#canvas"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('canvas').scrollIntoView({ behavior: 'smooth' });
});
document.querySelector('a[href="#servicesHref"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('servicesHref').scrollIntoView({ behavior: 'smooth' });
});
document.querySelector('a[href="#aboutusHref"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('aboutusHref').scrollIntoView({ behavior: 'smooth' });
});
document.querySelector('a[href="#portfolioHref"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('portfolioHref').scrollIntoView({ behavior: 'smooth' });
});
document.querySelector('a[href="#contactsHref"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('contactsHref').scrollIntoView({ behavior: 'smooth' });
});
