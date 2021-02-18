/*
jQuery(function ($) {
    $('form.form__category').submit(function () {
        let formData = new FormData($(this)[0]);
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: window.wp_data.ajax_url,
            data: 'addCategory',
            beforeSend: function () {
                // действие при отправке формы, сразу после нажатия на кнопку #submit
            },
            error: function (request, status) {
                // console.log('Ошибка');
                if (status == 500) {
                    alert('Ошибка при добавлении комментария');
                } else if (status == 'timeout') {
                    alert('Ошибка: Сервер не отвечает, попробуй ещё.');
                } else {
                    alert('Другая ошибка');
                }
            },
            success: function (data) {
                $('.addcategories__inner').append(data);
                console.log('Успех');
            },
            complete: function () {
                // действие, после того, как комментарий был добавлен
                $('#comment').val('');
                $('.reply-form__comment').val('');
            },
        });
        return false;
    });
});
*/

jQuery(function ($) {
    $('.categories-list__edit').on('click', function () {
         let input = $(this).parents('.categories-list__item').find('.categories-list__input'),
        inputVal = input.val();
        $(this).parents('.categories-list__item').toggleClass('active').find('.categories-list__input').focus();
        input.val('');
        input.val(inputVal);
    });
});
