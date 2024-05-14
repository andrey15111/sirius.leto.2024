// Получаем все элементы слайдов и сохраняем их в переменной slides
const slides = document.querySelectorAll('.slide');

// Инициализируем переменную currentSlide и устанавливаем начальное значение 0
let currentSlide = 0;

// Функция для отображения указанного слайда
function showSlide(index) {
  // Перебираем все слайды
  slides.forEach((slide, i) => {
    // Если текущий индекс совпадает с индексом аргумента функции
    if (i === index) {
      // Добавляем класс 'active' к слайду, чтобы его показать
      slide.classList.add('active');
    } else {
      // Убираем класс 'active' у всех остальных слайдов
      slide.classList.remove('active');
    }
  });
}

// Функция для переключения на следующий слайд
function nextSlide() {
  // Увеличиваем значение currentSlide на 1 и используем оператор остатка от деления, чтобы обеспечить цикличность карусели
  currentSlide = (currentSlide + 1) % slides.length;
  // Вызываем функцию showSlide с новым индексом, чтобы показать следующий слайд
  showSlide(currentSlide);
}

// Устанавливаем интервал для автоматического переключения слайдов каждые 3 секунды
setInterval(nextSlide, 3000);
