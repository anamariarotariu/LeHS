let registerBtn = document.getElementById('register_btn');
let registerForm = document.querySelector('.register_form');
let form = document.querySelector('.form');
registerBtn.addEventListener('click', () =>{
    form.classList.add('disappear');
    registerForm.classList.remove('disappear');
})