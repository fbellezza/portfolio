<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=micontad_feb",
			            "micontad_feb",
			            "Fw95%$1Rp)fa");

		$link->exec("set names utf8");

		return $link;

	}

}