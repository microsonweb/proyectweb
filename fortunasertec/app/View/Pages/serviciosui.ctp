<div class="main">
	<section id="content">
	<div class="padding-1">
		<div class="container_16"> 
			<div class="wrapper">
				<article class="grid_16">
				<div class="slogan-1 p6">
						
					<span>Servicios</span>
				</div>
						
			</div>
                        
                        
			<h1 class="p3">Nosotros creemos que nuestros cliente siempre esta primero, y por eso, trabajamos para mantener sus equipos en funcionamiento para aumentar su productividad.</h1>
			<!--<div class="wrapper indent-bot">
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
								<div class="box-title"><a href="#" rel="tab-02-content">Servicio - 2</a></div>
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
								<div class="box-title"><a href="more.html">Servicio - 3</a></div>
								Natoqe peatus magnis parturient  amet montes nascetur.
							</div> 
						</div>
					</div>
				</article>
		
			</div>-->

			<div class="wrapper">
    <div id="content" class="ninecol last">
      <div class="panel-wrapper">
        <div class="panel">
          <div class="tabs">
            <ul>
              <li class="active">
			 <article class="grid_4 alpha">
					<div class="box-1">
						<div class="box-padding">
							<figure class="indent-bot1 rel"> <?php echo $this->Html->image('servicio-1.jpg', array('alt' => '')); ?></figure>
							<div class="left-pad">
								<div class="box-title">
									
								<a href="#" rel="tab-01-content">Electrico</a></div>
								Natoqe peatus magnis parturient  amet montes nascetur.
							</div> 
						</div>
					</div>
				</article>
			 <!-- <a href="#" rel="tab-01-content">Electrico</a>-->
			  	
			  </li>
              <li>
			  <article class="grid_4">
					<div class="box-1">
						<div class="box-padding">
							<figure class="indent-bot1 rel"><?php echo $this->Html->image('servicio-2.jpg', array('alt' => '')); ?></figure>
							<div class="left-pad">
								<div class="box-title"><a href="#" rel="tab-02-content">Servicio - 2</a></div>
								Natoqe peatus magnis parturient  amet montes nascetur.
							</div> 
						</div>
					</div>
				</article>
	<!--		  	
			  <a href="#" rel="tab-02-content">Electronico</a>
			  	-->
			  </li>
              <li class="last">
			  <article class="grid_4">
					<div class="box-1">
						<div class="box-padding">
							<figure class="indent-bot1 rel"><?php echo $this->Html->image('servicio-3.jpg', array('alt' => '')); ?></figure>
							<div class="left-pad">
								<div class="box-title"><a href="#"  rel="tab-03-content">Servicio - 3</a></div>
								Natoqe peatus magnis parturient  amet montes nascetur.
							</div> 
						</div>
					</div>
				</article>	
			  <!--<a href="interface-elements.html#" rel="tab-03-content">Asesoramiento Tecnico</a>-->
			  	
			  </li>
            </ul>
            <!--<div class="collapse">collapse</div>-->
          </div>
          <div class="tabs-content"> <!-- ## Panel Content  -->
            <div id="tab-01-content" class="active">
				<ul>
					<h4><li>  Servicio Electrico 1 </li>
					<li>  Servicio Electrico 2 
					</li>
					<li> Servicio Electrico 3 </li>
					<li> Servicio Electrico 4 </li>
					<li> Servicio Electrico 5 </li></h4>
					
				</ul>
            </div>
            <div id="tab-02-content">
              <p>Pellentesque tincidunt est nec odio fringilla bibendum. Aenean in justo neque, non lobortis ante. Vestibulum vitae turpis ut erat pretium eleifend et vel lorem. Donec nibh mauris, fermentum a elementum at, pretium et velit. Curabitur auctor ante a justo consequat tristique. Nulla facilisi. Cras sem risus, dictum placerat ullamcorper id, tempus nec tortor. Aenean sollicitudin pulvinar enim, at condimentum mauris mollis vel. </p>
            </div>
            <div id="tab-03-content">
              <p>Felis id venenatis consectetur, sem sem rutrum lectus, ut tristique metus augue ac justo. Suspendisse mauris lectus, scelerisque nec commodo in, aliquet a ligula. Praesent auctor lobortis adipiscing. Nulla  elit massa, ultrices in iaculis nec, elementum a magna. Pellentesque ut magna id nunc iaculis facilisis.</p>
            </div>
            <!-- ## / Panel Content  --> </div>
        </div>
        <div class="shadow"></div>
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
			var parent2 = parent;
			var content = content;
		
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
			var parent  = parent2;
			var content = content2;
		
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