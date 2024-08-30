const salvar_turma= document.getElementById('btnsalvar');

async function insert() {
const form = document.getElementById('form');
const formData = new FormData(form);
const opt = {
    method: 'POST',
    body: formData
}

const response = fetch('turma.php', opt);

}

salvar_turma.addEventListener('click',async()=>{
    await insert();
});   