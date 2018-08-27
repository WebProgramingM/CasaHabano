<?php 

$op = array(
	'lang'=>'es',
	'menuNav' => array(
		['Inicio','#home'],
		['Nosotros','#about'],
		['Historia','#history'],
		['Marcas','#brands'],
		['Experiencia','#experiences'],
		['Tienda','#store']
	),
	'desNav' => array(
		['Inicio','#home'],
		['Nosotros','#about'],
		['Experiences','#experiences'],
		['Ubicacion','#location'],
		['Clasificado','#ranked']
	),
	'titleFooter'=>'COZUMEL',
	'addressFooter'=>'Benito Juárez No1 Centro Cozumel',
	'linkFooter'=>'#',
	'store'=> array(
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
			'link' =>'#'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'#'
		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'#'
		],
	),
	'social'=> array(
		[
			'title' =>'icon-twitter-with-circle',
			'link' =>'#'

		],
		[
			'title' =>'icon-facebook-with-circle',
			'link' =>'#'
		],
		[
			'title' =>'icon-instagram-with-circle',
			'link' =>'#'
		],
	),
);
$home = array(
	'title'=> 'EL PUNTO CUBANO EN MÉXICO',
	'sub_title'=> 'LOS EXPERTOS EN CIGARRAS DE MÉXICO ',
	//About
	'title_About'=> 'Acerca de nosotros',
	'content_About'=>'<p class="lead mb-30">A local barber shop that was created by two friends in 1996. Our motto: Keeping it oldschool and handsome.</p>
                        <p class="mb-40">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <h5 class="mb-10">Open Hours:</h5>
                        <ul class="text-uppercase font-alt-1 list-unstyled">
                            <li>Mon-Fri: 8 AM - 5 PM</li>
                            <li>Saturday: 9 AM - 3 PM</li>
                            <li>Sunday: Closed</li>
                        </ul>',
     //History
     'title_History'=>'Historia',
     'content_History'=>'Debido al aroma y sabor únicos que tiene el tabaco, debido a su ubicación geográfica, el tabaco cubano es considerado el mejor del mundo.',
     'content_History2'=>"Los pueblos indígenas en América habían estado usando tabaco antes de la llegada del español. Actualmente,
                            la palabra cigarro proviene originalmente del sikar maya ('fumar hojas de tabaco enrolladas' -
                            de si'c, 'tabaco'). La palabra española, puro abarca la brecha entre el uso maya y el moderno.",
	'content_History3'=>"Debido al aroma y sabor únicos que tiene el tabaco, debido a su ubicación geográfica, el tabaco cubano es considerado el mejor del mundo. Sin embargo, otros países con gran consumo de tabaco son República Dominicana, Nicaragua y Honduras.",
	'images'=> array(
		[
			'title' =>'Banana Republik' ,
			'description' => 'design/illstration',
			'img' => array(
				'images/habano/cultivo.png',''
			), 
		],
		[
			'title' =>'The Adventure' ,
			'description' => 'identity/illustration',
			'img' => array(
				'images/habano/beneficio.png',''
			), 
		],
		[
			'title' =>'I Travel' ,
			'description' => 'iOS app',
			'img' => array(
				'images/habano/anejamineto.png',''
			), 
		],
		[
			'title' =>'Miller Jackson' ,
			'description' => 'identity',
			'img' => array(
				'images/habano/elaboracion.png',''
			), 
		],
		[
			'title' =>'Rockabilly' ,
			'description' => 'identity',
			'img' => array(
				'images/habano/terminado.png',''
			),  
		],
		[
			'title' =>'Weird I Am' ,
			'description' => 'identity',
			'img' => array(
				'images/habano/origen.png',''
			),  
		],
	),
	//Brands
	'title_Brands'=>'MARCAS',
	'content_Brands'=>'Siendo el único distribuidor autorizado de Habanos S.A, no solo tenemos las mejores marcas, sino que también tenemos TODAS las marcas de cigarros cubanos.
                             Entre las marcas que manejamos están Cohiba, Montecristo, Partagás, Romeo y Julieta, Hoyo de Monterrey,
                             H. Upmann y todos los demás. Para conocer las características de cada una de las marcas de puros cubanos, lea este artículo (enlace).
Todos nuestros cigarros son auténticos cigarros cubanos y tienen todos los elementos de seguridad de Habanos S.A. (enlace) para evitar la piratería.',
	//Experiences
	'title_Experiences'=>'Una nueva experiencia',
	'content_Experiences'=>"Manteniendo al hombre moderno guapo desde el '96. La única verdadera peluquería americana en la ciudad de Nueva York.",
	//Store
	'title_Store'=>'TIENDAS',
	'content_Store'=>'En nuestras tiendas, podrá disfrutar de su cigarro en un lugar cómodo que se asemejará a la sala de estar de un lujoso hotel de Nueva York. <br>
                             En todas nuestras ubicaciones, nuestro personal estará encantado de atenderlo de la manera más profesional y atenta. <br>
                             Visite nuestra página de ubicaciones (enlace a la página de locales) para conocer las características únicas de cada una de nuestras tiendas y sus ubicaciones, horas de servicio y números de teléfono.',
    'store'=> array(
		[
			'title' =>'COZUMEL' ,
			'description' => 'Benito Juárez No1 Centro Cozumel<br>
			Q. ROO C.P 77600
			Entre AVD Rafael E Melgar y calle  5TA
			Telefono: 987 8689-1696<br>
			<a href="#">Ver el mapa de Google</a>',
			'img' => array(
				'images/habano/cozumel.png',''
			), 
			'visit'=>'Visitanos',
			'link'=>'cozumel.php'
		],
		[
			'title' =>'CANCUN' ,
			'description' => 'BLVD Kukulkan No 3, 4 Y 5 Km12.7<br>
			Zona Hotelera Cancun Q.ROO C.P 77500<br>
			Teléfono: 998 8407000 y 998 8407001<br>
			<a href="#">Ver el mapa de Google</a>',
			'img' => array(
				'images/habano/cancun.png',''
			), 
			'visit'=>'Visitanos',
			'link'=>'cancun.php'
		],
		[
			'title' =>'LOS CABOS' ,
			'description' => 'BLVD Lázaro Cardena S/N LocalL L-41-A<br>
			El Medado Cabos San Lucas C.P 23410<br>
			Referencia: Plaza Comercial Puerto Paraiso<br>
			Teléfono: 624 143-7533<br>
			<a href="#">Ver el mapa de Google</a>',
			'img' => array(
				'images/habano/cabos.png',''
			), 
			'visit'=>'Visitanos',
			'link'=>'cabos.php'
		],
		[
			'title' =>'TIJUANA' ,
			'description' => ' Avenida Revolución No1115 INT 13 Zona Centro<br>
			Tjuana B.C C.P 22000<br>
			Telefono: 664 688-33-39 y 664 685-5248<br>
			<a href="">Ver el mapa de Google</a>',
			'img' => array(
				'images/habano/tijuana.png',''
			), 
			'visit'=>'Visitanos',
			'link'=>'tijuana.php'
		],
		
	),

);
$cozumel = array(
	'title'=> 'LA CASA DE LOS CIGARROS CUBANOS',
	'navlogo'=>'images/logo.png',
	'images'=> array( 'images/habano/slider.png',''),
	'logo' => array( 'images/logo.png',''),
	//About
	'title_About'=>'BIENVENIDO A NUESTRA TIENDA',
	'content_About'=>'<strong><span class="color-black">Esta sucursal de La Casa del Habano(LCH)</span></strong> , tiene un humidificador donde ofrecemos las 27 marcas comercializadas por Habanos SA.',
	'blockquote_About'=>"<p>Algunas de las marcas cubanas que encontrará en LCH Cancún son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.Su ambiente tranquilo y elegante decoración lo harán sentir como si en la recepción de un gran hotel en Nueva York.
En este lugar del Cigars House International Group, puede acompañar su cigarro cubano con la bebida que elija.
Si estás en Cancún, no te quedes con el deseo: te esperamos en La Casa del Habano.
		</p>",
	'banner_about'=>'<h2 class="text-white"><b>UNA NUEVA EXPERIENCIA</b></h2><h5 class="text-white">"Fumar es indispensable si uno no tiene nada para besarse."" 
	Sigmund Freud</h5>',
	//Experience
	'title_Exp'=>'UNA NUEVA EXPERIENCIA',
	'content_Exp'=>"“La única forma de romper un mal hábito era reemplazarlo con un hábito mejor.” (explicando por qué cambió de
cigarrillos a cigarros) – Jack Nicholson",
	'images_exp'=> array( 'images/habano/experiences.png',''),
	'images_exp2'=> array( 'images/habano/experiences2.png',''),
	'images_exp3'=> array( 'images/habano/experiences3.png',''),
	'images_exp4'=> array( 'images/habano/experiences4.png',''),
	//Location
	'title_Loc'=>"Además, después de la hora del comedor, La Casa del Habano Cozumel se convierte en el mejor club de Cozumel, se llena de locales que vienen a disfrutar de la música latina en vivo. En ese momento, encontrarás los mejores bailarines de la isla.",
	'address'=>'Benito Juárez No1 Centro Cozumel <br> Q. ROO C.P 77600 Entre AVD Rafael E Melgar y calle 5TA ',
	'phone'=>'Telefono: 987 8689-1696',
	'lat'=>20.5110385,
	'lng'=>-86.9517555,
	//Footer
	'titleFooter'=>'COZUMEL',
	'addressFooter'=>'Benito Juárez No1 Centro Cozumel',
	'linkFooter'=>'#',
	'store'=> array(
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
			'link' =>'#'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'#'
		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'#'
		],
	),
	'social'=> array(
		[
			'title' =>'icon-twitter-with-circle',
			'link' =>'#'

		],
		[
			'title' =>'icon-facebook-with-circle',
			'link' =>'#'
		],
		[
			'title' =>'icon-instagram-with-circle',
			'link' =>'#'
		],
	),


);
$cancun = array(
	'title'=> 'LA CASA DE LOS CIGARROS CUBANOS',
	'logo' => array( 'images/habano/logo_habana_cigars.png',''),
	'navlogo'=>'images/habano/logo-cancun.png',
	'images'=> array( 'images/habano/slidercancun.png',''),
	//About
	'title_About'=>'BIENVENIDO A NUESTRA TIENDA',
	'content_About'=>'<strong><span class="color-black">Esta sucursal de La Casa del Habano (LCH)</span></strong> , tiene un humidificador donde ofrecemos las 27 marcas comercializadas por Habanos SA.',
	'blockquote_About'=>"<p>Algunas de las marcas cubanas que encontrará en LCH Cancún son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.Su ambiente tranquilo y elegante decoración lo harán sentir como si en la recepción de un gran hotel en Nueva York.
En este lugar del Cigars House International Group, puede acompañar su cigarro cubano con la bebida que elija.
Si estás en Cancún, no te quedes con el deseo: te esperamos en La Casa del Habano.
		</p>",
	'banner_about'=>"<h2 class='text-white'><b>UNA NUEVA EXPERIENCIA</b></h2><h5 class='text-white'>Manteniendo al hombre moderno guapo desde el '96. los<br> única verdadera American Barber Shop en la ciudad de Nueva York.</h5>",
	//Experience
	'title_Exp'=>'UNA NUEVA EXPERIENCIA',
	'content_Exp'=>"Manteniendo al hombre moderno guapo desde el '96. La única verdadera Barber Shop estadounidense en la ciudad de Nueva York.",
	'images_exp'=> array( 'images/habano/experiences_cancun.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cancun2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cancun3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cancun4.png',''),
	//Location
	'title_Loc'=>"¿Tiene un proyecto que requiere renovación o rediseño? Estaremos encantados de echar un vistazo a su proyecto. Todas las estimaciones del proyecto son gratuitas.",
	'address'=>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 <br> Zona Hotelera Cancun Q.ROO C.P 77500',
	'phone'=>'Teléfono: 998 8407000 y 998 8407001',
	'lat'=>21.1022968,
	'lng'=>-86.7681192,
	//Footer
	'titleFooter'=>'CANCUN',
	'addressFooter'=>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
	'linkFooter'=>'#',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'#'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'#'
		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'#'
		],
	),
	'social'=> array(
		[
			'title' =>'icon-twitter-with-circle',
			'link' =>'#'

		],
		[
			'title' =>'icon-facebook-with-circle',
			'link' =>'#'
		],
		[
			'title' =>'icon-instagram-with-circle',
			'link' =>'#'
		],
	),
);
$cabos = array(
	'title'=> 'LA CASA DE LOS CIGARROS CUBANOS',
	'navlogo'=>'images/habano/logo_habana_cigars.png',
	'images'=> array( 'images/habano/slidercabos.png',''),
	//About
	'title_About'=>'BIENVENIDO A NUESTRA TIENDA',
	'content_About'=>'<strong><span class="color-black">Esta tienda La Casa del Habano</span></strong> , ofrece las 27 marcas comercializadas por Habanos SA, la distribuidora de cigarros de propiedad estatal cubana.',
	'blockquote_About'=>"<p>Algunas de las marcas que encontrarás en nuestra tienda de Tijuana son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.Su ambiente tranquilo y elegante decoración te harán sentir como si estuvieras sentado en la recepción de un gran hotel en Nueva York. También podrá acompañar su cigarro cubano con su café favorito y disfrutar de un juego de ajedrez mientras se relaja en nuestro salón. Si está en Tijuana, no lo piense dos veces. : visítanos en La Casa del Habano; estaremos ansiosos por conocerte.</p>",
	'banner_about'=>'<h2 class="text-white"><b>UNA NUEVA EXPERIENCIA</b></h2><h5 class="text-white">"Fumar es indispensable si uno no tiene nada para besarse." Sigmund Freud</h5>',
	//Experience
	'title_Exp'=>'Una nueva experiencia',
	'content_Exp'=>'"El día más inútil y desastroso parece estar bien gastado cuando se revisa a través del humo azul y fragante de un cigarro habanero." -Evelen Waugh',
	'images_exp'=> array( 'images/habano/experiences_cabos.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cabos2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cabos3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cabos4.png',''),
	//Location
	'title_Loc'=>"¿Tiene un proyecto que requiere renovación o rediseño? Estaremos encantados de echar un vistazo a su proyecto. Todas las estimaciones del proyecto son gratuitas.",
	'address'=>'BLVD Lázaro Cardena S/N LocalL L-41-A<br> El Medado Cabos San Lucas C.P 23410 <br> Referencia: Plaza Comercial Puerto Paraiso',
	'phone'=>'Teléfono: 624 143-7533',
	'lat'=>22.8830939,
	'lng'=>-109.9128076,
	//Footer
	'titleFooter'=>'LOS CABOS',
	'addressFooter'=>'BLVD Lázaro Cardena S/N LocalL L-41-A <br>El Medado Cabos San Lucas C.P 23410 <br>Referencia: Plaza Comercial Puerto Paraiso<br>Teléfono: 624 143-7533',
	'linkFooter'=>'#',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'#'

		],
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
			'link' =>'#'

		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'#'
		],
	),
	'social'=> array(
		[
			'title' =>'icon-twitter-with-circle',
			'link' =>'#'

		],
		[
			'title' =>'icon-facebook-with-circle',
			'link' =>'#'
		],
		[
			'title' =>'icon-instagram-with-circle',
			'link' =>'#'
		],
	),
);
$tijuana = array(
	'title'=> 'LA CASA DE LOS CIGARROS CUBANOS',
	'navlogo'=>'images/habano/logo-tijuana.png',
	'images'=> array( 'images/habano/slidertijuana.png',''),
	//About
	'title_About'=>'BIENVENIDO A NUESTRA TIENDA',
	'content_About'=>'<strong><span class="color-black">Esta sucursal de La Casa del Habano (LCH)</span></strong> ,tiene un humidificador donde ofrecemos las 27 marcas comercializadas por Habanos SA.',
	'blockquote_About'=>"<p>Algunas de las marcas que encontrarás en nuestra tienda de Tijuana son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.Su ambiente tranquilo y elegante decoración te harán sentir como si estuvieras sentado en la recepción de un gran hotel en Nueva York. También podrá acompañar su cigarro cubano con su café favorito y disfrutar de un juego de ajedrez mientras se relaja en nuestro salón. Si está en Tijuana, no lo piense dos veces. : visítanos en La Casa del Habano; estaremos ansiosos por conocerte.
		</p>",
	'banner_about'=>'<h2 class="text-white"><b>UNA NUEVA EXPERIENCIA</b></h2><h5 class="text-white">"Fumar cigarros activamente alentado." Registrarse en un restaurante de Londres</h5>',
	//Experience
	'title_Exp'=>'UNA NUEVA EXPERIENCIA',
	'content_Exp'=>"““Si no puede enviar dinero, envíe tabaco.” (al Congreso Continental, 1776 ) - George Washington",
	'images_exp'=> array( 'images/habano/experiences_tijuana.png',''),
	'images_exp2'=> array( 'images/habano/experiences_tijuana2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_tijuana3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_tijuana4.png',''),
	//Location
	'title_Loc'=>"¿Tiene un proyecto que requiere renovación o rediseño? Estaremos encantados de echar un vistazo a su proyecto. Todas las estimaciones del proyecto son gratuitas.",
	'address'=>'Avenida Revolución No1115 INT 13 Zona Centro <br>Tjuana B.C C.P 22000',
	'phone'=>'Telefono: 664 688-33-39 y 664 685-5248',
	'lat'=>32.5306176,
	'lng'=>-117.0386323,
	//Footer
	'titleFooter'=>'TIJUANA',
	'addressFooter'=>'Avenida Revolución No1115 INT 13 Zona Centro <br>Tjuana B.C C.P 22000 <br>Telefono: 664 688-33-39 y 664 685-5248 ',
	'linkFooter'=>'#',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'#'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'#'
		],
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 ',
			'link' =>'#'
		],
	),
	'social'=> array(
		[
			'title' =>'icon-twitter-with-circle',
			'link' =>'#'

		],
		[
			'title' =>'icon-facebook-with-circle',
			'link' =>'#'
		],
		[
			'title' =>'icon-instagram-with-circle',
			'link' =>'#'
		],
	),
);

?>