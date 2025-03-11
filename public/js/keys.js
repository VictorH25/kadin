jQuery(document).ready(function($){ //<--- o $(...) equivale a função $.ready(...) que só executa um script quando o DOM (document) tiver sido carregado
    $("key").click(function(){
        id = this.id
        $.post("/admin/order/delivered", {
            "_token": $('input[name=_token]').val(),
            "id": id
        }).fail(function (error) {
            alert(error); //Pega o erro, podendo ser uma exception no parse ou um erro HTTP
        });
        $('#key'+id).hide()
    });
});