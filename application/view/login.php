<form id="fo3" action="envio.php" method="post" name="fo3">
<fieldset><legend>Perfil</legend>
<ol>
    <li><label>Nombres:</label><input name="fnombres" size="30" type="text" /></li>
    <li><label>Apellidos:</label><input name="fapellidos" size="30" type="text" /></li>
    <li><label>Correo:</label><input name="fcorreo" size="30" type="text" /></li>
</ol>
<input name="mysubmit" type="submit" value="Enviar" /></fieldset>
</form>
<div id="result"></div>

<script src="../../resource/js/jquery-2.2.4.min.js" language="javascript"></script>
<script language="javascript">// <![CDATA[
$(document).ready(function() {
   // Esta primera parte crea un loader no es necesaria
    $().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
    });
   // Interceptamos el evento submit
    $('#form, #fat, #fo3').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
				setTimeout($('#result').html(data), 3000)
                ;
				
            }
        })        
        return false;
    }); 
})
// ]]></script>