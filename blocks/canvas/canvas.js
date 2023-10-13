// Получаем элемент canvas
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

// Устанавливаем размеры canvas в соответствии с размером окна браузера
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Количество кругов
const numCircles = 9;

// Объявляем массив для хранения информации о каждом круге
const circles = [];

// Генерируем случайные значения для радиуса, координат и скорости каждого круга
for (let i = 0; i < numCircles; i++) {
    const radius = Math.random() * (Math.min(canvas.width, canvas.height) / 20) + 10;
    const x = Math.random() * canvas.width;
    const y = Math.random() * canvas.height;
    const vx = Math.random() * 3 - 1; // Горизонтальная скорость
    const vy = Math.random() * 3 - 1; // Вертикальная скорость

    circles.push({ x, y, radius, vx, vy });
    setInterval(function() {
        color = changeColor(color, rightColor);
    }, 1000);
}


let color = [];
let colors = [[60, 181, 227], [26, 204, 235], [25, 206, 225], [23, 210, 199], [19, 217, 156], [15, 225, 102]];
let rightColor = [];

function changeRightColor () {
    if (color.length === 0) {
        color = colors[0];
        rightColor = colors[1];
    } else {
        if (color[0] === rightColor[0] && color[1] === rightColor[1] && color[2] === rightColor[2]) {
            let j = 0;
            while (colors[j] !== rightColor) {
                j++;
            }
            if ((j+1) === colors.length) {
                rightColor = colors[0];
            } else {
                rightColor = colors[j+1];
            }
        }
    }
}

// Функция для отрисовки кадра
function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < numCircles; i++) {
        const circle = circles[i];
        // Обновляем координаты круга в соответствии со скоростью
        circle.x += circle.vx;
        circle.y += circle.vy;
        // Задаем цвет и размытие круга
        changeRightColor ();
        ctx.fillStyle = `rgb(${color[0]}, ${color[1]}, ${color[2]}, 1)`;

        ctx.shadowBlur = circle.radius * 2;

        // Рисуем круг на canvas
        ctx.beginPath();
        ctx.arc(circle.x, circle.y, ctx.shadowBlur, 0, 2 * Math.PI);
        ctx.filter = 'blur(100px)';
        ctx.fill();
        ctx.closePath();
        //ctx.fill();

        if (circle.x + circle.radius > canvas.width || circle.x - circle.radius < 0) {
            circle.vx = -circle.vx;
        }
        if (circle.y + circle.radius > canvas.height || circle.y - circle.radius < 0) {
            circle.vy = -circle.vy;
        }
    }

    // Запускаем функцию отрисовки на следующем кадре анимации
    requestAnimationFrame(draw);
}

function changeColor(firstColor = [], secondColor = []){
    let newcolor = [];
    const r_f = firstColor[0];
    const g_f = firstColor[1]
    const b_f = firstColor[2];

    const r_s = secondColor[0];
    const g_s = secondColor[1];
    const b_s = secondColor[2];

    if (r_f === r_s) {
        newcolor[0] = r_f;
    } else {
        if (r_f < r_s) {
            newcolor[0] = r_f + 1;
        } else {
            newcolor[0] = r_f - 1;
        }
    }
    if (g_f === g_s) {
        newcolor[1] = g_f;
    } else {
        if (g_f < g_s) {
            newcolor[1] = g_f + 1;
        } else {
            newcolor[1] = g_f - 1;
        }
    }
    if (b_f === b_s) {
        newcolor[2] = b_f;
    } else {
        if (b_f < b_s) {
            newcolor[2] = b_f + 1;
        } else {
            newcolor[2] = b_f - 1;
        }
    }

    return newcolor;
}

// Запускаем анимацию
draw();

window.addEventListener('DOMContentLoaded', function () {
    var textUppers = document.querySelectorAll('.text-upper');
    var textDowns = document.querySelectorAll('.text-down');

    for (var i = 0; i < textUppers.length; i++) {
        (function (index) {
            setTimeout(function () {
                textUppers[index].style.opacity = '1';
            }, 1000);
        })(i);
    }

    for (var i = 0; i < textDowns.length; i++) {
        (function (index) {
            setTimeout(function () {
                textDowns[index].style.opacity = '1';
            }, 3000);
        })(i);
    }

});