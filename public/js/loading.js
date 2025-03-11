jQuery(document).ready(function($){

    $( "#money_confirm, #cdebit_confirm, #pix_confirm, #ccredit_confirm, #crediary_confirm" ).click(function() {
        $('#money_confirm').css('display','none');
        $('#form_money').append('<button class="btn btn-success" disabled>Confirmar</button>')

        $('#cdebit_confirm').css('display','none');
        $('#form_debit').append('<button class="btn btn-success" disabled>Confirmar</button>')

        $('#pix_confirm').css('display','none');
        $('#form_pix').append('<button class="btn btn-success" disabled>Confirmar</button>')

        $('#ccredit_confirm').css('display','none');
        $('#form_credit').append('<button class="btn btn-success" disabled>Confirmar</button>')

        $('#crediary_confirm').css('display','none');
        $('#form_crediary').append('<button class="btn btn-success" disabled>Confirmar</button>')

    })



})
