<?php

abstract class bd
{
	public $puente;           
    
    public function __destruct() 
    {
        $this->puente=null;
    }
    public function __construct() 
    {

        $config_host='localhost';
        $config_user = 'root';
        $config_password = '';
        $config_database = 'mi_base_de_datos';

        try 
        {
        $this->puente= new PDO('mysql:host='.$config_host.';dbname='.$config_database.'',$config_user,$config_password);
        }  
        catch(PDOException $error)
        {
		  echo 'No es posible conectar con BD '.$error ;
          die();
	    }	
    }
}

class hourus extends bd
{
    function buscar_datos()
    {
        $orden=$this->puente->prepare('
        SELECT * 
        FROM datos
        ');
        $orden->execute();
        return($orden->fetchAll(PDO::FETCH_OBJ));
    }

    function busqueda()
    {
        $orden=$this->puente->prepare('SELECT * FROM salud ');
        $orden->execute();
        return($orden->fetchAll(PDO::FETCH_OBJ));
    }

    function insertar($Edad,$Estatura,$Peso)
    {
        $orden=$this->puente->prepare('
            INSERT INTO salud
            SET 
            Edad = :Edad, 
            Estatura =:Estatura,
            Peso=:Peso
                   ');
            $orden->bindparam(":Edad",$Edad);
            $orden->bindparam(":Estatura", $Estatura);
            $orden->bindparam(":Peso",$Peso);
    
            $orden->execute();

    }
    function actualizar_salud ($v1,$v2,$v3,$id)
    {
        $orden=$this->puente->prepare
        ("
            UPDATE salud SET 
            Edad = :v1,
            Estatura = :v2,
            Peso = :v3  
            WHERE id=:id
        ");
        $orden->bindparam(":v1",$v1);
        $orden->bindparam(":v2",$v2);
        $orden->bindparam(":v3",$v3);
        $orden->bindparam(":id",$id);
        $orden->execute();
                 
    }
}














