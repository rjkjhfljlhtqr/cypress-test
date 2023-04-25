// Форма и кнопка
const form = document.querySelector('form');
const submitBtn = document.querySelector('input[type="submit"]');
const phoneInput = document.querySelector('input[type="tel"]');



//

// Включение кнопки submit, когда данные формы стали валидными
form.addEventListener('input', () => {
  if (form.checkValidity()) {
    submitBtn.removeAttribute('disabled');
  } 
  else {
    submitBtn.setAttribute('disabled', true);
  }
});