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
    const radius = Math.random() * 50 + 10;
    const x = Math.random() * canvas.width;
    const y = Math.random() * canvas.height;
    const vx = Math.random() * 2 - 1; // Горизонтальная скорость
    const vy = Math.random() * 2 - 1; // Вертикальная скорость

    circles.push({ x, y, radius, vx, vy });
}

// Функция для отрисовки кадра
function draw() {
    // Очищаем canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Проходим по каждому кругу и отрисовываем его
    for (let i = 0; i < numCircles; i++) {
        const circle = circles[i];

        // Обновляем координаты круга в соответствии со скоростью
        circle.x += circle.vx;
        circle.y += circle.vy;

        // Задаем цвет и размытие круга
        ctx.fillStyle = 'rgba(19, 217, 156, 1)';
        ctx.shadowColor = 'rgba(19, 217, 156, 1)';
        ctx.shadowBlur = circle.radius * 2;

        // Рисуем круг на canvas
        ctx.beginPath();
        ctx.arc(circle.x, circle.y, circle.radius, 0, 2 * Math.PI);
        ctx.filter = 'blur(25px)';
        ctx.fill();
        ctx.closePath();
        //ctx.fill();

        // Проверка выхода круга за пределы canvas, чтобы перенести его на противоположную сторону
        if (circle.x - circle.radius > canvas.width) {
            circle.x = -circle.radius;
        } else if (circle.x + circle.radius < 0) {
            circle.x = canvas.width + circle.radius;
        }

        if (circle.y - circle.radius > canvas.height) {
            circle.y = -circle.radius;
        } else if (circle.y + circle.radius < 0) {
            circle.y = canvas.height + circle.radius;
        }
    }

    // Запускаем функцию отрисовки на следующем кадре анимации
    requestAnimationFrame(draw);
}

// Запускаем анимацию
draw();
