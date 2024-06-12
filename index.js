const menuList = document.querySelectorAll('.menu')
const menuImg = document.querySelectorAll('.menuImg')
const mainImg = document.querySelector('.mainImg')
for (let i = 0; i < menuList.length; i++){
    menuList[i].addEventListener('click', function(){
        for (let i = 0; i<menuList.length; i++){
            menuList[i].classList.remove('active')
        }
        this.classList.add('active')
        mainImg.src = menuImg[i].src
        console.log(menuImg[i].src);
    })
}