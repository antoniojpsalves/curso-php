<div class="titulo">Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d, de %B de %y';
$formatoDataHora = '%A, %d, de %B de %y - %H:%M:%S';


$agora = new DateTime();

//print_r($agora);
//echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'pt_BR');

echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$amanha = new DateTime('+1 day');
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$dataFixa = new DateTime('1997-06-04 18:00');
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

$amanha->modify('+1 day');
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000,5,1);
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$dataPassada = new DateTime('2000-5-1');
$dataFutura = new DateTime('2032-5-1');
$outraData = new DateTime('2032-5-1');

echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo ($outraData == $dataFutura ? 'Igual' : 'Diferente') . '<br>';

// $tz = new DateTimeZone('America/Sao_paulo');
// $agora = new DateTime(null, $tz);
// echo $agora->format('d/M/Y H:i:s');