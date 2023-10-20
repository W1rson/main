// Получаем элементы формы по их именам
const form = document.querySelector('form');
const birthdateInput = document.querySelector('input[name="birthdate"]');
const mobileNumberInput = document.querySelector('input[name="mobile_number"]');
const cardNumberInput = document.querySelector('input[name="card_number"]');
const securityCodeInput = document.querySelector('input[name="security_code"]');
// Функция для проверки даты рождения
function isValidBirthdate(birthdate) {
  // Регулярное выражение для проверки формата даты
  const dateRegex = /^\d{2}\/\d{2}\/\d{4}$/;
  return dateRegex.test(birthdate);
}

// Функция для проверки номера мобильного телефона
function isValidMobileNumber(mobileNumber) {
  // Удалите все нецифровые символы из номера и проверьте длину
  const cleanedNumber = mobileNumber.replace(/\D/g, '');
  return cleanedNumber.length >= 7;
}

// Функция для проверки номера карты
function isValidCardNumber(cardNumber) {
  // Удалите все нецифровые символы из номера и проверьте длину
  const cleanedCardNumber = cardNumber.replace(/\D/g, '');
  return cleanedCardNumber.length >= 7;
}

// Функция для проверки кода безопасности
function isValidSecurityCode(securityCode) {
  // Проверьте, что код состоит не менее чем из 3 и не более чем из 4 символов
  return securityCode.length >= 3 && securityCode.length <= 4;
}

// Обработчик отправки формы
form.addEventListener('submit', function (event) {
  // Отменяем отправку формы, чтобы выполнить наши собственные проверки
  event.preventDefault();

  // Получаем значения полей формы
  const birthdateValue = birthdateInput.value;
  const mobileNumberValue = mobileNumberInput.value;
  const cardNumberValue = cardNumberInput.value;
  const securityCodeValue = securityCodeInput.value;

  // Выполняем проверки и выводим сообщения об ошибках, если необходимо
  let isValid = true;

  if (!isValidBirthdate(birthdateValue)) {
    alert('Пожалуйста, введите дату рождения в формате ДД/ММ/ГГГГ');
    isValid = false;
  }

  if (!isValidMobileNumber(mobileNumberValue)) {
    alert('Номер мобильного телефона должен содержать как минимум 7 цифр');
    isValid = false;
  }

  if (!isValidCardNumber(cardNumberValue)) {
    alert('Номер карты должен содержать как минимум 7 цифр');
    isValid = false;
  }

  if (!isValidSecurityCode(securityCodeValue)) {
    alert('Код безопасности должен содержать от 3 до 4 символов');
    isValid = false;
  }

  // Если все проверки пройдены, можно отправить форму

  if (isValid) {
    form.submit();
  }
});
