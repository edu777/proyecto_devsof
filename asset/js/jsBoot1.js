// Ejemplo 2 de CSS-BOOTSTRAP este es su script 
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
        
 // Ejemplo 3 de CSS-BOOTSTRAP este es su script 
 $(document).ready(function(){
    $("#myTooltips a").tooltip({
        template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-info-sign"></span>Informacion de herramienta</h3></div><div class="tooltip-inner"></div></div>'
    });
});