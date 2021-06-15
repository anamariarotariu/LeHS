let registerBtn = document.getElementById('register_btn');
let registerForm = document.querySelector('.register__container');
let form = document.querySelector('.form');
let gitLogin = document.getElementById('github_alt');
let questionIcon = document.getElementById('question--icon');
let githubForm = document.getElementById('github__login--form');
let additionalInfos = document.getElementById('additional--info');
let counter = 0;
registerBtn.addEventListener('click', () => {
    form.classList.add('disappear');
    registerForm.classList.remove('disappear');
})
gitLogin.addEventListener('click', () => {
    form.classList.add('disappear');
    githubForm.classList.remove('disappear');
})
questionIcon.addEventListener('click', () => {
    counter++;

    if(counter % 2 == 1){
    additionalInfos.classList.remove('disappear');
    }else{
        additionalInfos.classList.add('disappear');
    }
   
})