
function showError(container, errorMessage) { // выводит ошибку на экран
    container.className = 'error';
    var msgElem = document.createElement('div');
    msgElem.className = "error-message";
    msgElem.innerHTML = errorMessage;
    container.appendChild(msgElem);
}

function resetError(container) {
    container.className = '';
    if (container.lastChild.className == "error-message") {
        container.removeChild(container.lastChild);
    }
}

function validate(form) {
    var elems = form.elements;

    resetError(elems.name.parentNode);
    if (/^.+$/.test(elems.name.value) === false) {
        showError(elems.name.parentNode, ' Это поле обязательно для заполнения ');
    } else if (/^[а-яА-Яa-zA-Z]+$/.test(elems.name.value) === false) {
        showError(elems.name.parentNode, ' Имя введено некорректо ');
    } else if (elems.name.value.length < 3 || elems.name.value.length > 20) {
        showError(elems.name.parentNode, ' Имя должно содержать от 3 до 20 букв ');
    }

    resetError(elems.email.parentNode);
    var email = form.elements.email.value;
    var regex = /^.+@.+$/i;

    if (!email) {
        showError(elems.email.parentNode, ' Это поле обязательно для заполнения ');
    } else if (email.search(regex)) {
        showError(elems.email.parentNode, ' E-mail введен некорректно ');
    }

    resetError(elems.password.parentNode);
    if (!elems.password.value) {
        showError(elems.password.parentNode, ' Пожалуйста, введите пароль ');
    } else if (elems.password.value != elems.password2.value) {
        showError(elems.password.parentNode, ' Пароли не совпадают.');
    }
}
