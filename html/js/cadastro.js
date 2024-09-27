document.getElementById('registerForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    const formData = new FormData(this);
    const data = {
        username: formData.get('username'),
        password: formData.get('password'),
        confirm_password: formData.get('confirm_password')
    };

    // Enviar dados usando fetch
    fetch('cadastro.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data) // Enviar dados como JSON
    })
        .then(response => {
            if (response.ok) {
                return response.json(); // Processar a resposta JSON
            } else {
                throw new Error('Erro na requisição');
            }
        })
        .then(result => {
            if (result.status === 'success') {
                document.getElementById('alertContainer').innerHTML = `<div class="alert alert-success" role="alert">${result.message}</div>`;
                this.reset(); // Limpar o formulário
            } else {
                document.getElementById('alertContainer').innerHTML = `<div class="alert alert-danger" role="alert">${result.message}</div>`;
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            document.getElementById('alertContainer').innerHTML = `<div class="alert alert-danger" role="alert">Erro ao cadastrar. Tente novamente.</div>`;
        });
});

