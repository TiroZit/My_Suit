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

if (document.getElementById('nc_netshop_add_order_form')) {
  const validationOrder = new JustValidate('#nc_netshop_add_order_form', {
    errorFieldCssClass: 'is-invalid',
  })

  validationOrder
    .addField('input[name="f_Email"]', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
      {
        rule: 'email',
        errorMessage: 'Неверный Email!',
      },
    ])
    .addField('input[name="f_Name"]', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
    .addField('input[name="f_LastName"]', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
    .addField('input[name="f_Phone"]', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
    .addField('input[name="f_Street"]', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
    .addField('input[name="f_Home"]', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
    .addField('select[name="f_Country"]', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
    .addField('select[name="f_City"]', [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле!',
      },
    ])
}
