// Подключение модуля
import JustValidate from 'just-validate'

const validationSubscribe = new JustValidate('#form-subscribe', {
  errorFieldCssClass: 'is-invalid',
})

validationSubscribe.addField('#input-email', [
  {
    rule: 'required',
    errorMessage: 'Обязательное поле!',
  },
  {
    rule: 'email',
    errorMessage: 'Неверный Email!',
  },
])
const validationOrder = new JustValidate('#form-order', {
  errorFieldCssClass: 'is-invalid',
})

validationOrder
  .addField('#input-email', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
    {
      rule: 'email',
      errorMessage: 'Неверный Email!',
    },
  ])
  .addField('#input-first-name', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
  ])
  .addField('#input-last-name', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
  ])
  .addField('#input-phone', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
  ])
  .addField('#input-street', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
  ])
  .addField('#input-home-number', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
  ])
  .addField('#input-apartment-number', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
  ])
  .addField('#select-country', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
  ])
  .addField('#select-city', [
    {
      rule: 'required',
      errorMessage: 'Обязательное поле!',
    },
  ])
