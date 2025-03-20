# Lista de Exercícios – Vinicius e Nathan | 2° DS PI – Etec Euro Albino de Souza

Este repositório contém três programas desenvolvidos para resolver diferentes problemas de entrada e processamento de dados, com base em situações do cotidiano, como lanchonetes e formas de pagamento.

## Estrutura do Repositório

```
ExerciciosPHP/
├── acaiteria_atividade/
│   ├── index.php
│   ├── calcular.php
├── lanchonete_atividade/
│   ├── index.php
│   ├── calcular.php
├── parcela_atividade/
│   ├── index.php
│   ├── calcular.php
```

## Descrição das Atividades

### 1. **Açaiteria (acaiteria_atividade)**

Este programa permite que o usuário escolha um item do cardápio da açaiteria, como o tipo de açaí e adicionais, informando quantos itens ele deseja e exibindo o valor total do pedido.

- **Entrada**: O usuário informa a quantidade de itens desejados, como Açaí Simples, Açaí com Morango, Leite Condensado, Leite em Pó, entre outros.
- **Saída**: O programa exibe o valor total a ser pago pelo cliente com base na escolha dos itens e suas quantidades.

### 2. **Lanchonete (lanchonete_atividade)**

Este programa permite que o usuário faça um pedido em uma lanchonete, escolhendo um lanche e uma bebida, além de informar a quantidade de itens desejados. O programa então calcula o valor total do pedido.

- **Entrada**: O usuário escolhe um lanche do menu da lanchonete e uma bebida, informando também a quantidade desejada de cada item.
- **Saída**: O programa exibe o nome do usuário e o valor total do pedido.

### 3. **Parcelamento de Compra (parcela_atividade)**

Este programa permite que o usuário informe o total gasto em uma compra e escolha a forma de pagamento, seja à vista (com 10% de desconto) ou a prazo (com juros dependendo do número de parcelas).

- **Entrada**: O usuário informa o valor total da compra e escolhe entre pagamento à vista ou a prazo. Caso opte pelo parcelamento, o número de parcelas é solicitado.
- **Saída**: O programa exibe o valor final da compra (com desconto ou juros) e o valor de cada parcela, dependendo da escolha do pagamento.

## Como Executar

Para todas as atividades:

1. Abra o arquivo `index.php` em um servidor local (como XAMPP ou WAMP).
2. Insira os valores solicitados nos formulários.
3. Envie os formulários para obter o resultado na página `calcular.php`.

Cada pasta contém os arquivos `index.php` e `calcular.php` que são responsáveis por exibir o formulário e processar os cálculos.
