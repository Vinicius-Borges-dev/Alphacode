function createContact(e, form) {
    e.preventDefault();
    let formData = {
        nome: form.nome.value,
        email: form.email.value,
        dataNascimento: form.dataNascimento.value,
        profissao: form.profissao.value,
        celular: form.celular.value,
        receberWhatsapp: form.receberWhatsapp.checked,
        receberSms: form.receberSms.checked,
        receberEmail: form.receberEmail.checked,
    }

    console.log(formData);
    $.ajax({
        url: '/create',
        type: 'POST',
        data: {
            nome: formData.nome,
            email: formData.email,
            telefone: formData.telefone,
            dataNascimento: formData.dataNascimento,
            profissao: formData.profissao,
            celular: formData.celular,
            receberWhatsapp: formData.receberWhatsapp,
            receberSms: formData.receberSms,
            receberEmail: formData.receberEmail,
        },
        success: function(data) {
            if (data.status == 'ok') {
                getContacts();
            }
        }
    })
}
function getContacts() {
    $.ajax({
        url: '/getContacts',
        type: 'GET',
        success: function(data) {
            $('#contacts-list').html(data);
        }
    })
}

