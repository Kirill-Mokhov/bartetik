let selector = document.querySelector("#seminar-tel")
let im = new Inputmask("+7(999) 999-99-99")
im.mask(selector)

let validation_seminar = new JustValidate('#seminar-form')

validation_seminar.addField("#seminar-name", [
  {
    rule: "required",
    errorMessage: "Введите имя!"
  },
  {
    rule: "minLength",
    value: 2,
    errorMessage: "Минимум 2 символа!"
  }
]).addField("#seminar-tel", [
  {
    validator: (value) => {
      const phone = selector.inputmask.unmaskedvalue()
      return Boolean(Number(phone) && phone.length > 0)
    },
    errorMessage: 'Введите телефон'
  },
  {
    validator: (value) => {
      const phone = selector.inputmask.unmaskedvalue()
      return Boolean(Number(phone) && phone.length === 10)
    },
    errorMessage: 'Введите телефон полностью'
  }
]).onSuccess(async function () {


  if (document.getElementById('seminar-terms').checked) {
    let data = {
      name: document.getElementById("seminar-name").value,
      tel: selector.inputmask.unmaskedvalue(),
      name_form: "seminar-form"
    }

    let response = await fetch("main.php", {
      method: "POST",
      body: JSON.stringify(data),
      headers: {
        "Content-Type": "application/json; charset=UTF-8"
      }
    })

    let result = await response.text()
    alert("Спасибо, наши специалисты свяжутся с вами в ближайшее время для подтверждения заявки!")

  } else {
    alert("Подтвердите, что вы ознакомлены с Политикой обработки персональных данных.");
  }
})