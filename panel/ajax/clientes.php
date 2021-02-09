<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class Ajaxclientes{

	/*=============================================
	EDITAR Cliente
	=============================================*/	

	public $idCliente;

	public function ajaxEditarCliente(){

		$item = "id";
		$valor = $this->idCliente;

		$respuesta = Controladorclientes::ctrMostrarclientes($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	ACTIVAR Cliente
	=============================================*/	

	public $activarCliente;
	public $activarId;


	public function ajaxActivarCliente(){

		$tabla = "clientes";

		$item1 = "estado";
		$valor1 = $this->activarCliente;

		$item2 = "id";
		$valor2 = $this->activarId;

		$respuesta = Modeloclientes::mdlActualizarCliente($tabla, $item1, $valor1, $item2, $valor2);

	}

	/*=============================================
	VALIDAR NO REPETIR Cliente
	=============================================*/	

	public $validarCliente;

	public function ajaxValidarCliente(){

		$item = "mail";
		$valor = $this->validarCliente;

		$respuesta = Controladorclientes::ctrMostrarclientes($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR Cliente
=============================================*/
if(isset($_POST["idCliente"])){

	$editar = new Ajaxclientes();
	$editar -> idCliente = $_POST["idCliente"];
	$editar -> ajaxEditarCliente();

}

/*=============================================
ACTIVAR Cliente
=============================================*/	

if(isset($_POST["activarCliente"])){

	$activarCliente = new Ajaxclientes();
	$activarCliente -> activarCliente = $_POST["activarCliente"];
	$activarCliente -> activarId = $_POST["activarId"];
	$activarCliente -> ajaxActivarCliente();

}

/*=============================================
VALIDAR NO REPETIR Cliente
=============================================*/

if(isset( $_POST["validarCliente"])){

	$valCliente = new AjaxClientes();
	$valCliente -> validarClientes = $_POST["validarCliente"];
	$valCliente -> ajaxValidarCliente();

}