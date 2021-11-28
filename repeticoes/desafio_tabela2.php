<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="post">
    <label for="linhas">Número de linhas</label>
    <input type="text" name="linhas" id="linhas">
    <label for="linhas">Número de colunas</label>
    <input type="text" name="colunas" id="colunas">
    <input type="submit" value="Criar">
</form>

<?php
    $linhas = isset($_POST['linhas']) ? $_POST['linhas'] : 0;
    $colunas = isset($_POST['colunas']) ? $_POST['colunas'] : 0;
    $matriz = [];
    $cont = 1;

    if($linhas > 0 && $colunas > 0) {

        echo "O total de células dessa tabela é: ".  ($linhas * 1) * ($colunas * 1);

        /**
         * Para solucionar esse problema, eu criei uma variável cont iniciando do 1. E 2 'fors' para montar o array!
         * Pegando o número de linhas, criei um variavel para criar os ídices do primeiro array.
         * Pegando o número de colunas, criei o conteúdo de cada linha do array usando o cont para preencher e acrecentando +1,
         * dentro do for inteiro (que preenche os valores a ser mostrado na tabela).
         */
        for($i = 1; $i <= $linhas; $i++) {
            for($j = 1; $j <= $colunas; $j++){
                $matriz[$i][$j] = $cont;
                $cont++;
            }
        }
    }
    

    /* echo "<pre>";
    print_r($matriz);
    echo "</pre>"; */
?>

<table>
    <?php
        foreach($matriz as $i => $j){
            $style = $i % 2 === 0 ? 'background-color: lightblue;' : '';
            echo "<tr style ='{$style}'>";
            foreach($j as $v) {
                echo "<td> $v </td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>
