<div class="titulo">Erros Personalizados</div>

<?php

class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        echo "Erro personalizado: $message.";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if($idade < 18) {
        throw new FaixaEtariaException('Você é menor de idade, não pode se aponsentar.');
    }
    if($idade > 70) {
        throw new FaixaEtariaException('Já deveria estar aposentado.');
    }

    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, tempo restante para aposentadoria: $tempoRestante<br>";
    } catch(FaixaEtariaException $e) {
        echo "Não foi possível calcular para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo "Fim.";