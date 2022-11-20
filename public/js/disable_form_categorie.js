const disable = () => {
    const disable = document.getElementById('categories_form');
    if(disable.classList.contains('hidden')){
        disable.classList.remove('hidden');
    }else{
        disable.classList.add('hidden');
    }
}