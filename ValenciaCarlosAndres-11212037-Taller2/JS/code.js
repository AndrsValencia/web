$(document).ready(inicio)
function inicio(){
	//alert("funciona motherfucker!");
	$(".botoncompra").click(add)
		$("#carrito").load("INCLUDES/carrito.php");

}
function add(){
	//alert("funciona motherfucker!");
	$("#carrito").load("INCLUDES/carrito.php?p="+$(this).val());

}