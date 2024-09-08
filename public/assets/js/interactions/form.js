$('input').on('focus', function () {
    $(`label[for=${$(this).attr('id')}]`).addClass('text-alphacode')
}).on('blur', function () {
    $(`label[for=${$(this).attr('id')}]`).removeClass('text-alphacode')
})