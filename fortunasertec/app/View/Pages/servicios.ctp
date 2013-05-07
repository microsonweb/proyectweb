<div class="main">
	<section id="content">
	<div class="padding-1">
		<div class="container_16"> 
			<div class="wrapper">
				<article class="grid_16">
				<div class="slogan-1 p6">
						
					Servicios
				</div>
						
			
                        
                        
			<h1 class="p3">Nosotros creemos que nuestros clientes siempre estan primero,por esto mismo trabajamos para mantener sus equipos en funcionamiento .</h1>
			<div class="wrapper indent-bot">
				<article class="grid_4 alpha">
					<div class="box-1">
						<div class="box-padding">
							<figure class="indent-bot1 rel"> <?php echo $this->Html->image('servicio-1.jpg', array('alt' => '')); ?></figure>
							<div class="left-pad">
								<div class="box-title">
									
								<a id="electrico" href="#" rel="tab-03-content">Electrico</a></div>
								Natoqe peatus magnis parturient  amet montes nascetur.
							</div> 
						</div>
					</div>
				</article>
				<article class="grid_4">
					<div class="box-1">
						<div class="box-padding">
							<figure class="indent-bot1 rel"><?php echo $this->Html->image('servicio-2.jpg', array('alt' => '')); ?></figure>
							<div class="left-pad">
								<div class="box-title"><a id="electronico" href="#" rel="tab-02-content">Electronico</a></div>
								Natoqe peatus magnis parturient  amet montes nascetur.
							</div> 
						</div>
					</div>
				</article>
				<article class="grid_4">
					<div class="box-1">
						<div class="box-padding">
							<figure class="indent-bot1 rel"><?php echo $this->Html->image('servicio-3.jpg', array('alt' => '')); ?></figure>
							<div class="left-pad">
								<div class="box-title"><a id="aste" href="more.html">Asistencia Tecnica</a></div>
								Natoqe peatus magnis parturient  amet montes nascetur.
							</div> 
						</div>
					</div>
				</article>
		
			</div>

			<div class="wrapper">
    <div id="content" class="ninecol last">
      <div class="panel-wrapper">
        <div class="panel">
          <div class="tabs">
            <ul>
              <li id="elct" class="active"><a href="#" rel="tab-01-content">Electricos</a></li>
              <li id="elcr"><a href="#" rel="tab-02-content">Electronicos</a></li>
              <li id="aste" class="last"><a href="interface-elements.html#" rel="tab-03-content">Asesoramiento Tecnico</a></li>
            </ul>
            <div class="collapse">collapse</div>
          </div>
          <div class="tabs-content"> <!-- ## Panel Content  -->
            <div id="tab-01-content" class="active">
             <ul>
			 	<li><h4>>Pack Electrico Originales - Multimarcas </h4></li>
			 	<li><h4>>Sistemas de Proteccion y Carga de Comandos de Apertura </h4></li>
			 	<li><h4>>Reemplazo de AB2 Originales y Alternativos </h4></li>
			 	<li><h4>>Mantenimientos y Reemplazo de Comandos Originales </h4></li>
			 	<li><h4>>Valvula de Corte de Mando</h4></li>
			 	<li><h4>>Motores de Arranque y Alternadores </h4></li>
			 	<li><h4> </h4></li>
			 	<li><h4> </h4></li>
				
			 </ul>
            </div>
            <div id="tab-02-content">
			 <ul>
			 	<li><h4>>Desarollo de Software </h4></li>
			 	<li><h4>>Reemplazo de Micro Controladores </h4></li>	
			 	<li><h4>>Jungla Osciladores </h4></li>
			 	<li><h4>>Reparacion de Modulos Electronicos </h4></li>
			 	<li><h4>>Angulo, Radio Y Tara</h4></li>
			 	<li><h4>>Electronic Data Processing</h4></li>
				
			 </ul>
			</div>	
            <div id="tab-03-content">
              <h1>Soporte Tecnico</h1>
			  <p>Nuestro Departamento Tecnico da Soporte Eléctrico y Electrónico  para el perfecto funcionamiento de sus equipos. 			  Contamos  con una gran variedad de planes exclusivos  de mantenimiento. Cada uno de estos mantendrá  sus  equipos funcionando sin problemas.
<br>Garantizando sus proyectos  a tiempo, y  la completa satisfacción de sus necesidades.
</p>
			  <p class="highlight"> 
			  	Telefonos:(+54) 0341-15343232
			  <br>Email: tecnico@fortunasertecvial.com.ar
			  </p>
            </div>
            <!-- ## / Panel Content  --> </div>
        </div>
        <div class="shadow"></div>
      </div>



			</div>
			
		</div>
	</div>
</div>
</div>
</div>
<script>

$(document).ready(function(){
//Your code goes here.
//$('.sf-menu li').click(function(){
    $('.sf-menu li').removeClass('current');
    $('#servicios').toggleClass('current');
	
//Cambia el stilo de li seleccionado con la funcion clik
//Example
$('.box li').removeClass('active2');
$(this).addClass('active2');	
   
			$('.panel .tabs li').click(function(){
			var parent = $(this).closest('.panel');
			var content = $('a', this).attr('rel');

			
			
			$('.tabs .active', parent).removeClass('active');
			$(this).addClass('active');
			$('.tabs-content > .active', parent).slideUp('fast', function(){
				$(this).removeClass('active');
				
				$('#'+content).slideDown('fast', function(){
					$(this).addClass('active');
					
				});
			});
			
			return false;
		});




			$('#electrico').click(function(){
			var parent = $('#elct').closest('.panel');
			var content = $('a', '#elct').attr('rel');
		
			$('.tabs .active', parent).removeClass('active');
			$(this).addClass('active');
			
			$('.tabs-content > .active', parent).slideUp('fast', function(){
				$(this).removeClass('active');
				
				$('#'+content).slideDown('fast', function(){
					$(this).addClass('active');
					
				});
			});
			
			return false;
		});
			$('#electronico').click(function(){
			var parent = $('#elcr').closest('.panel');
			var content = $('a', '#elcr').attr('rel');
		
			$('.tabs .active', parent).removeClass('active');
			$(this).addClass('active');
			
			$('.tabs-content > .active', parent).slideUp('fast', function(){
				$(this).removeClass('active');
				
				$('#'+content).slideDown('fast', function(){
					$(this).addClass('active');
					
				});
			});
			
			return false;
		});



	function init_panels() {
		
		$('.panel .collapse').click(function(){
			if ($(this).closest('.panel').hasClass('collapsed')){
				var restoreHeight = $(this).attr('id');
				
				$(this).closest('.panel').animate({height:restoreHeight+'px'}, function() {   
					$(this).removeClass('collapsed');
				});
				
			}else{
				var currentHeight = $(this).closest('.panel').height();
				
				$(this).attr('id', currentHeight);
				$(this).closest('.panel').addClass('collapsed').animate({height:'45px'}, function(){		});
			}
		}); 
		
		$('.panel .tabs li').click(function(){
			var parent = $(this).closest('.panel');
			var content = $('a', this).attr('rel');
			alert(parent);
			$('.tabs .active', parent).removeClass('active');
			$(this).addClass('active');
			
			$('.tabs-content > .active', parent).slideUp('fast', function(){
				$(this).removeClass('active');
				
				$('#'+content).slideDown('fast', function(){
					$(this).addClass('active');
				});
			});
			
			return false;
		});
		
	}


});
	
</script>
