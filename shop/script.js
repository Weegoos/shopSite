//   INSERT INTO `user` (`id_user`, `login`, `password`) VALUES (NULL, 'raigul', 'qwerty123456')

let registration = document.querySelector('.registration')
let existingCLass = document.querySelector('.existingCLass')
registration.onclick = function (){
    location.href  = "http://localhost/shop/registration/reg.php"
    // http://localhost/shop/confirm/confirm.php
}

existingCLass.onclick = function (){
    console.log(777);
    location.href = "http://localhost/shop/confirm/confirm.php"
}

