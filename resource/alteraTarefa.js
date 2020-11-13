function alterarTarefa(idTarefa, checkbox) {
    const form = new FormData();
    if (checkbox.checked) {
        form.append("status", 'on');
    }
    form.append("id", idTarefa);

    fetch('http://localhost:8585/alteraTarefa.php', {
        method: 'POST',
        body: form
    }
    ).then(function(response) {
        response.json().then(function(json) {            
            document.getElementById('status-'+json.id).textContent = json.legenda
        })
    }).catch(function(error) {
        console.error(error)
    }) 
}