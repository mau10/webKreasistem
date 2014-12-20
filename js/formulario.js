// VARIABLES
var $form = $("#formulario"),
	$usuario = $("#usuario"),
	$clave = $("#clave"),
	$submit = $("#submit"),
	$boton = $("#mostrar_form"),
	$list = $("#contenido");

// FUNCIONES
//Aparece el formulario
function mostrarFormulario(){
	$form.slideToggle()
}

function agregaPost(){
	var usuario = $usuario.val(),
		clave = $clave.val(),
		$clone = $post.clone();
	$clone.find("#usuario a")
		.text(usuario)
		.attr("href",clave);
	$clone.hide();
	$list.prepend($clone);
	$clone.fadeIn();

}
// Eventos
$boton.click(mostrarFormulario)