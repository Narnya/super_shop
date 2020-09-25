let remove = document.querySelector('qwer');
let info_block = document.getElementById('info_block');
remove.addEventListener('click', {
    if (info_block.hasClass('info_block')){
        info_block.removeClass('info_block');
    }else{
    info_block.addClass('info_block');
    }
})
