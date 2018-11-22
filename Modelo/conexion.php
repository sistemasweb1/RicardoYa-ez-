<HTML> 
<HEAD> 
<TITLE>conexion.php</TITLE> 
</HEAD> 
<BODY> 
<?php
    class Conexion{
        public function _construct($server,$nameBD,$user,$pass){
            $con =mysql_connect($server,$user,$pass);
            if(!$con){
                die("Error al conectar: ".mysql_error());
            }
            $bd = mysql_select_db($nameBD);
            if(!$selBD){
                die("Error al seleccionarla BD: ".mysql_error());
            }
        }
        public function ejecutar($query){
            return mysql_query($query);
        }
}
    define('DB_SERVER','localhost');
    define('DB_NAME','TU_BASE_DE_DATOS');
    define('DB_USER','TU_USUARIO');
    define('DB_PASS','TU_CLAVE');
    
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con); 
?>