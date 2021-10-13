<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milhas</option>
        <option value="milha-km">Milhas > KM</option>
        <option value="metros-km">Metros > KM</option>
        <option value="km-metros">KM > Metros</option>
    </select>
    <input type="text" name='temp_p'>
    <select name="temp" id="temp">
        <option value="c-f">C > F</option>
        <option value="f-c">F - C</option>
    </select>
    
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

echo "<p class='divisao'>Minha resposta:</p><hr>";

if(isset($_POST['param'])) {

    $input_value = $_POST['param'] ?? 0;

    $action = $_POST['conversao'] ?? 0;

    $input_temp = $_POST['temp_p'] ?? 0;

    $action_temp = $_POST['temp'] ?? 0;

    switch($action) {
        case 'km-milha':
            $return = $input_value / 1.609;
            break;
        case 'milha-km':
            $return = 1.609 * $input_value;
            break;
        case 'metros-km':
            $return = $input_value / 1000;
            break;
        case 'km-metros':
            $return = 1000 * $input_value;
            break;
        default:
            echo "Nada foi calculado";
    }
    echo "A conversão é: $return";


    //Parte 2.
    switch($action_temp) {
        case 'c-f':
            $return_t = ($input_temp * 1.8) + 32;
            break;
        case 'f-c':
            $return_t = ($input_temp - 32) / 1.8;
            break;
        default:
            echo"Não convertemos a temperatura.";
    }
    echo "<br>A conversão de temperatura é: $return_t";
}

echo "<br><br><br><br><br>";

echo "<p class='divisao'>Resposta do professor:</p><hr>";

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0;

switch($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia MILHAS";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param MILHAS = $distancia KM";
        break;
    case 'metros-km':
        $distancia =  $param / FATOR_METRO_KM;
        $mensagem = "$param METROS = $distancia KM";
        break;
    case 'km-metros':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param KM = $distancia METROS";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p> $mensagem</p>";
