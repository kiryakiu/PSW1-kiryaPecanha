<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY-Kirya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <h1>Atividade 1</h1>
    <?php $aluno = [
        'materia' => [
            'pi' => [
                'avaliação1' => 4,
                'avaliação2' => 7,
                'atividades' => 9
            ],
            'psw' => [
                'avaliação1' => 1.7,
                'avaliação2' => 5.3,
                'atividades' => 6
            ],
            'redes' => [
                'avaliação1' => 8,
                'avaliação2' => 3,
                'atividades' => 1
            ],
            'asw' => [
                'avaliação1' => 2.7,
                'avaliação2' => 3.1,
                'atividades' => 3
            ]
        ]
    ];
    
    echo '<pre>';
    print_r($aluno);
    echo '</pre>';

    echo '<pre>';
    print_r($aluno['materia']['redes']);
    echo '</pre>';

    echo "Nota final de redes:";
    echo '<pre>';
    print_r($aluno['materia']['redes']['avaliação1'] + $aluno['materia']['redes']['atividades'] + $aluno['materia']['redes']['avaliação2']);
    echo '</pre>';
    echo "Nota final de psw:";
    echo '<pre>';
    print_r($aluno['materia']['psw']['avaliação1'] + $aluno['materia']['psw']['atividades'] + $aluno['materia']['psw']['avaliação2']);
    echo '</pre>';
    echo "Nota final de asw:";
    echo '<pre>';
    print_r($aluno['materia']['asw']['avaliação1'] + $aluno['materia']['asw']['atividades'] + $aluno['materia']['asw']['avaliação2']);
    echo '</pre>';
    echo "Nota final de bd:";
    echo '<pre>';
    print_r($aluno['materia']['pi']['avaliação1'] + $aluno['materia']['pi']['atividades'] + $aluno['materia']['bd']['avaliação2']);
    echo '</pre>';
    ?>

    <h1>Atividade 2</h1>

    <?php

    $arraycomdados = [
        'nome' => 'Kirya',
        'endereco' => null,
        'idade' => '17',
        'nascimento' => '99-99-9999'
    ];

    $arrayOrdenado = [
        'papagaio',
        'cachorro',
        'grilo'
    ];



    echo '
    <pre>';
    print_r($arrayOrdenado);
    echo '</pre>';

    echo '
    <pre>';
    print_r($arraycomdados);
    echo '</pre>';

    echo "<h1>Contar os elementos do array:</h1>";
    echo '
    <pre>';
    print_r(count($arrayOrdenado));
    echo '<pre/>';
    echo '<pre>';
    print_r(count($arraycomdados));
    echo '<pre/>';

    echo "<h1>Mostrar os índices do array:</h1>";
    echo '<pre>';
    print_r(array_keys($arrayOrdenado));
    echo '<pre/>';
    echo '<pre>';
    print_r(array_keys($arraycomdados));
    echo '<pre/>';

    echo "<h1>Mostrar o valor da posição dos índices:</h1>";
    echo '<pre>';
    print_r(array_values($arrayOrdenado));
    echo '<pre/>';
    echo '<pre>';
    print_r(array_values($arraycomdados));
    echo '<pre/>';

    echo "<h1>Procurar algo dentro do array:</h1>";
    echo '<pre>';
    print_r(in_array('Kirya', $arraycomdados));
    echo '<pre/>';
    echo '<pre>';
    print_r(in_array('gato', $arrayOrdenado));
    echo '<pre/>';

    echo "<h1>Procurar algo dentro do array e receber um verdadeiro ou falso:</h1>";
    echo '<pre>';
    var_dump(in_array('Kirya', $arraycomdados));
    echo '<pre/>';
    echo '<pre>';
    var_dump(in_array('gato', $arrayOrdenado));
    echo '<pre/>';

    echo "<h1>Mostrar em qual índice está:</h1>";
    echo '<pre>';
    print_r(array_search('Kirya', $arraycomdados));
    echo '<pre/>';
    echo '<pre>';
    print_r(array_search('mosquito', $arrayOrdenado));
    echo '<pre/>';

    echo "<h1>Verificar se um índice de array está preenchido:</h1>";
    echo '<pre>';
    var_dump(isset($arrayOrdenado[1]));
    echo '<pre/>';
    echo '<pre>';
    var_dump(isset($arraycomdados['nascimento']));
    echo '<pre/>';

    echo "<h1>Verificar o último índice:</h1>";
    echo '<pre>';
    echo array_key_last($arrayOrdenado);
    echo '<pre/>';

    echo "<h1>Separa as variáveis com o que está entre aspas:</h1>";
    echo '<pre>';
    echo implode(', ', $arrayOrdenado);
    echo '<pre/>';

    echo "<h1>Organizar em ordem alfabética:</h1>";
    sort($arraycomdados);
    print_r($arraycomdados);
    echo '<pre/>';

    echo "<h1>Ordenar de forma reversa:</h1>";
    arsort($arraycomdados);
    print_r($arraycomdados);
    echo "<pre>";
    echo '<hr>';

    $arrayPessoas = [
        [
            'id' => 1,
            'nome' => 'Peçanha',
            'idade' => 12
        ],
        [
            'id' => 2,
            'nome' => 'Kirya',
            'idade' => 11
        ],
        [
            'id' => 3,
            'nome' => 'Marta',
            'idade' => 70
        ],
        [
            'id' => 4,
            'nome' => 'Fatima',
            'idade' => 33
        ]
    ];

    uasort($arrayPessoas, function ($a, $b) {
        if ($a['nome'] == $b['nome']) return 0;
        return $a['nome'] < $b['nome'] ? -1 : 1;
    });

    echo '<pre>';
    print_r(array_values($arrayPessoas));
    echo '</pre>';


    echo '<h1>Foreach Alinhado</h1>';
    foreach ($arrayPessoas as $key => $value) {
        foreach ($value as $key => $value) {
            echo $key;
            echo '<br>';
            echo $value;
            echo '</pre>';
        }
    }
    ?>

</body>

</html>