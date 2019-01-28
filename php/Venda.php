<?php

include "Usuario.php";

class Venda{

	$id;
	Usuario u;
	$produtos = Array();
	$data;

	function Venda($usuario, $produtos){
		$this->u = $usuario;
		$this->produtos = $produtos;
		$this->data = date("d-m-Y h:i:sa");
	}
}