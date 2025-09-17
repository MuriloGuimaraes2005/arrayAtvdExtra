<?php
$produtos = [   
    ["nome" => "Notebook",
    "preco" => 2500.00,
    "quantidade" => 3]
, [
    "nome" => "Smartphone",
    "preco" => 1500.00,
    "quantidade" => 5
], [
    "nome" => "Tablet",
    "preco" => 800.00,
    "quantidade" => 2
],
[
    "nome" => "Geladeira",
    "preco" => 5000.00,
    "quantidade" => 2
],
[
    "nome" => "Microondas",
    "preco" => 400.00,
    "quantidade" => 2
]
];
echo "<h2>Lista de Produtos</h2>";
echo "<ul>";

foreach ($produtos as $produto) {
    echo "<li>" . $produto["nome"] . " - Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . " - Quantidade: " . $produto["quantidade"] . "</li>";
}
//foreach parece o FOR, ele faz um loop para cada elemento do array
//o AS serve para atribuir um nome temporario para cada elemento do array
//li faz uma lista nÃo ordenada

// Criar nova lista com desconto
$produtosComDesconto = [];

foreach ($produtos as $produto) {
    $produtoComDesconto = [
        "nome" => $produto["nome"],
        "preco" => $produto["preco"] * 0.9, // aplica 10% de desconto
        "quantidade" => $produto["quantidade"]
    ];
    $produtosComDesconto[] = $produtoComDesconto; // adiciona na nova lista
}

// Exibir nova lista com preços com desconto
echo "<h2>Lista de Produtos (Com 10% de Desconto)</h2>";
echo "<ul>";
foreach ($produtosComDesconto as $produto) {
    echo "<li>" . $produto["nome"] . " - Preço com desconto: R$ " . number_format($produto["preco"], 2, ',', '.') . " - Quantidade: " . $produto["quantidade"] . "</li>";
}
echo "</ul>";


?>
