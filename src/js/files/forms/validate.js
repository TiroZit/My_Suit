// Подключение модуля
import JustValidate from 'just-validate'

const validation = new JustValidate('.subscribe', {
  errorFieldCssClass: 'is-invalid',
})

validation.addField('#email', [
  {
    rule: 'required',
    errorMessage: 'Обязательное поле!',
  },
  {
    rule: 'email',
    errorMessage: 'Неверный Email!',
  },
])
