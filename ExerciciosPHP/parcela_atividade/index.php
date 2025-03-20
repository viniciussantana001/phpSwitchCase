<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma de Pagamento</title>
</head>
<body>
    <h2>Calculadora de Pagamento</h2>
    <form action="calcular.php" method="post">
        <p>Total da Compra: R$ <input type="text" name="total" size="20" required></p>

        <p>Escolha a forma de pagamento:</p>
        <input type="radio" name="pagamento" value="avista" required> À Vista (10% de desconto) <br>
        <input type="radio" name="pagamento" value="prazo" required> A Prazo <br>

        <p>Se for a prazo, escolha o número de parcelas:</p>
        <input type="text" name="parcelas" size="20" required> (Digite 1 se for à vista)

        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
