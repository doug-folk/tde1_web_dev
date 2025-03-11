<?php
function fatorial($n) {
    return ($n <= 1) ? 1 : $n * fatorial($n - 1);
}

function permutacoes($arr) {
    if (count($arr) == 1) return [$arr];
    $resultado = [];
    foreach ($arr as $i => $val) {
        $restante = $arr;
        unset($restante[$i]);
        foreach (permutacoes(array_values($restante)) as $p) {
            $resultado[] = array_merge([$val], $p);
        }
    }
    return $resultado;
}

$N = intval(readline());
$matriz = [];
for ($i = 0; $i < $N; $i++) {
    $matriz[] = array_map('intval', explode(' ', trim(readline())));
}

$enfeites = range(0, $N - 1);
$max_confianca = 0;
$melhor_ordem = [];
foreach (permutacoes($enfeites) as $ordem) {
    $confianca = 1;
    for ($i = 0; $i < $N; $i++) {
        $confianca *= $matriz[$i][$ordem[$i]];
    }
    if ($confianca > $max_confianca) {
        $max_confianca = $confianca;
        $melhor_ordem = $ordem;
    }
}

echo implode(' ', array_map(fn($x) => $x + 1, $melhor_ordem)) . "\n";
?>
