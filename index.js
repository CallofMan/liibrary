let menu = document.querySelectorAll('.head_elem');

menu.forEach(element => {
    element.addEventListener('click', function()
    {
        menu.forEach(nonActive => {
            nonActive.style.fontSize = 'larger';
            nonActive.style.fontVariant = 'normal';
        })
        let idMenu = element.getAttribute('id');
        idMenu = document.getElementById(idMenu);
        idMenu.style.fontSize = 'x-large';
        idMenu.style.fontVariant = 'small-caps';
    })
});