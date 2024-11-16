const form = document.getElementById('form');
const showFormButton = document.getElementById('showFormButton');

function appearForm() {
    form.style.display = 'block';
}


function hideForm() {
    form.style.display = 'none';
}

const loginform = document.getElementById('loginform');
const showloginformButton = document.getElementById('showloginFormButton');

function appearloginform() {
    loginform.style.display = 'block';
}
function hideloginform() {
    loginform.style.display = 'none';
}
const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('change', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });