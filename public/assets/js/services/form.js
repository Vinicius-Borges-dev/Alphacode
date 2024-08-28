function getContacts() {
    $.ajax({
        url: '/getContacts',
        type: 'GET',
        success: function(data) {
            $('#contacts-list').html(data);
        }
    })
}

function sendForm(e, form, pathToSubmit) {
    e.preventDefault();
    let formData = {
        nome: form.nome.value,
        email: form.email.value,
        telefone: form.telefone.value,
        dataNascimento: form.dataNascimento.value,
        profissao: form.profissao.value,
        celular: form.celular.value,
        receberWhatsapp: form.receberWhatsapp.checked,
        receberSms: form.receberSms.checked,
        receberEmail: form.receberEmail.checked,
    }
    $.ajax({
        url: `/${pathToSubmit}`,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            nome: formData.nome,
            email: formData.email,
            telefone: formData.telefone,
            dataNascimento: formData.dataNascimento,
            profissao: formData.profissao,
            celular: formData.celular,
            receberWhatsapp: formData.receberWhatsapp,
            receberSms: formData.receberSms,
            receberEmail: formData.receberEmail,
        }),
        success: function(data) {
            form.reset();
            console.log('Criado com sucesso');
            getContacts();
        },
        error: function(err) {
            console.log("Erro ao criar contato", err);
        }
    })
}

function showUpdateForm(id) {
    $.ajax({
        url: '/edit',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            id: id
        }),
        success: function(data) {
            $('#update-contact-form').html(data);

            let modal = new bootstrap.Modal(document.getElementById('updateModal'));
            modal.show();
        }
    })
    
}

$(document).ready(function() {
    getContacts();
    $('#create-contact-form').submit(function(e) {
        createContact(e, this);
    })
})