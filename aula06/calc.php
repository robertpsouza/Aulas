<html>

<head>
	<title><h2> Cauladora</h2></title>

</head>

<body>
<form action= "calcula.php" method = "post">
<div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
	<label for="exampleFormControlInput1">Primeiro Número>
    <input type="number" name= "num1" class="form-control" id="exampleFormControlInput1" placeholder="Primeiro Número">
  </div>
<label for="exampleFormControlInput1">Segundo Número</label>
    <input type="number" name="num2" class="form-control" id="exampleFormControlInput1" placeholder="Segundo Número">
  </div>

  <div class="form-group">
    <label for="Selecionar a operação">Selecionar a Operação</label>
    <select class="form-control" id="Selecionar a operação">
      <option>Adição</option>
      <option>Subtração</option>
      <option>Multiplicação</option>
      <option>Divisão</option>
    </select>
  </div>
<button type="submit" class="btn btn-primary">Enviar</button>


	<?php
