<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = $_POST['name'];
    setcookie('name', $name);
    echo '<h1> Perfil creado </h1>';
    echo '<p> tu nombre: '.$name.'</p>';
    return; 
}

function getTitulo(){
    if(!isset($_COOKIE['name'])){
        return 'no te registraste';
    }else{
        return 'Bienvenido , '.$_COOKIE['name'];
    }
}
?>

<html>
    <head>
        <title>Recordar nombre</title>
    </head>

    <body>
        <h1><?php echo GetTitulo();?></h1>
        <form method="POST">
            <input name="name" require>
            <button>Registrarse</button>
        </form>
    </body>
</html>