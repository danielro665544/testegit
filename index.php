<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Checkout</h1>
    <form action="programa.php" method="POST">
    <p>Nome: <input type="text" name="nome">
    <br>Email: <input type="text" name="email">
    <h3>Produto 1</h3>
    <br>Nome: <input type="text" name="nomeProduto1">
    <br>Valor: <input type="text" name="valor1">
    <br>Frete: <input type="text" name="frete1">
    <br>Quantidade: <input type="text" name="quantidade1">

    <h3>Produto 2</h3>
    <br>Nome: <input type="text" name="nomeProduto2">
    <br>Valor: <input type="text" name="valor2">
    <br>Frete: <input type="text" name="frete2">
    <br>Quantidade: <input type="text" name="quantidade2">


<h3>Produto 3</h3>
    <br>Nome: <input type="text" name="nomeProduto3">
    <br>Valor: <input type="text" name="valor3">
    <br>Frete: <input type="text" name="frete3">
    <br>Quantidade: <input type="text" name="quantidade3">


    <h3>Pagamento</h3>
    <br>Número: <input type="text" name="numero">
    <br>Código: <input type="text" name="codigo">
    <br>Data: <input type="date" name="data">
    <br>Titular: <input type="text" name="titular">

    <p><input type="submit" value="Comprar">

</body>
</html>