jQuery(document).ready(function($){
    products_all = []
    additional_all = []
    value_total = 0
    order = []
    cont = -1
    $( "#delivery" ).change(function() {
        console.log($( "#delivery" )[0].checked)
        if($( "#delivery" )[0].checked == true){
            $('#address_row').append('<input type="text" class="form-control" id="address" name="address" placeholder="Endereço">')
            $('#address_number').append('<input type="text" class="form-control" id="number" name="number" placeholder="Numero">')
        }else{
            $('#address_row').empty()
            $('#address_number').empty()
        }
    })
    //Get all products
    $.get({
        url:'/admin/order/getproductall/',
        dataType:'JSON',
        success:function(products){
            if(products != (undefined || null || '')){    
                products_all = products
            }else{
                console.log("Erro ao receber produtos");
            }   
        },
        error:function(err){
            console.log(err)
        }
    })
    //Get all additional
    $.get({
        url:'/admin/order/getadditionalall/',
        dataType:'JSON',
        success:function(additional){
            if(additional != (undefined || null || '')){    
                additional_all = additional
                $('#aguarde, #blanket').css('display','none');

            }else{
                console.log("Erro ao receber os adicionais");
                $('#aguarde, #blanket').css('display','none');
            }   
        },
        error:function(err){
            console.log(err)
        }
    })
    //List of products and additional
    $('#categories').change(function(){
        value = $('#categories').val()
        $('#products').empty()
        $('#additional').empty()
        $('#products').append()
        for(i = 0; i < products_all[0].length; i++){
            if(value == products_all[0][i]['type_id']){
                $('#products').append("<option value='"+products_all[0][i]['id']+"'>"+products_all[0][i]['name']+" R$:"+products_all[0][i]['value']+"</option>")
            }
        }
    })

    //Product command
    $('#products').change(function(){
        $('#additional').empty()
        value = $('#products').val()
        cont = cont + 1
        if(value !== null){
            order.push([value])
        }
        for (i = 0; i < products_all[0].length; i++) { 
            if(products_all[0][i]['id'] == value){
                $('#commands').append('<p style="color: blue">'+products_all[0][i]['name'] +" R$: "+ products_all[0][i]['value']+"</p>")
                value_total = Number(value_total) + Number(products_all[0][i]['value'])
            }
        }
        
        
         
        

        for(i = 0; i < additional_all[0].length; i++){
            if(value == additional_all[0][i]['product_id']){
                $('#additional').append("<option value='"+additional_all[0][i]['id']+"'>"+additional_all[0][i]['name']+" R$:"+additional_all[0][i]['value']+"</option>")
            }
        }
        value = null
 //   $("#products").find("option:selected").prop("selected", false)



        $('#value').empty()
        $( "#value" ).append('<p  style="color: red">Valor Total: R$ '+value_total.toFixed(2)+' </p>')
    })
    //Adittional command
    $('#additional').change(function(){
        value = $('#additional').val()
        if(value !== null){
            order[cont].push(String(value))
        }
        for (i = 0; i < additional_all[0].length; i++) { 
            if(additional_all[0][i]['id']==value){
                $('#commands').append("<p style='margin-top:-10px'>"+"-> "+additional_all[0][i]['name'] +" R$: "+ additional_all[0][i]['value']+"</p>")
                value_total = Number(value_total) + Number(additional_all[0][i]['value'])
            }
        }
        $("#additional").find("option:selected").prop("selected", false)
        $('#value').empty()
        $( "#value" ).append('<p  style="color: red">Valor Total: R$ '+value_total.toFixed(2)+' </p>')
    })

    //BUY click
    $("#buy").click(function(){ 
        name = $('#name').val()
        if ($('#delivery').is(":checked"))
        {
            delivery = 1
        }else{
            delivery = 0
        }
        if ($('#trip').is(":checked"))
        {
            trip = 1
        }else{
            trip = 0
        }

        if(delivery == 1){
            if($('#address').val()){
                address = $('#address').val()
                number = $('#number').val()
            }else{
                $( "#cont" ).append(
                    '<div class="alert alert-danger" role="alert">'+'Insira algum endereço'+'</div>')
                return false;
            }
        }else{
            address = $('#address').val()
            number = $('#number').val()
        }

        desk_valid = $('#desk_valid').val()
        if(desk_valid == 1){
            desk = $('#desk').val()

            $( "#form" ).append(
                "<input type="+"hidden"+" id="+"desk"+" name="+"desk"+" value="+desk+" />",
            )
        }
        $('#cont').empty()


        if(order.length === 0){
            $( "#cont" ).append(
                '<div class="alert alert-danger" role="alert">'+'Insira algum item na comanda'+'</div>')
            return false;
        }else{
            if(name == ""){
                $( "#cont" ).append('<div class="alert alert-danger" role="alert">'+'O nome é obrigatorio'+'</div>')
                return false;
            }else{
                for(i = 0; i < order.length; i++){
                    $( "#form" ).append(
                        "<input type="+"hidden"+" id="+"list"+" name="+"list["+i+"]"+" value="+order[i]+" />",
                    )
                }
                $( "#form" ).append(
                    "<input type="+"hidden"+" id="+"value_form"+" name="+"value"+" value="+value_total.toFixed(2)+" />",
                    "<textarea type="+"textarea"+" id="+"name_form"+" name="+"name"+" style="+"display:none"+">"+name+"</textarea>",
                    "<input type="+"hidden"+" id="+"delivery_form"+" name="+"delivery"+" value="+delivery+" />",
                    "<textarea type="+"textarea"+" id="+"address_form"+" name="+"address"+" style="+"display:none"+">"+address+"</textarea>",
                    "<input type="+"hidden"+" id="+"number_form"+" name="+"number"+" value="+number+" />",
                    "<input type="+"hidden"+" id="+"trip_form"+" name="+"trip"+" value="+trip+" />"

                    )
            }
        }
    })
})