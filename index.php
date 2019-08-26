<?php
if(isset($_GET['index'])){
    require'home.php';
} elseif (isset($_GET['login'])) {
    require'login-register.php';
}
else{
    require'home.php';
}
?>