
var form = document.querySelector('#myForm');

form.addEventListener('submit', function(evt) {
    evt.preventDefault();

    var formData = {
        name: document.querySelector('input[name="fio"]').value,
        email: document.querySelector('input[name="email"]').value,
        message: document.querySelector('textarea[name="msg"]').value
    };


    /*  console.log(formData);*/
    var request = new XMLHttpRequest();

    request.addEventListener('load', function() {
        // В этой части кода можно обрабатывать ответ от сервера
        console.log(request.response);

        form.innerHTML = request.responseText;
    });

    request.open('POST', 'index.php', true);

    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    request.send('fio=' + encodeURIComponent(formData.name) + '&email=' + encodeURIComponent(formData.email) +  '&msg=' + encodeURIComponent(formData.message));

});


