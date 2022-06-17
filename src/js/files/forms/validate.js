// Подключение модуля
import JustValidate from 'just-validate'

if (document.getElementById('form-subscribe')) {
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
}

if (document.getElementById('form-registration')) {
  const validationSubscribe = new JustValidate('#form-registration', {
    errorFieldCssClass: 'is-invalid',
  })

  validationSubscribe
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
    .addField('#input-password', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
    .addField('#input-repeat-password', [
      {
        validator: (value, fields) => {
          if (fields['#input-password'] && fields['#input-password'].elem) {
            const repeatPasswordValue = fields['#input-password'].elem.value

            return value === repeatPasswordValue
          }

          return true
        },
        errorMessage: 'Пароли должны быть одинаковыми!',
      },
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
}

if (document.getElementById('form-login')) {
  const validationSubscribe = new JustValidate('#form-login', {
    errorFieldCssClass: 'is-invalid',
  })

  validationSubscribe
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
    .addField('#input-password', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
}

if (document.getElementById('form-order')) {
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
}
