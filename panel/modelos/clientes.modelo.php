<?php

require_once "conexion.php";

class ModeloClientes{

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function mdlMostrarClientes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		


	}

	/*=============================================
	REGISTRO DE CLIENTES
	=============================================*/

	static public function mdlIngresarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla
		(razonSocial, nombreFantasia, impositivo, direccion, provincia, pais, email, telefono, tipoDocumento, numeroDocumento, foto) 
		VALUES 
		(:razonSocial, :nombreFantasia, :impositivo, :direccion, :provincia, :pais, :email, :telefono, :tipoDocumento, :numeroDocumento, :foto)");

		$stmt->bindParam(":razonSocial", $datos["razonSocial"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreFantasia", $datos["nombreFantasia"], PDO::PARAM_STR);
		$stmt->bindParam(":impositivo", $datos["impositivo"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":provincia", $datos["provincia"], PDO::PARAM_STR);
		$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoDocumento", $datos["tipoDocumento"], PDO::PARAM_STR);
		$stmt->bindParam(":numeroDocumento", $datos["numeroDocumento"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			//return "error";
			return	print_r(Conexion::conectar()->errorInfo());
		
		}		

	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarCliente($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla
		(razonSocial, nombreFantasia, impositivo, direccion, provincia, pais, email, telefono, tipoDocumento, numeroDocumento, foto) 
		VALUES 
		(:razonSocial, :nombreFantasia, :impositivo, :direccion, :provincia, :pais, :email, :telefono, :tipoDocumento, :numeroDocumento, :foto)");

		$stmt->bindParam(":razonSocial", $datos["RazonSocial"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreFantasia", $datos["NombreFantasia"], PDO::PARAM_STR);
		$stmt->bindParam(":impositivo", $datos["Impositivo"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["Direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":provincia", $datos["Provincia"], PDO::PARAM_STR);
		$stmt->bindParam(":pais", $datos["Pais"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["Email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["Telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoDocumento", $datos["TipoDocumento"], PDO::PARAM_STR);
		$stmt->bindParam(":numeroDocumento", $datos["NumeroDocumento"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["Foto"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}


	}

	

	/*=============================================
	BORRAR CLIENTE
	=============================================*/

	static public function mdlBorrarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}


	}

}