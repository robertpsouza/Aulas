<?php

require_once 'conexao.php';

function listaUsuarios(){

	$con = conecta();

	$sql = "SELECT * FROM usuarios";
	$result = pg_query($con,$sql);
	$usuarios = pg_fetch_all($result);

	desconecta($con);
	return $usuarios;
}
function insereUsuario(array $usuario){
		$con = conecta();

	$sql = "INSERT INTO usuarios(usuario,senha) VALUES('{$usuario['usuario']}','{$usuario['senha']}')";
			pg_query($con,$sql);

			desconecta($con);
}

function listaUsuarioPorId($id){
$con = conecta();
$sql = "SELECT *FROM usuarios WHERE id ={$id}";
$result = pg_query($con , $sql);
$usuarios = pg_fetch_assoc($result);
desconecta($con);
return $usuarios;
}

function deletaUsuario($id){
$con = conecta();
$sql = "DELETE FROM usuarios WHERE id ={$id}";
pg_query($con, $sql);
desconecta($con);
}