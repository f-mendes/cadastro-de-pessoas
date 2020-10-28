$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('#modalInfo').on('shown.bs.modal', function () {
        $('#meuInput').trigger('focus');
    })

    $('.buscaInfoCliente').click(function (){
        $('#dadosCliente').html('');
        const id = $(this).parent().find('input').val();
        const token = $('input[name="_token"]').val();

        $.ajax({
            url: '/pessoas/'+id,
            type: "GET",
            dataType: 'json',
            data: {
                id: id,
                token: token
            },
            success: function( data ) {
                const divContainer = $('<div class="container row"/>');
                let html = '';
                for(var label in data.pessoa){
                    html += '<div class="d-flex flex-column col mb-3">';
                    html += '<span class="text-secondary text-capitalize">'+label+'</span>';
                    html += '<span>'+data.pessoa[label]+'</span>';
                    html += '</div>'
                }
                data.telefones.forEach(function (obj){
                    html += '<div class="d-flex flex-column col">';
                    html += '<span class="text-secondary">Telefone </span>';
                    html += '<span>'+obj.telefone+'</span>';
                    html += '</div>';
                });

                $('#dadosCliente').append(divContainer.append(html));
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
        });
    });

    $('.EditaCliente').click(function (){

        const id = $(this).parent().find('input').val();
        const token = $('input[name="_token"]').val();

        $.ajax({
            url: '/pessoas/'+id,
            type: "GET",
            dataType: 'json',
            data: {
                id: id,
                token: token
            },
            success: function( data ) {
                $('#formEdit').attr('action','/pessoas/'+id);
               $('#nome-cliente').val(data.pessoa.nome);
               $('#sobrenome-cliente').val(data.pessoa.sobrenome);
               $('#email-cliente').val(data.pessoa.email);
                tel = [];
                data.telefones.forEach(function (obj){
                    tel.push(obj.telefone);
                });
                $('#telefone-principal').val(tel[0]);
                $('#telefone-recado').val(tel[1]);
                $('#estado option[value="'+data.pessoa.estado+'"]').attr('selected',true);
                $('#pais option[value="'+data.pessoa.pais+'"]').attr('selected',true);
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
        });
    });
});
