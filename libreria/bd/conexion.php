<?php


class conexion {

    static $con = null;
    public $instancia = null;

    public function __construct()
    {
        $this->instancia = mysqli_connect('localhost','root','mysql','consultorio');  
        
       /* if($this->instancia == false){
            echo "
                <script>
                    window.location = 'install.php';
                </script>
            ";
        }*/
    }

    function __destruct()
    {
        mysqli_close($this->instancia);
    }

    static function instancia()
    {
        if(self::$con == null)
        {
            self::$con = new conexion();
        } 

        return self::$con->instancia;
    }
    
}
?>