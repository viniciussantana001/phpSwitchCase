<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açaíteria</title>
</head>
<body>
    <form action="calcular.php" method="post">
        <h1>Cardápio de Açaí:</h1>
        <p>1 – Açaí Simples (R$10,00) <input type="text" name="b1" size="20"></p>
        <p>2 – Açaí com Leite Ninho (R$12,00) <input type="text" name="b2" size="20"></p>
        <p>3 – Açaí com Morango (R$14,00) <input type="text" name="b3" size="20"></p>
        <p>4 – Açaí com Paçoca (R$15,00) <input type="text" name="b4" size="20"></p>
        <p>5 – Açaí Especial (R$18,00) <input type="text" name="b5" size="20"></p>
        <br><br>
        <h1>Adicionais:</h1>
        <p>1 – Granola (R$2,00) <input type="text" name="a1" size="20"></p>
        <p>2 – Leite Condensado (R$3,00) <input type="text" name="a2" size="20"></p>
        <p>3 – Leite em Pó (R$3,00) <input type="text" name="a3" size="20"></p>
        <p>4 – Chocolate (R$4,00) <input type="text" name="a4" size="20"></p>
        <p>5 – Paçoca (R$4,00) <input type="text" name="a5" size="20"></p>
        <br><br>
        <h1>Forneça seu nome para identificação do pedido</h1>
        <p>Seu nome: <input type="text" name="nome" size="20"></p>
        <input type="submit" value="Fazer pedido">
    </form>
</body>
</html>
