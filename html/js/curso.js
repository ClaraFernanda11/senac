const salvar = document.getElementById('salvar');

async function insert(){

}

salvar.addEventListener('click', async() => {
    //const response = awaint insert();
    //console.log(response);
    const form = document.getElementById('dados_curso');
    const formDatat = new FormData(form)
    formDatat.append('nome_curso', document.getElementById('nome').value);
    formDatat.append('valor_curso', document.getElementById('valor'). value);
    formDatat.delete('valor_curso');
    console.log(formData.get('nome_curso'));
    console.log(formData.get('valor_curso'));
    console.log(formData.has('valor_curso'));
})