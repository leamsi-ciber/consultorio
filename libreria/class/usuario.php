<?php
session_start();
$_SESSION['autorizado'] = false;

class Usuario
{
    private $Id = 0;
    private $Nombre = "";
    private $Apellido = "";
    private $User = "";
    private $Pass = "";
    private $Tipo = "";

    function __construct()
    {    
    }

    function __get($prop)
    {
        return $this->$prop;
    }

    function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    function Verificar($user, $pass)
    {
      

        $con = conexion::instancia();

        $query = "SELECT nombre, apellido, usuario, password, Tipo_user
                  FROM usuarios 
                  INNER JOIN roles on usuarios.Tipo_user = roles.idRol
                  WHERE usuario = '$user'";

        $result = mysqli_query($con, $query);
       

        if(mysqli_error($con))
        {
           return false;
        }

        $fila = $result->fetch_row();
        
        if($fila == null)
        {
            return false;
            
        } else {

            if($pass == $fila[3])
            {
                $_SESSION['nombre'] = $fila[0];
                $_SESSION['apellido'] = $fila[1];
                $_SESSION['user'] = $fila[2];
                $_SESSION['pass'] = $fila[3];
                $_SESSION['tipo'] = $fila[4];
               
                return true;
                
            } else {
                return false;
            }
        }
    }

    function CrearUsuario()
    {
        $con = conexion::instancia();

        $query = "SELECT * FROM usuarios WHERE username = '{$this->User}' ";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1)
        {
            return "Este nombre de usuario ya existe";
        }
        else if($this->Pass != $_POST['confirmPass'])
        {
            return "Las contraseñas no coinciden";
        }
        
        $query = "INSERT INTO usuarios VALUES(0, '$this->Nombre', '$this->Apellido', '$this->User', '$this->Pass')";

        if(mysqli_query($con, $query))
        {
            $this->Id = mysqli_insert_id($con);
            return true;
        }

        return false;
    }

    function Modificar()
    {
        $con = conexion::instancia();
        $query = "UPDATE usuarios 
                SET nombre = '$this->Nombre', apellido = '$this->Apellido', username = '$this->User'
                WHERE id = '$this->Id'";
        return mysqli_query($con, $query);
    }

    function Eliminar()
    {
        $con = conexion::instancia();
        $query = "DELETE FROM usuarios WHERE id = '{$this->Id}'";
        return mysqli_query($con, $query);
    }

    function Consultar()
    {
        $con = conexion::instancia();
        $query = "SELECT * FROM usuarios WHERE tipoId = '2'";
        return mysqli_query($con, $query);
    }
   

}

?>