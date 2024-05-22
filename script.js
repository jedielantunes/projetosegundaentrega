window.addEventListener('load', function() {
    // Verifica se o usuário está na página compra.php
    if (window.location.pathname.includes("compra.php")) {
        // Chama a função para mostrar a notificação
        mostrarNotificacaoCarrinhoVazio();
    }
});

function mostrarNotificacaoCarrinhoVazio() {
    var mensagem = 'Carrinho vazio!\nHora de ir às compras 😁'; 
    window.confirm(mensagem);
}
