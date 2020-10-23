<?php
// index sera o ponto central

require "src/classes/Tarefa.php";
require "src/classes/ArquivoTarefa.php";

// $tarefa = new Tarefa(0, "Teste", "Teste da classe tarefa", "22/10/2020");
// $tarefa2 = new Tarefa(1, "Teste 2", "Teste da classe tarefa 2", "23/10/2020");

// $listaTarefas = [];
// $listaTarefas[] = $tarefa;
// $listaTarefas[] = $tarefa2;

$arquivoTarefa = new ArquivoTarefa("tarefas.json");
// $arquivoTarefa->salva($listaTarefas);

print_r($arquivoTarefa->le());