// Подключение функционала 
import { isMobile } from "./functions.js";
// Подключение списка активных модулей
import { flsModules } from "./modules.js";

// Счетчик
const dots = document.querySelectorAll('.progress-item__dots');
if (dots.length > 0) {
  dots.forEach(element => {
    let dots = element.getAttribute('data-dots');
    let marked = element.getAttribute('data-percent');
    let percent = Math.floor(dots * marked / 100);
    let points = "";

    for (let i = 0; i < dots; i++) {
      points += `<span class="progress-item__dot" style="--i: ${i};"></span>`;
    }
    element.innerHTML = points;
    const pointsMarked = element.querySelectorAll('.progress-item__dot');
    for (let i = 0; i < percent; i++) {
      pointsMarked[i].classList.add('_active')
    }
  });
}

const dotsValue = document.querySelectorAll('.progress-item__value span');
if (dotsValue.length > 0) {
  dotsValue.forEach(element => {
    let from = 0;
    let to = element.getAttribute('data-target');
    let step = 1;

    let counter = setInterval(function () {
      from += step;
      element.textContent = from;

      if (from == to) {
        clearInterval(counter);
      }
    }, 50);
  });
}

// Бегущая строка
const template10Ticker = document.querySelectorAll('.template10-ticker');
if (template10Ticker.length > 0) {
  template10Ticker.forEach(element => {
    const elementRow = element.querySelector('.template10-ticker__row');
    let rowClone = elementRow.cloneNode(true);
    element.appendChild(rowClone);
  });
}

// Анимация фокусного состояния инпута
let input = document.querySelectorAll('.form__input');
if (input.length > 0) {
  input.forEach(item => {
    const itemParent = item.closest('.form__item');
    if (item.value.length > 0) {
      itemParent.classList.add('_focus');
    } else {
      itemParent.classList.remove('_focus');
    }

    item.addEventListener("focus", function () {
      const itemParent = item.closest('.form__item');
      itemParent.classList.add('_focus');
    });
    item.addEventListener("blur", function () {
      const itemParent = item.closest('.form__item');
      if (!item.value.length > 0) {
        itemParent.classList.remove('_focus');
      }

      if (item.classList.contains('wpcf7-not-valid')) {
        itemParent.classList.add('_invalid');
      } else {
        itemParent.classList.remove('_invalid');
      }
    });
  });

  function inputValidate() {
    input.forEach(item => {
      const itemParent = item.closest('.form__item');

      setTimeout(() => {
        if (item.classList.contains('wpcf7-not-valid')) {
          itemParent.classList.add('_invalid');
        } else {
          itemParent.classList.remove('_invalid');
        }
      }, 100);
    })
  }

  document.addEventListener('wpcf7invalid', function (event) {
    inputValidate();
  }, false);
}

let template8AreaValue = 50;
let template8AreaLabels = document.querySelectorAll('.template8-area');

// Прогресс у input type range
const rangeInputs = document.querySelectorAll('input[type="range"]')
function handleInputChange(e) {
  let target = e.target
  if (e.target.type !== 'range') {
    target = document.getElementById('range')
  }
  const min = target.min
  const max = target.max
  const val = target.value

  target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%';

  // Выводим значение ползунка template8-area
  if (target.id == "template8-area") {
    template8AreaValue = target.value;
    template8AreaLabels.forEach(element => {
      element.innerHTML = template8AreaValue;
    });
  }
}

rangeInputs.forEach(input => {
  input.addEventListener('input', handleInputChange)
})

// Значение доп функций
const template8Func1Labels = document.querySelectorAll('.template8-func1');
const template8Func1 = document.getElementById('template8-func1');
if (template8Func1) {
  template8Func1.addEventListener('change', function() {
    if (template8Func1.checked) {
      template8Func1Labels.forEach(element => {
        element.innerHTML = "Да";
      });
    } else {
      template8Func1Labels.forEach(element => {
        element.innerHTML = "Нет";
      });
    }
  })
}

const template8Func2Labels = document.querySelectorAll('.template8-func2');
const template8Func2 = document.getElementById('template8-func2');
if (template8Func2) {
  template8Func2.addEventListener('change', function() {
    if (template8Func2.checked) {
      template8Func2Labels.forEach(element => {
        element.innerHTML = "Да";
      });
    } else {
      template8Func2Labels.forEach(element => {
        element.innerHTML = "Нет";
      });
    }
  })
}

