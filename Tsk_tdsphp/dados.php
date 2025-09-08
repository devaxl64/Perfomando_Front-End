
<?php 
if(!empty($_POST['usuario'])){
    echo "Seja bem-vindo, ". $_POST['usuario'];
} else{
    echo "Por favor, digite o seu usuário!";
}

?>