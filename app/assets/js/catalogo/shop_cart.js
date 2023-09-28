
var dynamicJSON,storedArray,counterDuplicates, counter;
	//$.removeCookie('cart');

	$('#erase-cart').click(function () {
		dynamicJSON = '';
		if($.cookie('cart') != undefined){
			$.removeCookie('cart');
		}
		$('#modalTable-table').bootstrapTable('removeAll');
        
	});

	$('#buttonAddCart').click(function () {
		dynamicJSON = $('#gridTable').bootstrapTable('getSelections');

		if(jQuery.isEmptyObject(dynamicJSON)){
			$.alert("Nenhum artigo selecionado",{autoClose: true,closeTime: 2000,withTime: false,type: 'danger',
				position: ['center', [-0.42, 0]],title: false,close: '',speed: 'normal',isOnly: true,minTop: 100,
			});
		}else{
			counterDuplicates = 0;
			counter = Object.keys(dynamicJSON).length;

			if($.cookie('cart') != undefined){
				storedArray = JSON.parse($.cookie('cart'));
			    $.each(dynamicJSON,function(index,object){
			    	//Check if item is already on cart
			    	if($.grep(storedArray, function(e){ return e.ref == object.ref; }) == 0){
			    		storedArray.push(object);
					}else{
						counterDuplicates++;
					}
			    });
			   	
			   	counter -= counterDuplicates;

			    if(counter > 0){
				    $.alert(counter + "  artigos novos adicionados",{autoClose: true,closeTime: 1000,withTime: false,type: 'success',
						position: ['center', [-0.42, 0]],title: false,close: '',speed: 'normal',isOnly: false,minTop: 180,
						onShow: function () {$('#gridTable').bootstrapTable('uncheckAll');}
					});
				}
				if(counterDuplicates){
					$.alert(counterDuplicates + "  artigos repetidos",{autoClose: true,closeTime: 1000,withTime: false,type: 'warning',
						position: ['center', [-0.42, 0]],title: false,close: '',speed: 'normal',isOnly: false,minTop: 250,
						onShow: function () {$('#gridTable').bootstrapTable('uncheckAll');}
					});
				}
			}else{
				$.alert(counter + "  artigos novos adicionados",{autoClose: true,closeTime: 1000,withTime: false,type: 'success',
					position: ['center', [-0.42, 0]],title: false,close: '',speed: 'normal',isOnly: false,minTop: 180,
					onShow: function () {$('#gridTable').bootstrapTable('uncheckAll');}
				});
			}

			$.cookie('cart',JSON.stringify(storedArray));
			$('#gridTable').bootstrapTable('uncheckAll');
		}
	});

	$('#buttonModal').click(function () {

		dynamicJSON = JSON.parse($.cookie('cart'));

		$('#modalTable-table').bootstrapTable('load', {
            data: dynamicJSON
        });

    });

    $('#modalTable').on('shown.bs.modal', function () {
		$('#modalTable-table').bootstrapTable('resetView');
	});


	replacer = function(key, value){
		if (key == "material" 
		 || key == "acabamento" 
		 || key == "diametro" 
		 || key == "comprimento" 
		 || key == "qtdcx" 
		 || key == "peso"
		 || key == "uni"
		 || key == "stock"
		 || key == "state") {
		    return undefined;
		}
		return value;
	}

	var OBJ, sendOBJ,sendJSON, dadosJSON;

	$(".inputQtd").focusout(function(){
		var qtd;
		qtd = $(this).val();
        $('#modalTable-table').bootstrapTable('updateRow', {
	        index: index,
	        row: {
	            qtd: qtd
	        }
    	});
    	OBJ = $('#modalTable-table').bootstrapTable('getData');
    	$.cookie('cart',JSON.stringify(OBJ));
    });

	$('#modalTable').on('hidden.bs.modal', function () {
	  	var qtd;
	  	var index=0;
		$.each( $('input[name="qtdnum"]'),function(){
		    qtd = $(this).val();
		      $('#modalTable-table').bootstrapTable('updateRow', {
	            index: index,
	            row: {
	                qtd: qtd
	            }
		    	});
		      index++;
	    });
		OBJ = $('#modalTable-table').bootstrapTable('getData');
		$.cookie('cart',JSON.stringify(OBJ));
		//alert(JSON.stringify(OBJ));
	})
	

	$('#send-modal').click(function () {
	    var index=0;
	    var qtd;
	    var dados={};

	    dados.nome = $('#nome').val();
	    dados.empresa = $('#empresa').val();
	    dados.contribuinte = $('#contribuinte').val();
	    dados.email = $('#email').val();

	    $.each( $('input[name="qtdnum"]'),function(){
	    qtd = $(this).val();
	      $('#modalTable-table').bootstrapTable('updateRow', {
            index: index,
            row: {
                qtd: qtd
            }
	    	});
	      index++;
	    });

		OBJ = $('#modalTable-table').bootstrapTable('getData');
		sendJSON = JSON.stringify(OBJ,replacer);
		dadosJSON = JSON.stringify(dados);

		sendOBJ = $.parseJSON(sendJSON);

		//alert(JSON.stringify(sendOBJ));
		//alert(dadosJSON);


		/*Launch modal table for client information*/
		$.ajax({
            type: "POST",
            url: "send_orcamento.php",
            //dataType: 'json',
            data: { dados: dados, json:sendOBJ},
            success: 
	            function(data){
	                alert(data);
	            },
	        error:function(exception){alert('Exception:'+ exception);}
        });

       	dynamicJSON = '';
		if($.cookie('cart') != undefined){
			$.removeCookie('cart');
		}
		$('#modalTable-table').bootstrapTable('removeAll');

    });

