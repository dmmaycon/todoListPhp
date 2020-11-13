<?php

require "src/classes/Tarefa.php";
require "src/classes/ArquivoTarefa.php";


if (isset($_POST)) {
    $tarefa = new Tarefa(1, $_POST['nome'], $_POST['descricao'], $_POST['dataLimite'], $_POST['imagem']);
    $arquivoTarefa = new ArquivoTarefa('tarefas.json');
    
    // recupera as tarefas
    $arrTarefas = $arquivoTarefa->le();
    $arrTarefas[] = $tarefa;
    $arquivoTarefa->salva($arrTarefas);

    header('Location: /');
}