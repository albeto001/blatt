
$(document).on("click", "div.marca", function(){
	var marca = $(this).attr('id');
	var anio = $('div.anio.seleccionado').attr('id');
	//alert(anio);
	$.ajax({
        url : base_url + '/modelos',
        data : {'anio' : anio, 'marca' : marca},
        type : 'get',
        dataType : 'json',
        success : function(data) {
        	contenido = "";
        	 $.each(data, function (index, data) {
		        contenido += "<div class='row modelo selector' id='" + data.modelo + "'><a class=\"scroll\" href=\"#codigos\">" + data.modelo + "</a></div>"; 
		    });
        	$("#modelos").html(contenido);
        	scroll();
        },
        error : function(xhr, status) {
            
        }
    });
});

$(document).on("click", "div.selector", function(){
	var padre = $(this).parent();
	padre.find("div.selector").removeClass("seleccionado");
	$(this).addClass("seleccionado");
});

$(document).on("click", "div.anio", function() {
    var anio = $(this).attr("id");
    $.ajax({
        url : base_url + '/marcasAnio',
        data : {'anio' : anio},
        type : 'get',
        dataType : 'json',
        success : function(data) {
        	contenido = "";
        	 $.each(data, function (index, data) {
		        contenido += "<div class=\"col-lg-4 marca selector\" id=\"" + data.marca + "\">" +
								"<div class=\"panel\">" +
									"<a class=\"scroll\" href=\"#modelos\"><h2><img src=\"images/marcas/" + data.marca + ".png\" class=\"img-responsive\" alt=\"" + data.marca + "\" onerror=\"reemplaza($(this))\"></h2></a>" +
								"</div>" +
							 "</div>";
		    });
        	$("div.marcas").html(contenido);
        	scroll();
        },
        error : function(xhr, status) {
            
        }
    });
});

$(document).on("click", "div.modelo", function(){
    var modelo = $(this).attr("id");
    var anio = $('div.anio.seleccionado').attr('id');
    var marca = $('div.marca.seleccionado').attr("id")
    $.ajax({
        url : base_url + '/codigos',
        data : {'anio' : anio, 'modelo' : modelo, 'marca' : marca },
        type : 'get',
        dataType : 'json',
        success : function(data) {
            var cont = "";
        	$.each(data, function(index, data) {
        	    cont += "<div class=\"col-md-4 col-sm-6 portfolio-item\">" +
            				"<a href=\"#\" id=\"" + data.codigo + "\" class=\"pluma\" data-toggle=\"modal\"data-target=\"#myModal\">" +
            					"<div class=\"portfolio-hover\">" +
            						"<div class=\"portfolio-hover-content\">" +
            							"<i class=\"fa fa-plus fa-3x\"></i>" +
            						"</div>" +
            					"</div>" +
            					"<img src=\"images/plumas/" + data.codigo + "_thumb.jpg\" class=\"img-responsive\" alt=\"\">" +
            				"</a>" +
            				"<div class=\"portfolio-caption\">" +
            				    "<h5 id='dec_" + data.codigo + "'>" + data.descripcion + "</h5>" +
            					"<p class=\"text-muted\">" + data.codigo + "</p>" +
            					 "<p>" + data.dato1 + "</p>" +
            					 "<p>" + data.dato2 + "</p>" +
            				"</div>" +
            			"</div>";
        	});
        	$("div.cont_codigos").html(cont);
        	scroll();
        },
        error : function(xhr, status) {
            
        }
    });
    
    $(document).on("click", "a.pluma", function(){
        var codigo = $(this).attr("id");
        var descripcion = $("#dec_"+codigo).text();
        var cont = "<div class='col-md-6 col-sm-6'><img src=\"images/plumas/" + codigo + "_.jpg\" class=\"img-responsive\" alt=\"\"></div>"+
                    "<div class='col-md-6 col-sm-6'><img src=\"images/plumas/" + codigo + "_b.jpg\" class=\"img-responsive\" alt=\"\"></div>";
        $("div.imgs_pluma").html(cont);
        
        $("h4.modal-title").text(descripcion);
    });
});

function reemplaza(elemento){
    var marca = elemento.attr("alt");
    elemento.parent().html(marca);
}