var usuario = {
    'nome': 'João',
    'profissao': 'Engenheiro',
    'cidade': 'São Paulo'
}

var dados = JSON.stringify(usuario);

console.log(dados)
$.ajax({
    url: 'recebe.php',
    type: 'POST',
    data: { data: dados },
    success: function (result) {
        // Retorno se tudo ocorreu normalmente
    },
    error: function (jqXHR, textStatus, errorThrown) {
        // Retorno caso algum erro ocorra
    }
});