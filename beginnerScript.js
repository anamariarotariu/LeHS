let icon = document.querySelector('.hintIcon');
let advice = document.querySelector('.hint_text');
let counter = 0;
icon.addEventListener('click', () =>{
    counter=counter+1;
    if(counter % 2 == 0){
        advice.classList.add('disappear');
    }else
    {
        advice.classList.remove('disappear');
    }
    
})