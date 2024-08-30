const salvar_disciplina= document.getElementById('btnsalvar');

async function insert() {
const form = document.getElementById('form');
const formData = new FormData(form);
const opt = {
    method: 'POST',
    body: formData
}

const response = fetch('disciplinas.php', opt);

}

salvar_disciplina.addEventListener('click',async()=>{
    await insert();
});   