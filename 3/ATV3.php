<?php

$alunos = [   
    [
        "nome" => "Juca",
        "idade" => 27,
        "nota" => 3.5
    ],
    [
        "nome" => "Joao",
        "idade" => 15, // Esse aqui parece estar errado, "Smartphone" como aluno?
        "nota" => 5.8
    ],
    [
        "nome" => "Maria",
        "idade" => 18, // Também parece erro, idade 800?
        "nota" => 2.0
    ]
];

// Adicionando novos alunos com array_push (cada um separado)
array_push($alunos,
    [
        "nome" => "Maria",
        "idade" => 15,
        "nota" => 5.0
    ],
    [
        "nome" => "João",
        "idade" => 18,
        "nota" => 10.0
    ],
    [
        "nome" => "Ana",
        "idade" => 20,
        "nota" => 7.8
    ],
    [
        "nome" => "Bruno",
        "idade" => 22,
        "nota" => 6.2
    ],
    [
        "nome" => "Camila",
        "idade" => 17,
        "nota" => 8.5
    ],
    [
        "nome" => "Diego",
        "idade" => 25,
        "nota" => 4.7
    ],
    [
        "nome" => "Eduarda",
        "idade" => 19,
        "nota" => 9.1
    ],
    [
        "nome" => "Felipe",
        "idade" => 21,
        "nota" => 5.9
    ],
    [
        "nome" => "Gabriela",
        "idade" => 16,
        "nota" => 6.5
    ],
    [
        "nome" => "Henrique",
        "idade" => 23,
        "nota" => 2.8
    ],
    [
        "nome" => "Isabela",
        "idade" => 24,
        "nota" => 7.0
    ],
    [
        "nome" => "Lucas",
        "idade" => 26,
        "nota" => 9.8
    ]
);


echo "<h2>Lista de Alunos</h2>";
echo "<ul>";
foreach ($alunos as $aluno) {
    echo "<li>" . $aluno["nome"] . " - Idade: " . $aluno["idade"] . " - Nota: " . $aluno["nota"] . "</li>";
}
echo "</ul>";

// Calculando a média das notas
$somaNotas = 0;
foreach ($alunos as $aluno) {
    $somaNotas += $aluno["nota"];
}   
$mediaNotas = $somaNotas / count($alunos);
echo "<p>Média das notas: " . number_format($mediaNotas, 2, ',', '.') . "</p>";
?>
