//VALIDA NO0MBRE DE USUARIO REPETIDO (ENVIA A ajax_validacion_nick.php)
			$('#nick').change(function(){
				$.post('ajax_validacion_nick.php',{
					nick:$('#nick').val(),

					beforeSend: function(){
						$('.validacion').html("Espere un momento por favor...");
					}	
				}, function(respuesta){
					$('.validacion').html(respuesta);
				});
			});
			//OCULTA BOTON GUARDAD
			$('#btn_guardar').hide();

			//COMPARA CONTRASEÑAS
			$('#pass2').change(function(event){
				if ($('#pass1').val()==$('#pass2').val()) {
					swal('Bien hecho...','Las contraseñas coinciden','success');
					$('#btn_guardar').show();
				}else{
					swal('Upss !!','Las contraseñas no coinciden','error');
					$('#btn_guardar').hide();
				}
			});

			//DESACTIVA EL ENTER EN EL FORMUALRIO PARA QUE NO SE ENVÍE
			// ajax -->> selesccionar por:
			// elemento -->>> "div"
			// clase -->>> ".clase"
			// id -->>> "#identificador (id="identiifcador")"
			$('.form').keypress(function(e){
				if (e.wich == 13) {
					return false;
				}
			});
