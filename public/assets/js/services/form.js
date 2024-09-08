async function sendFormContact(event, form, options = []) {
    event.preventDefault();
    $.ajax({
        url: `${options instanceof Array ? `${form.method === 'post' ? `${options[0]}?contact=${options[1]}` : `${options[0]}/${options[1]}`}` : options}`,
        type: `${form.method}`,
        ContentType: 'application/json',
        data: JSON.stringify({
            nome: form.nome.value,
            email: form.email.value,
            telefone: form.telefone.value,
            dataNascimento: form.dataNascimento.value,
            profissao: form.profissao.value,
            celular: form.celular.value,
            receberWhatsapp: form.receberWhatsapp.checked,
            receberSms: form.receberSms.checked,
            receberEmail: form.receberEmail.checked,
        }),
        success: function () {
            form.reset();
            getContacts();
        }
    })
}

function getContacts() {
    $.ajax({
        url: '/getAll',
        type: 'GET',
        success: function (data) {
            $('#contacts-list').html(data);
        }
    })
}

function showUpdateForm(id) {
    $.ajax({
        url: `/showUpdateForm?contact=${id}`,
        type: 'GET',
        success: function (data) {
            $('#update-contact-form').html(data);
            let modal = new bootstrap.Modal('#updateModal')
            modal.show();
        }
    })
}

function deleteContact(id){
    $.ajax({
        url: `/delete?contact=${id}`,
        type: 'GET',
        success: function () {
            getContacts();
        }
    })
}

$(window).on('load', function () {
    getContacts();
})