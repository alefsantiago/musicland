let formularioContato = $('#formContato')
formularioContato.validate({
    rules: {
        email: {
            required: true,
            minlength: 7
        },
        celular: {
            required: false,
            minlength: 11
        },
        contate: {
            required: true,
            minlength: 10
        }
    },
    messages: {
        email: {
            required: 'O email é obrigatório.',
            minlength: 'O email é muito curto.'
        },
        celular: {
            minlength: 'O numero é muito curto.'
        },
        contate: {
            required: 'O texto é obrigatória.',
            minlength: 'O texto deve ter mais do que 10 caracteres.'
        }
    },
    errorPlacement: function (error, element) {
        element.parent().parent().find('.error').append(error).addClass('animated shake')
    },
    errorClass: 'cor-do-erro',
    submitHandler: function (form) {
        console.log(form)
        let formSerializado = $(form).serialize()
        console.log(formSerializado)
    }
})
  
  
