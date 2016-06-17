var brasil;
var counter;

function drawMap() {
    brasil = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 5,
        center: new google.maps.LatLng(-14.2400732, -53.1805018),
        mapTypeId: google.maps.MapTypeId.HYBRID
    });
}

function carregarFiltros() {
    var anos = _unique(dados.map(function (i) {
        return i.ano
    })).sort();

    _appendSelect($('#ano'), anos);

    var situacoes = _unique(dados.map(function (i) {
        return i.situacao;
    })).sort();

    $('#situacao').append('<option value=\'\'>(todos)</option>');
    _appendSelect($('#situacao'), situacoes, undefined, situacaoLabel);

    var status = _unique(dados.map(function (i) {
        return i.status;
    })).sort();

    $('#status').append('<option value=\'\'>(todos)</option>');
    _appendSelect($('#status'), status, undefined, function(i) {
        return '(' + i.charAt(0) + ') ' + i;
    });

	var ufs = _unique(dados.map(function (i) {
        return i.uf
    })).sort();

    $('#uf').append('<option value=\'\'>(todos)</option>');
    _appendSelect($('#uf'), ufs, undefined, function(i) {
        return i;
    });
	

}

function search() {
    _limparMarcadores();

    marcadores = dados
        .filter(_anoFilter)
        .filter(_situacaoFilter)
        .filter(_statusFilter)
        .filter(_ufFilter)
        .map(_criarMarcador);
		
	
	$("#counter").html(counter);
	//alert(counter); mostra resultados na tela
}

function _appendSelect(select, dataArray, valueFn, labelFn) {
    for (var v in dataArray) {
        var label = (typeof labelFn === 'undefined' ? dataArray[v] : labelFn(dataArray[v]));
        var value = (typeof valueFn === 'undefined' ? dataArray[v] : valueFn(dataArray[v]));
        select.append('<option value=\'' + value + '\'>' + label + '</option>');
    }
}

function _limparMarcadores() {
    if (typeof marcadores !== 'undefined') {
        for (var m in marcadores) {
            marcadores[m].setMap(null);
        }
    }
    counter = 0;	//contador inicia zerado
}

function _anoFilter(i) {
    return i.ano == $('#ano :selected').val();
}

function _situacaoFilter(i) {
    var value = $('#situacao :selected').val();
    if (value == '') {
        return true;
    }
    return i.situacao == value;
}

function _statusFilter(i) {
    var value = $('#status :selected').val();
    if (value == '') {
        return true;
    }
    return i.status == value;
}

function _ufFilter(i) {
    var value = $('#uf :selected').val();
    if (value == '') {
        return true;
    }
    return i.uf == value;
}


function _criarMarcador(i) {
    var iconColor;
	
    switch (i.situacao) {
        case 'AA':
            iconColor = 'green';
            break;
        case 'AP':
            iconColor = 'yellow';
            break;
        case 'FR':
            iconColor = 'blue';
            break;
        case 'NA':
            iconColor = 'red';
            break;
    }

    counter = counter + 1;	//Acresce 1 ao gerar novo marcador
    return new google.maps.Marker({
        position: i.latLng,
        title: i.cidade,
        map: brasil,
        icon: 'img/' + iconColor + '_Marker' + i.status.charAt(0)+  '.png'
		
	
    });
}

function _unique(array) {
    var n = {}, r = [];
    for (var i = 0; i < array.length; i++) {
        if (!n[array[i]]) {
            n[array[i]] = true;
            r.push(array[i]);
        }
    }
    return r;
}


