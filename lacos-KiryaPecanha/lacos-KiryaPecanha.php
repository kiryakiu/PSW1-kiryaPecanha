<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
            color: #333;
        }

        h1, h2 {
            color: #ff69b4;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 20px;
        }

        pre {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

<h1>Atividade_1</h1>
    <?php

    $Array = [
        'Informatica' => [
            'Kirya' => [

                "ASW" => [
                    'avaliação1' => 3,
                    'avaliação2' => 1

                ],

                'BD' => [
                    'avaliação1' => 1,
                    'avaliação2' => 5
                ],

                'PSW' => [
                    'avaliação1' => 9,
                    'avaliação2' => 8
                ],
            ],

            'Ana Clara' => [

                "ASW" => [
                    'avaliação1' => 2,
                    'avaliação2' => 1

                ],

                'BD' => [
                    'avaliação1' => 7,
                    'avaliação2' => 2
                ],

                'PSW' => [
                    'avaliação1' => 4,
                    'avaliação2' => 6
                ],
            ],

            'Sávio' => [

                "ASW" => [
                    'avaliação1' => 5,
                    'avaliação2' => 2

                ],

                'BD' => [
                    'avaliação1' => 5,
                    'avaliação2' => 6
                ],

                'PSW' => [
                    'avaliação1' => 1,
                    'avaliação2' => 1
                ],
            ],

            'Matheus' => [

                "ASW" => [
                    'avaliação1' => 1,
                    'avaliação2' => 0

                ],

                'BD' => [
                    'avaliação1' => 0,
                    'avaliação2' => 1
                ],

                'PSW' => [
                    'avaliação1' => 2,
                    'avaliação2' => 1
                ],
            ],
        ],

        'Agroindustria' => [
            'Daniel' => [

                "Embalagem" => [
                    'avaliação1' => 2,
                    'avaliação2' => 4

                ],

                'Zotequinia' => [
                    'avaliação1' => 5,
                    'avaliação2' => 1
                ],

                'PI' => [
                    'avaliação1' => 5,
                    'avaliação2' => 2
                ],
            ],

            'Reinaldo' => [

                "Embalagem" => [
                    'avaliação1' => 1,
                    'avaliação2' => 1

                ],

                'Zotequinia' => [
                    'avaliação1' => 1,
                    'avaliação2' => 2
                ],

                'PI' => [
                    'avaliação1' => 4,
                    'avaliação2' => 5
                ],
            ],
            'Patricia' => [

                "Embalagem" => [
                    'avaliação1' => 4,
                    'avaliação2' => 5

                ],

                'Zotequinia' => [
                    'avaliação1' => 1,
                    'avaliação2' => 1
                ],

                'PI' => [
                    'avaliação1' => 3,
                    'avaliação2' => 1
                ],
            ],
            'Kyria' => [

                "Embalagem" => [
                    'avaliação1' => 4.4,
                    'avaliação2' => 4.4

                ],

                'Zotequinia' => [
                    'avaliação1' => 5.5,
                    'avaliação2' => 6.6
                ],

                'PI' => [
                    'avaliação1' => 5.6,
                    'avaliação2' => 7.6
                ],
            ],
        ],
    ];



    echo '<pre>';
    foreach ($Array as $curso => $cursos) {
        echo "<br>" . $curso;
        foreach ($cursos as $aluno => $alunos) {
            echo "<br>" . $aluno;
            foreach ($alunos as $disciplina => $disciplinas) {
                echo "<br>" . $disciplina;
                foreach ($disciplinas as $disciplina => $notas) {
                    echo "<br>" . $disciplina, '<br>' . $notas . '<br>';
                  
                }
            }
        }
    }

    echo "</pre>";



    ?>


<h2>Atividade_2</h2>

    <?php
    $Array = [
        'Informatica' => [
            'Kirya' => [

                "ASW" => [
                    'avaliação1' => 10,
                    'avaliação2' => 10

                ],

                'BD' => [
                    'avaliação1' => 9.9,
                    'avaliação2' => 10
                ],

                'PSW' => [
                    'avaliação1' => 10,
                    'avaliação2' => 9.9
                ],
            ],



            'Gomes' => [

                "ASW" => [
                    'avaliação1' => 1,
                    'avaliação2' => 1

                ],

                'BD' => [
                    'avaliação1' => 2,
                    'avaliação2' => 1
                ],

                'PSW' => [
                    'avaliação1' => 1,
                    'avaliação2' => 0
                ],
            ],
        ],


        'Agroindustria' => [
            'Yuri' => [

                "Embalagem" => [
                    'avaliação1' => 1,
                    'avaliação2' => 2

                ],

                'Zotequinia' => [
                    'avaliação1' => 2,
                    'avaliação2' => 0
                ],

                'PI' => [
                    'avaliação1' => 1,
                    'avaliação2' => 0
                ],
            ],

            'Eliara' => [

                "Embalagem" => [
                    'avaliação1' => 8,
                    'avaliação2' => 9

                ],

                'Zotequinia' => [
                    'avaliação1' => 1,
                    'avaliação2' => 4
                ],

                'PI' => [
                    'avaliação1' => 2,
                    'avaliação2' => 4
                ],
            ]
        ]
    ];



    echo '<pre>';
    foreach ($Array as $cursos => $alunos) {
        echo "<br>" . $cursos;
        foreach ($alunos as $aluno => $disciplinas) {
            echo "<br>" . $aluno;
            foreach ($disciplinas as $disciplina => $notas) {
                echo "<br>" . $disciplina;
                foreach ($notas as $nota => $nvalor) {
                   

                    $avaliação1 = $notas['avaliação1'];
                    $avaliação2 = $notas['avaliação2'];
                    $media = ($avaliação1 + $avaliação2) / 2;

                    foreach ($notas as $Nnotas => $valor) {
                        if ($valor >= 5) {

                            echo '<pre>';
                            print_r($Nnotas);
                            echo ' = ';
                            echo $valor;
                            echo '</pre>';
                        } else {
                            echo '<pre>';
                            print_r($Nnotas);
                            echo ' = ';
                            echo $valor;
                            echo ' abaixo da média';
                            echo '</pre>';
                        }
                    }
                    if ($media >= 5) {
                        echo 'Média = ';
                        echo $media;
                        echo ' Aprovado';
                        echo '<br>';
                    } else {
                        echo 'Média = ';
                        echo $media;
                        echo ' Reprovado';
                        echo '<br>';
                    }
                }
            }
        }
    }


    ?>


</body>

</html>