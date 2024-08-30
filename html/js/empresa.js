const salvar_empresa=document.getElementById('btnsalvar');

async function insert() {
    const form=document.getElementById('form');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    
    const response = fetch('empresa.php', opt);
    
    }
    
    salvar_empresa.addEventListener('click',async()=>{
        await insert();
    });   
