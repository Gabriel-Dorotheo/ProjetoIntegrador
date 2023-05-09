<?php 

// Define o número de repetições
$numRepeticoes = 20;

// Cria um array vazio para armazenar as repetições
$array = array();

// Repete os dados do array $tableData o número de vezes especificado
for ($i = 0; $i < $numRepeticoes; $i++) {
    $array[] = array(
        '1',
        'Lorem',
        'Ipsum',
        'Lorem@Ipsum.com',
        'Lorem',
        'ipsum@1234',
        '<td class="d-flex justify-content-around">
            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
        </td>'
    );
}

// Exibe o array resultante
print_r($array);

?>