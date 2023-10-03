<?php
//Cookies
/*
Es un mecanismo que permite guarda datos del lado del cliente. Se usa con la intensión de mantener un estado en el servidor. Una cookie cuando es invocada puede facilitar información sobre la navegación del cliente.
*/
///setcookie('name','contenido','tiempo_de_expiracion',....)-->puede llevar otros parametros
setcookie('micookie','Hola desde micookie');
setcookie('micookie',1,time()-1);
?>