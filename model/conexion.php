<?php

class Conexion{
	static public function conectar(){
		$conexionDb = new PDO("mysql:host=localhost;dbname=gestor-e","root","Camilo1999*",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); echo "conexion"
		return $conexionDb;
	}

}
