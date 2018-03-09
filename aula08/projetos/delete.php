<?php 

require_once 'database-usuario.php'; 

$id = $_POST['id'];


deletaUsuario($id);

header("Location:index.php");