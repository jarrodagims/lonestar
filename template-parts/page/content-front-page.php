<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
$currentLang = qtrans_getLanguage();
?>



<div class="jumbotron home-ban">
	<div class="container">
		<div class="ban-right">
			<ul>
				<?php wp_nav_menu( array( 'menu' => 'sidebar-menu','menu_class' => 'ban-right') ); ?>
				<?php 
						
				$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

				if (strpos($url,'/es/') !== false) {

				echo '<li id="popup-btn" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1282"><a href="#" data-toggle="modal" data-target="#myModal">Contactenos</a></li>';

				}

				else {

				echo '<li id="popup-btn" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1282"><a href="#" data-toggle="modal" data-target="#myModal">Contact Us Today</a></li>';

				}

			?>
				<!--<li id="popup-btn" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1282"><a href="#" data-toggle="modal" data-target="#myModal">Contact Us Today</a></li>!-->
			</ul>			
			<a href="<?php echo get_field('bbb_org_link'); ?>"><img src="<?php echo get_field('bbb_logo'); ?>"></a>
			<h2>View Our A+ Rating</h2>
		</div>
		<div class="video" style="margin:0px;">
		<?php if($currentLang=='es'){?>
			
			<?php if(get_field('loan_star_spanish_video', get_the_ID())==''){?>
				<img src="<?php bloginfo('template_directory'); ?>/images/ban-video.jpg" style="margin: 0px !important;">
			<?php }else{?>				
			
				<div id="video-box"><div class="videoWrapper"><iframe width="560" height="315" src="<?php echo get_field('loan_star_spanish_video', get_the_ID()); ?>?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div></div>
			
			<?php }?>
	
		<?php }else{?>
			
				<?php if(get_field('loan_star_english_video', get_the_ID())==''){?>
				<img src="<?php bloginfo('template_directory'); ?>/images/ban-video.jpg">
			<?php }else{?>
				
				<div id="video-box"><div class="videoWrapper"><iframe width="560" height="315" src="<?php echo get_field('loan_star_english_video', get_the_ID()); ?>?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div></div>	
			<?php }?>
		
		<?php }?>
		
			<?php 
						
				$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

				if (strpos($url,'/es/') !== false) {

				echo '<a href="https://www.lonestarinvestments.com/%E2%80%8Bland-for-sale/"><button class="buy">VEA LOS TERRENOS DISPONIBLES</strong></button></a>';

				}

				else {

				echo '<a href="https://www.lonestarinvestments.com/%E2%80%8Bland-for-sale/"><button class="buy">VIEW AVAILABLE TRACTS NOW</strong></button></a>';

				}

			?>
			
			
			<?php if(is_page('land-for-sale')){ echo 'Test';} ?>
		
		
		
		
		</div>
	</div>
</div>

