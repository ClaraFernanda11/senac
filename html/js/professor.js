const salvar_professor= document.getElementById('btnsalvar');

async function insert() {
const form = document.getElementById('form');
const formData = new FormData(form);
const opt = {
    method: 'POST',
    body: formData
}

const response = fetch('professor.php', opt);

}

salvar_professor.addEventListener('click',async()=>{
    await insert();
});   