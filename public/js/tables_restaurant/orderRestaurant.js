jQuery(document).ready(function($){
    var productsByCategories = []
    var productsAll = []
    var additionalByProduct = []
    var additionalAll = []
    var categorieSelected = 0
    var productSelected = 0
    var amount = 0
    var order = []
    var removeOrder = []

    $('#aguarde, #blanket').css('display','none');
    $.get({
        url:'/admin/order/getproductall/',
        dataType:'JSON',
        success:function(products){
            if(products != (undefined || null || '')){    
              productsAll = products[0]
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
                additionalAll = additional[0]
            }else{
                console.log("Erro ao receber os adicionais");
            }   
        },
        error:function(err){
            console.log(err)
        }
    })
    //add type
    $('#categories').on('click', '.category', function() {
        categorieSelected = $(this).attr("type")
        console.log(categorieSelected)
        $('.iproduct').remove()
        $('.iadditionaliss').remove()
        $.get({
            url:'/admin/order/getproduct/'+categorieSelected,
            dataType:'JSON',
            success:function(products){
                if(products != (undefined || null || '')){    
                    productsByCategories = products[0]
                    productsByCategories.forEach(function(product) {
                        $('#productsRestaurant').append(`<div class="bg-body ml-2 mr-2 mb-1 p-2 rounded item shadow-sm iproduct" product='${product.id}'>${product.name} R$: ${product.value}</div>`);
                    });
                }
            },
            error:function(err){
                console.log(err)
            }
        })
    })
    //add product
    $('#productsRestaurant').on('click', '.iproduct', function() {
        $('.iadditionaliss').remove()
        productSelected = $(this).attr("product")
        if(productSelected !== null){
            order.push([Number(productSelected)])
        }
        $.get({
            url:'/admin/order/getadditional/'+productSelected,
            dataType:'JSON',
            success:function(additional){
                if(additional != (undefined || null || '')){    
                    additionalByProduct = additional[0]
                    additionalByProduct.forEach(function(additional) {
                        $('#adittionalRestaurant').append(`<div class="bg-body ml-2 mr-2 mb-1 p-2 rounded item shadow-sm iadditionaliss" additional="${additional.id}" value='${additional.id}'>${additional.name} R$: ${additional.value}</div>`);
                    });
                }
            },
            error:function(err){
                console.log(err)
            }
        })
        let product = productsByCategories.filter(tempProduct => tempProduct['id'] == productSelected)[0]
        $('#commands').append(`
        <div class="bg-body py-3 mb-4 mt-4 rounded shadow-sm" id="order-${order.length - 1}" product="${product['id']}" order="${order.length - 1}">
            <div class="ml-2 mr-2 mb-2 item text-center text-light">${product['name']} R$: ${product['value']}</div>
        </div>`)
        console.log('#order-'+String(order.length - 1))
        $('#order-'+String(order.length - 1)).append(`<div class="bg-danger text-center ml-2 mr-2 text-light rounded delete-item remove" product="${product['id']}" id="${order.length - 1}">Remover</div>`);

        amount = Number(amount) + Number(product['value'])
        $('#value').empty()
        $('#value').append('<p style="color: red">Valor Total: R$ '+amount.toFixed(2)+' </p>')
        
    })
    //add additional
    $('#iadditionaliss').on('click', '.iadditionaliss', function() {
        additionalSelected = $(this).attr("additional")
        if(additionalSelected !== null){
        if('#'+(order.length - 1)){
            $("#"+(order.length - 1)).remove()
        }
        order[order.length - 1].push(String(additionalSelected))
        }
        
        let additional = additionalByProduct.filter(tempAditional => tempAditional['id'] == additionalSelected)[0]
        $('#order-'+String(order.length - 1)).append(`<p class="text-light" id="order-${order.length - 1}-additional-${additional['id']}" style='margin-top:-10px'>-> ${additional['name']} R$:     ${additional['value']}</p>`);
        amount = Number(amount) + Number(additional['value'])
        $('#value').empty()
        $('#value').append('<p style="color: red">Valor Total: R$ '+amount.toFixed(2)+' </p>')
    })
    //finalizar
    $("#buy").click(function() {
        $('#errorMessage').empty();
        if (order.length === 0) {
            $("#errorMessage").append(
                '<div class="alert alert-danger" role="alert">Insira algum item na comanda</div>'
            );
            return false;
        }  else {
            removeOrder = removeOrder.sort()
            console.log(removeOrder)
            if (order.length === 0) {
                $("#errorMessage").append(
                    '<div class="alert alert-danger" role="alert">Insira algum item na comanda</div>'
                );
                return false;
            }else{
                for (let i = removeOrder.length - 1; i >= 0; i--) {
                    const index = parseInt(removeOrder[i], 10);
                    order.splice(index, 1);
                }
            }
            console.log("Order finish teste"+order)
              order.forEach((item, i) => {
                $( "#form" ).append(`<input type="hidden" id="list" name="list[${i}]" value="${item}" />`);
              });
              $( "#form" ).append(`
                <input type="hidden" id="value_form" name="value" value="${amount.toFixed(2)}" />
              `);
        }
    });
    //delete item
    $('#commands').on('click', '.remove', function() {
    var id = $(this).attr("id");
    var product_id = $(this).attr("product");
    $("#order-"+id).remove()
    $("#" + id).remove()
    let product = productsAll.filter(tempProduct => tempProduct['id'] == product_id)[0]
    amount = Number(amount) - Number(product['value'])
    $('#value').empty()
    $('#value').append('<p style="color: red">Valor Total: R$ '+amount.toFixed(2)+' </p>')
    removeOrder.push(id)
    console.log("Remover: "+removeOrder)
    console.log("Pedido: "+order)
    $('#additional').empty()
    });
})