const runString = document.querySelector('.run_string');
const runStringItems = document.querySelectorAll('.run_string_item');

// Определение ширины блока с элементами
let totalWidth = 0;
runStringItems.forEach(item => {
    totalWidth += item.getBoundingClientRect().width;
});

// Дублирование элементов для бесконечного движения
let cloneCount = Math.ceil(runString.offsetWidth / totalWidth) + 1;
for (let i = 0; i < cloneCount; i++) {
    runStringItems.forEach(item => {
        const clone = item.cloneNode(true);
        runString.appendChild(clone);
    });
}

// Анимация движения строки
const animationDuration = totalWidth / 50; // Измените значение 50, чтобы ускорить или замедлить скорость движения
runString.style.animation = `runStringAnimation ${animationDuration}s linear infinite`;

// Добавление стилей анимации
const styleSheet = document.createElement('style');
styleSheet.innerHTML = `
@keyframes runStringAnimation {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-${totalWidth}px);
  }
}
`;
document.head.appendChild(styleSheet);
