jQuery(document).ready(function ($) {
    let productsByCategories = [];
    let productsAll = [];
    let additionalByProduct = [];
    let additionalAll = [];
    let categorieSelected = 0;
    let productSelected = 0;
    let amount = 0;
    let order = [];
    let removeOrder = [];

    $('#aguarde, #blanket').hide();

    // Buscar todos os produtos
    $.get('/admin/order/getproductall/', { dataType: 'JSON' })
        .done((products) => {
            if (products && products[0]) {
                productsAll = products[0];
            } else {
                console.error("Erro ao receber produtos");
            }
        })
        .fail((err) => console.error(err));

    // Buscar todos os adicionais
    $.get('/admin/order/getadditionalall/', { dataType: 'JSON' })
        .done((additional) => {
            if (additional && additional[0]) {
                additionalAll = additional[0];
            } else {
                console.error("Erro ao receber os adicionais");
            }
        })
        .fail((err) => console.error(err));

    // Controle do campo de endereço na opção de delivery
    $("#delivery").change(function () {
        if (this.checked) {
            $('#address_row').html('<input type="text" class="form-control" id="address" name="address" placeholder="Endereço">');
            $('#address_number').html('<input type="text" class="form-control" id="number" name="number" placeholder="Número">');
        } else {
            $('#address_row, #address_number').empty();
        }
    });

    // Seleção de categoria
    $('#categories').on('click', '.category', function () {
        categorieSelected = $(this).attr("type");
        $('.iproduct, .iadditionaliss').remove();

        $.get(`/admin/order/getproduct/${categorieSelected}`, { dataType: 'JSON' })
            .done((products) => {
                if (products && products[0]) {
                    productsByCategories = products[0];
                    productsByCategories.forEach(product => {
                        $('#productsRestaurant').append(`
                            <div class="bg-body ml-2 mr-2 mb-1 p-2 rounded item shadow-sm iproduct" product="${product.id}">
                                ${product.name} R$: ${product.value}
                            </div>`);
                    });
                }
            })
            .fail((err) => console.error(err));
    });

    // Seleção de produto
    $('#productsRestaurant').on('click', '.iproduct', function () {
        $('.iadditionaliss').remove();
        productSelected = $(this).attr("product");

        if (productSelected) {
            order.push([Number(productSelected)]);
        }

        // Buscar adicionais do produto selecionado
        $.get(`/admin/order/getadditional/${productSelected}`, { dataType: 'JSON' })
            .done((additional) => {
                if (additional && additional[0]) {
                    additionalByProduct = additional[0];
                    additionalByProduct.forEach(additional => {
                        $('#adittionalRestaurant').append(`
                            <div class="bg-body ml-2 mr-2 mb-1 p-2 rounded item shadow-sm iadditionaliss" additional="${additional.id}" value="${additional.id}">
                                ${additional.name} R$: ${additional.value}
                            </div>`);
                    });
                }
            })
            .fail((err) => console.error(err));

        const product = productsByCategories.find(tempProduct => tempProduct.id == productSelected);

        if (product) {
            const orderIndex = order.length - 1;
            $('#commands').append(`
                <div class="bg-body py-3 mb-4 mt-4 rounded shadow-sm" id="order-${orderIndex}" product="${product.id}" order="${orderIndex}">
                    <div class="ml-2 mr-2 mb-2 item text-center text-light">${product.name} R$: ${product.value}</div>
                </div>`);
            console.log(`#order-${orderIndex}`);

            $('#order-' + orderIndex).append(`
                <div class="bg-danger text-center ml-2 mr-2 text-light rounded delete-item remove" product="${product.id}" id="${orderIndex}">Remover</div>
            `);

            amount += Number(product.value);
            $('#value').html(`<p style="color: red">Valor Total: R$ ${amount.toFixed(2)}</p>`);
        }
    });

    // Adicionar adicionais ao produto
    $('#iadditionaliss').on('click', '.iadditionaliss', function () {
        const additionalSelected = $(this).attr("additional");

        if (additionalSelected && order.length > 0) {
            const lastOrderIndex = order.length - 1;
            order[lastOrderIndex].push(String(additionalSelected));

            const additional = additionalByProduct.find(tempAditional => tempAditional.id == additionalSelected);
            if (additional) {
                $('#order-' + lastOrderIndex).append(`
                    <p class="text-light" id="order-${lastOrderIndex}-additional-${additional.id}" style="margin-top:-10px">
                        -> ${additional.name} R$: ${additional.value}
                    </p>`);
                amount += Number(additional.value);
                $('#value').html(`<p style="color: red">Valor Total: R$ ${amount.toFixed(2)}</p>`);
            }
        }
    });

    // Processar compra
    $("#buy").click(function () {
        const name = $('#name').val();
        const delivery = $('#delivery').is(":checked") ? 1 : 0;
        const trip = $('#trip').is(":checked") ? 1 : 0;
        const address = $('#address').val() || '';
        const number = $('#number').val() || '';

        $('#cont').empty();

        if (delivery && !address) {
            $("#cont").append('<div class="alert alert-danger" role="alert">Insira algum endereço</div>');
            return false;
        }

        if (!name) {
            $("#cont").append('<div class="alert alert-danger" role="alert">O nome é obrigatório</div>');
            return false;
        }

        if (order.length === 0) {
            $("#cont").append('<div class="alert alert-danger" role="alert">Insira algum item na comanda</div>');
            return false;
        }

        removeOrder.sort().reverse().forEach(index => order.splice(index, 1));

        order.forEach((item, i) => {
            $("#form").append(`<input type="hidden" name="list[${i}]" value="${item}" />`);
        });

        $("#form").append(`
            <textarea name="name" style="display:none">${name}</textarea>
            <input type="hidden" name="delivery" value="${delivery}" />
            <textarea name="address" style="display:none">${address}</textarea>
            <input type="hidden" name="number" value="${number}" />
            <input type="hidden" name="trip" value="${trip}" />
            <input type="hidden" name="value" value="${amount.toFixed(2)}" />
        `);
    });

    // Remover item do pedido
    $('#commands').on('click', '.remove', function () {
        const id = $(this).attr("id");
        const productId = $(this).attr("product");
        $("#order-" + id).remove();

        const product = productsAll.find(tempProduct => tempProduct.id == productId);
        if (product) {
            amount -= Number(product.value);
            $('#value').html(`<p style="color: red">Valor Total: R$ ${amount.toFixed(2)}</p>`);
        }

        removeOrder.push(id);
        console.log("Remover: ", removeOrder);
        console.log("Pedido: ", order);
    });
});
