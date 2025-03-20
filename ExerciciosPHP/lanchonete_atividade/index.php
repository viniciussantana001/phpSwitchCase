<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>
<body>
    <form action="calcular.php" method="post">
        <h1>Cardapio de Lanches: </h1>
        <p>1 – X Burguer (R$6,00) <input type="text" name="b1" size="20"></p>
        <p>2 – X Salada (R$8,00) <input type="text" name="b2" size="20"></p>
        <p>3 – X Bacon (R$10,00) <input type="text" name="b3" size="20"></p>
        <p>4 – X Tudo (R$12,00) <input type="text" name="b4" size="20"></p>
        <p>5 – X Duplo (R$15,00) <input type="text" name="b5" size="20"></p>
        <br><br>
        <h1>Menu de Bebidas</h1>
        <p>1 – Água (R$2,00) <input type="text" name="a1" size="20"></p>
        <p>2 – Suco (R$5,00) <input type="text" name="a2" size="20"></p>
        <p>3 – Lata (R$3,00) <input type="text" name="a3" size="20"></p>
        <p>4 – 600 ml (R$5,00) <input type="text" name="a4" size="20"></p>
        <p>5 – 2 Litros (R$8,00) <input type="text" name="a5" size="20"></p>
        <br><br>
        <h1>Forneça seu nome para identificação do pedido</h1>
        <p>seu nome: <input type="text" name="nome" size="20"></p>
        <input type="submit" value="Fazer pedido">
    </form>
</body>
</html>