<!-- Content -->
<div id="content">
	<!-- Section 1 -->
	<div class="row guarantee">
		<div class="container">
			<div class="clearfix">
				<div class="left"><img src="<?php echo get_field('lone_star_guarantee_icon'); ?>"></div>
				<div class="right">
					<h2><?php echo get_field('lone_star_guarantee_title'); ?></h2>
						<?php echo get_field('lone_star_guarantee_descriptions'); ?>
				</div>
			</div>
			<div class="text clearfix">
				<div class="col-md-4">
					<ul>
						<?php $datas = get_field('guarantee_title');
										
                            foreach ($datas as $data) {
                                            
						?>
						<li><?php echo $data['guarantee_title1']; ?></li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-md-4">
					<h3><?php echo get_field('lone_star_investments_title1'); ?></h3>
					<h4><?php echo get_field('lone_star_investments_title2'); ?></h4>
						<?php echo get_field('lone_star_investments_content'); ?>
				</div>
				<div class="col-md-4 location">
					<img src="<?php echo get_field('location_image'); ?>">
					<h4><?php echo get_field('location_title'); ?></h4>
				</div>
			</div>
   		</div>
  	</div>
	<div class="row home-content">
		<div class="container">
			<?php 
						
				$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

				if (strpos($url,'/es/') !== false) {
					
					echo'<h1>Lone Star Investments: ¡Es hora de invertir en tu futuro!</h1>

			<p>Texas es, con diferencia, el estado más grande de los Estados Unidos contiguos. Esto significa que tenemos una gran cantidad de tierra de sobra. Si está considerando comprar un terreno en el oeste de Texas, elija Lone Star Investments como su compañía de venta de terrenos. Hemos estado en el negocio desde 1989 y orgullosamente contamos con una calificación A + del Better Business Bureau. De hecho, ¡hemos mantenido esta distinción por más de 25 años! Cuando trabajas en equipo con Lone Star Investments, eliges un equipo de inversión en tierras que es diferente al resto. Hacemos lo correcto para usted, el cliente. ¡Reclama tu propio pedazo de Texas hoy!</p>

			<h2>Quiénes Somos: Honestos, Confiables, Fiables</h2>

			<p>Cuando se trata de ventas de tierras, es necesario formar equipo con una compañía de inversión en tierras que entienda el área y lo que están vendiendo. Lone Star Investments es una compañía de tres generaciones. Hemos estado en el negocio en El Paso, Texas desde 1989. Nuestro personal, que está compuesto por muchos profesionales, tiene más de 100 años de experiencia combinada en el campo de la venta de tierras. Si esta es la primera vez que compra un terreno o 50, nuestro equipo le proporcionará la atención y el servicio exactos que necesita. Nos enorgullecemos de mantener los más altos estándares. Estamos dedicados a servirle a usted, nuestro cliente, con el mejor servicio. A diferencia de otras compañías de venta de terrenos, nos esforzamos para que su compra se desarrolle de la mejor manera posible.</p> 

			<h2>Ir más allá para ti</h2>

			<p>Pero, ¿qué nos diferencia específicamente del resto? Todo se reduce a cómo hacemos para dirigir nuestra empresa. Todas nuestras propiedades tienen carreteras de acceso directo que permiten un fácil acceso. Somos la única compañía de venta de terrenos que ofrece este simple detalle. Esta es solo una de las formas en que hacemos más y más para hacer que su inversión en terrenos sea lo más fácil posible.</p> 

			<h2>Tours especializados lo ayudan a familiarizarse con su tierra</h2> 

			<p>Lone Star Investments ofrece visitas especializadas a nuestros lotes para que pueda ver su posible inversión futura antes de continuar con la transacción. Lo llevaremos al lote para que pueda conocer el área. Dado que conocemos la tierra como la palma de nuestra mano, estaremos encantados de responder cualquier pregunta que pueda tener y elaborar en detalle sobre la tierra en sí.</p> 

			<h2>Te prepararemos con la tierra de tus sueños</h2>

			<p>Si no le gusta su parcela de tierra específica, con mucho gusto le asignaremos otra de igual valor. Nuestra tierra es tan grande que podemos ofrecerle fácilmente otra parcela que se adapte a sus necesidades. No descansaremos hasta que te preparemos con todos tus sueños. Invertir en la tierra es invertir en tu futuro. Queremos que encuentres la parcela de tierra adecuada para que tus sueños puedan florecer. Como eres el propietario de la tierra, podrás usarla como quieras. Póngase en contacto con el equipo de Lone Star Investments hoy para obtener más información sobre lo que nuestra tierra tiene para ofrecer.</p>';
					
				}
			
			else {
			
			echo'<h1>Lone Star Investments: It’s Time To Invest In Your Future!</h1>

			<p>Texas is, by far, the largest state in the contiguous United States. This means we have a lot of land to spare. If you’re considering purchasing land in west Texas, choose Lone Star Investments as your land sale company. We have been in business since 1989 and we proudly boast an A+ rating from the Better Business Bureau. In fact, we’ve held this distinction for over 25 years! When you team up with Lone Star Investments, you’re choosing a land investment team that’s different from the rest. We do what’s right for you, the client. Claim your very own piece of Texas today!</p>

			<h2>Who We Are: Honest, Trustworthy, Reliable</h2>

			<p>When it comes to land sales, it’s necessary to team up with a land investment company that understands the area and what they’re selling. Lone Star Investments is a three-generation company. We’ve been in business in El Paso, Texas since 1989.Our staff, which is made up of many professionals, has over 100 years of combined experience in the field of land sales. Whether this is your first time buying land or your 50th, our team will provide the exact care and service you require. We pride ourselves in maintaining the highest standards. We are dedicated to serving you, our client, with the best service. Unlike other land sale companies, we strive to make your purchase run as smoothly as possible.</p> 

			<h2>Going Above and Beyond for You</h2>

			<p>But what specifically sets us apart from the rest? It all comes down to how we go about running our company. All of our properties have cut-in roads which allow for easy access. We are the only land sale company that offers this simple detail. This is just one of the ways in which we go above and beyond to make your land investment as effortless as possible.</p> 

			<h2>Specialized Tours Help You Get Acquainted with Your Land</h2> 

			<p>Lone Star Investments provides specialized tours of our lots so you can take a look at your potential future investment before you proceed with the transaction. We will drive you to the lot so you can get to know the the area. Since we know the land like the back of our hand, we will be happy to answer any questions you may have and elaborate in detail about the land itself.</p> 

			<h2>We’ll Set You Up With The Land of Your Dreams</h2>

			<p>If you end up not liking your specific plot of land, we will gladly assign you another one of equal value. Our land is so large that we can easily offer you another plot that will suit your needs. We won’t rest until we set you up with the lot of your dreams. Investing in land is investing in your future. We want you to find the right plot of land so your dreams can flourish. Since you own the land, you’ll be able to use it as you so please. Contact the Lone Star Investments team today to learn more about what our land has to offer.</p>';
			}?>

		</div>
    </div>	
	<!-- Section 2 -->	
	<div class="row services">
		<div class="container">
       		<ul class="clearfix">
				<?php 
						
				$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

				if (strpos($url,'/es/') !== false) {
					
					echo'
       			<li>
       				<div class="box">
       					<img src="/wp-content/uploads/2018/02/img1.jpg">
       					<h3>RV / Camper</h3>
       				</div>
       					<p>Ideal para R / V, campistas y amp; Quinto ruedas. Ubicado lejos de la congestión urbana pero conveniente para los servicios de la ciudad y la Interestatal 10. ¡Pintoresca área con vistas panorámicas a la montaña!</p>
       			</li>       			       								
       			<li>
       				<div class="box">
       					<img src="/wp-content/uploads/2018/02/img2.jpg">
       					<h3>Caza - Ganadería - Ganadería</h3>
       				</div>
       					<p>¡Los cazadores sueñan! Ciervo, codorniz, paloma y amp; Conejo Jack corre entre las estribaciones de Sierra Diablo y el área montañosa. Entusiastas de la naturaleza</p>
       			</li>       			       								
       			<li>
       				<div class="box">
       					<img src="/wp-content/uploads/2018/02/pro-img7.jpg">
       					<h3>Recreativo</h3>
       				</div>
       					<p>Ideal para practicar senderismo, montar a caballo, cuatrimotos y otras actividades al aire libre. Imagínese ... aire fresco, espacios abiertos, cielos azules y vistas panorámicas a las montañas. ¡Experimenta la gloria del oeste!</p>
       			</li>';
					
				}
				
				else{
					
					echo'<li>
       				<div class="box">
       					<img src="/wp-content/uploads/2018/02/img1.jpg">
       					<h3>RV / Camper</h3>
       				</div>
       					<p>Ideal For R/V&rsquo;s, Campers &amp; Fifth Wheels. Located away from urban congestion yet convenient to city services and Interstate 10. Picturesque area with panoramic mountain views!</p>
       			</li>       			       								
       			<li>
       				<div class="box">
       					<img src="/wp-content/uploads/2018/02/img2.jpg">
       					<h3>Hunting - Ranching - Farming</h3>
       				</div>
       					<p>Hunters dream! Deer, quail, dove &amp; jack rabbit run among the Sierra Diablo foothills and mountain area. Outdoors enthusiasts welcome!</p>
       			</li>       			       								
       			<li>
       				<div class="box">
       					<img src="/wp-content/uploads/2018/02/pro-img7.jpg">
       					<h3>Recreational</h3>
       				</div>
       					<p>Great for Hiking, Horseback Riding, ATV&rsquo;s and other outdoor activities! Imagine...fresh air, wide-open spaces, clear blue skies and panoramic mountain views. Experience the Glory of the West!</p>
       			</li>';
					
				}
				
				?>
				
				
       		</ul>
       		<a href="http://www.lonestarinvestments.com/%E2%80%8Bland-for-sale/"><button class="buy">Buy 20 acres <strong>now</strong></button></a>
   		</div>
  	</div>
