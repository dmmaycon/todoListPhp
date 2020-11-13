<?php

require "src/classes/Tarefa.php";
require "src/classes/ArquivoTarefa.php";


if (isset($_POST)) {
    $json = '';
    $arquivoTarefa = new ArquivoTarefa('tarefas.json');
    
    // recupera as tarefas
    $arrTarefas = $arquivoTarefa->le();
    
    foreach ($arrTarefas as &$tarefa) {
        if ($tarefa->getId() == $_POST['id']) {
            if (isset($_POST['status']) && $_POST['status'] == 'on') {
                $tarefa->setStatus(0);
            } else {
                $tarefa->setStatus(1);
            }
            $json = json_encode([
                'id' => $tarefa->getId(),
                'legenda' => $tarefa->legenda()
            ]);
        }
    }

    $arquivoTarefa->salva($arrTarefas);

    echo $json;
}