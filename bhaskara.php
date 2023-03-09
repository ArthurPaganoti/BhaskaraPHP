<?php
$a = $_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];
$delta = ($b**2)-(4*$a*$c);
if ($delta < 0) {
    echo "A equação não possui resultados reais <br>";
} elseif ($delta == 0) {
    echo "A equação possui apenas um resultado real ou possui dois resultados iguais <br>";
} elseif ($delta > 0) {
    echo "A equação possui dois resultados distintos reais <br> ";
}
$x1 = -$b + sqrt($delta) / 2*$a;
$x2 = -$b - sqrt($delta) / 2*$a;
echo "O resultado das suas raízes são: $x1 , $x2";
?>