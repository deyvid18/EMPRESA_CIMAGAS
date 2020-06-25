<?php
    //CONECTAR CON EL SERVIDOR
    $conectar=mysqli_connect('localhost', 'root', '', 'cimagas') ;
    //VERIFICAR LA CONEXION 
    if(!$conectar)
    {
        echo"No se pudo conectar con el servidor";

    } else {
        echo"Conexion exitosa";
    }
    
    //RECUPERAR VARIABLES
    $nombres=$_POST{'name'};
    $email=$_POST{'email'};
    $celular=$_POST{'celular'};
    $nombredetienda=$_POST{'nombret'};
    $tema=$_POST{'subject'};
    $mensaje=$_POST{'message'};

    //sentencia en sql
    $sql="INSERT INTO comentarios VALUES('$nombres',
                                        '$email',
                                        '$celular',
                                        '$nombredetienda',
                                        '$tema',
                                        '$mensaje')";

    //EJECUTA LA SENTENCIA
    $ejecutar=$conectar->query($sql);

    //Verifica la ejecución
    if(!$ejecutar)
    {
        echo"ERROR";
    } else
    {
        header ('Location:cexitosa.html');
    }
    ?>
