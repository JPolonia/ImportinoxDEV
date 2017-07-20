
//Bootstrap Table
	$('[data-toggle=offcanvas]').click(function() {
	  	$(this).toggleClass('visible-xs text-center');
	    $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
	    $('.row-offcanvas').toggleClass('active');
	    $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
	    $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
	    $('#btnShow').toggle();
	});

	$('#gridTable').bootstrapTable({data: jsonData,search:true,showColumns:true,showToggle:true,});
    

    $('#filter-bar').bootstrapTableFilter({
            filters:[
                {
                    field: 'ref',    // field identifier
                    label: 'Referência',    // filter label
                    type: 'range'   // filter type
                },
                {
                    field: 'design',
                    label: 'Descrição',
                    type: 'search',
                    enabled: true   // filter is visible by default
                },
                {
                    field: 'material',
                    label: 'Material',
                    type: 'select',
                    values: [
                        {id: 'ROLE_ANONYMOUS', label: 'Anonymous'},
                        {id: 'ROLE_USER', label: 'User'},
                        {id: 'ROLE_ADMIN', label: 'Admin'}
                    ],
                },
                {
                    field: 'acabamento',
                    label: 'Acabamento',
                    type: 'search'
                },
                {
                    field: 'diametro',
                    label: 'Diametro',
                    type: 'ajaxSelect',
                    source: 'http://example.com/get-cities.php'
                }
            ],
            connectTo:'#gridTable',
			onSubmit: function() {
                var data = $('#filter-bar').bootstrapTableFilter('getData');
                console.log(data);
            }
	});
	function stateFormatter(value, row, index) {
		if(row.stock < 0){return {disabled: true}}
		return value;
	}
	function stockFormatter(value, row, index) {
		switch(row.stock) {
			case 'A':
				return '<img src="assets/img/green.svg" align="middle" width="22" height="22">';
			case 'B':
				return '<img src="assets/img/yellow.svg" align="middle" width="22" height="22">';
			case 'C':
				return '<img src="assets/img/grey.svg" align="middle" width="22" height="22">';
			default:
				return value;			
		} 
	}

	function detailFormatter(index, row) {
        var html = [];
        $.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }

    function qtdFormatter(value, row, index) {
		return '<input type="number" name="qtdnum" placeholder="" class="inputQtd" value="' + value +'" tabindex="1">';
	}  

