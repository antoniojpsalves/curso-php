<div class="titulo">If e Else</div>

<?php
//echo "certinho";

//o IF altera a proxima sentença de código. Ou seja, ele controle se a próxima(o) sentença única, ou um bloco será executado.

if(true) 
    echo "Serei impresso! <br>";

if(true) {
    echo "Serei impresso novamente!<br>";
    echo "E eu também!<br>";
}

// if else, com uma única sentença associada

if(false)
    echo "Verdadeiro! <br>";
else
    echo "Falso! <br>";

echo "Fim! <br>";

//if else comum, aninhado

if(false) {
    echo "Passo A<br>";
} else if (true) {
    echo "Passo B<br>";
} else {
    echo "Último passo<br>";
}

echo "Fim if aninhado! <br>";