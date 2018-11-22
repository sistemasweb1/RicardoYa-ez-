<?php
require_once "conexion.php";
require_once "libros.php";

class Data{
    private $con;
    
    public function __construct(){
        $this->con = new conexion("localhost","Ventas","root","");
    }
    
    public function getlibros(){
        $libros = array();
        $query = "select *from libros";
        $res =$this->con->ejecutar($query);   
        
        while($reg = mysql_fetch_array($res)){
            $l = new libros();
            
            $l->id = $reg[0];
            $l->nombre = $reg[1];
            $l->precio = $reg[2];
            $l->stock = $reg[3];
            
            array_push($libros,$l);
            
        }
        return $libros;
    }
}
?>