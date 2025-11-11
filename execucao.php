<?php

require_once('modelo/instrumento.php');
require_once('modelo/prova.php');
require_once('modelo/trabalho.php');
require_once('modelo/participacao.php');

//-------------------------------------------------------------------------------------------------------------

$participacao = new participacao();
$prova = new prova();
$trabalho = new trabalho();

$participacao->setNota(readline('Nota participação:'));
$prova->setNota(readline("Nota prova:"));
$trabalho->setNota(readline("Nota trabalho:"));

//-------------------------------------------------------------------------------------------------------------

if ($participacao->AnaliseParticipacao() <= 10 || $prova->AnaliseProva() <= 10 || $trabalho->AnaliseTrabalho() <= 10)
{
    print "Notas: ";
    $participacao->AnaliseParticipacao();
    $prova->AnaliseProva();
    $trabalho->AnaliseTrabalho();
}
else
{
    print"A nota NÃO deve ser maior que 10";
    return;
}

$media = ($participacao->getNota() + $prova->getNota() + $trabalho->getNota()) / 3 ;

print "\nMédia: ".$media."\n";

