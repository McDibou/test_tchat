let $div = $('#tchat');


$('#post').on('click', function () {

    $.post('crud.php',
        {
            name: $('#name').val(),
            message: $('#message').val()
        });

    $div.append("<p>" + $('#name').val() + ' /' + $('#message').val() + "</p>");

    $('#form')[0].reset();

});




$(function () {
    $.get('select.php')
        .done(function (data) {
            data = JSON.parse(data);

            data.forEach(function (data) {
                let $text = $('<p>').text( data.name + ' / ' + data.message);
                $div.append($text)
            })
        });
});


