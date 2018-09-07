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
		'title'=> 'Los expertos en puros en México',
	'sub_title'=> 'Grupo Cigar House International',

	//About Home
	'title_About'=> 'Nosotros',
	'content_About'=>'<p class="lead mb-30"><strong>La Casa del Habano es la franquicia oficial de Habanos S.A.</strong>, la empresa del Gobierno Cubano que produce y exporta las 27 marcas de puros cubanos.</p>
                      <p class="mb-40">A través de nuestras marcas, <strong>La Casa del Habano y Havana Cigar House,</strong> nos hemos convertido en el mayor distribuidor de puros cubanos certificados en México. Por eso, <strong>somos los expertos en puros de México.</strong></p>',
     //History Home
     'title_History'=>'La historia de los puros',
     //	'content_History'=>'Los pueblos indígenas de América fumaban tabaco antes de la llegada de los españoles. De hecho, <br>',
     'content_History'=>'la palabra “cigarro” proviene originalmente de la palabra maya “sik\'ar”, que significa "fumar hojas de tabaco enrolladas".',
     'content_History2'=>"Los pueblos indígenas de América ya acosrumbraban a fumar tabaco antes de la llegada de los españoles. Fueron los españoles quienes introdujeron la planta del tabaco al viejo continente y ahí comenzó su expansión internacional.Actualmente, debido a sus aromas y sabores únicos, el tabaco cubano es considerado el mejor del mundo. Sin embargo, otros países con gran calidad de tabaco son México, la República Dominicana, Nicaragua y Honduras.",
	'images'=> array(
		[
			'title' =>'Primero, las plantas de tabaco son cultivadas para después podar sus hojas.' ,
			'description' => '',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/cultivo.png',''
			), 
		],
		[
			'title' =>'Después de recolectadas, las hojas son ensartadas en franjas de maderas finas, las cuáles se colocan en el techo del granero de curación para que tengan buena ventilación.' ,
			'description' => '',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/beneficio.png',''
			), 
		],
		[
			'title' =>'Después, las hojas se clasifican de acuerdo a su color y tamaño, se amarran en ramos y se almacenan en cajas de madera, por un período que puede variar de los 6 meses a 5 años. En este tiempo las plantas se fermentan y desarrollan su aroma y sabor.' ,
			'description' => '',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/anejamineto.png',''
			), 
		],
		[
			'title' =>'Los puros de mayor calidad son los hechos a mano. Las hojas de tabaco se compactan y se colocan sobre otra hoja de tabaco para envolverlo. La envoltura es aplicada en forma de espiral alrededor del puro y al final lo pega con pasta vegetal.' ,
			'description' => '',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/elaboracion.png',''
			), 
		],
		[
			'title' =>'Una vez se termina de hacer el puro se inspecciona, se le coloca la etiqueta y se almacena en cajas de cedro, material ideal para mantener las propiedades del puro por años.' ,
			'description' => '',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/terminado.png',''
			),  
		],
		[
			'title' =>'A partir de la victoria de la Revolución Cubana, el Estado Cubano, a través de su empresa Habanos S.A., es el único autorizado para producir, comercializar y exportar las 27 marcas de puros cubanos. La Casa del Habano es el nombre de las franquicia internacional de Habanos S.A.' ,
			'description' => '',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/origen.png',''
			),  
		],
	),
	
//Brands Home
	'title_Brands'=>'Nuestras marcas',
	'content_Brands'=>'Al ser el único distribuidor autorizado de Habanos S.A, no solo tenemos las mejores marcas, sino que ofrecemos TODAS las marcas de puros cubanos. Entre las marcas que manejamos están Cohiba, Montecristo, Partagás, Romeo y Julieta, Hoyo de Monterrey, H. Upmann y todas las demás.',
	'content_Brands2'=>'Todos nuestros puros son auténticos puros cubanos y cuentan con todos los elementos de seguridad de Habanos S.A. No te dejes engañar por las personas que ofrecen puros pirata a precios de puros cubanos auténticos: una caja de puros puros originales en México, por Ley, debe tener mínimo el 70% de la caja cubierta con calcomanías que desalientan el fumar.',
	
	//Experiences Home
	'title_Experiences'=>'Diseñamos la mejor experiencia para ti',
	'content_Experiences'=>"Todos nuestros bares están especialmente diseñados para ofrecerte la mejor experiencia para disfrutar de tu puro cubano. En todos nuestros locales, además de todas las marcas de puros cubanos, encontrarás un cómodo lugar en donde sentarte para disfrutar de tu puro, de un buen café cubano, un mojito o la bebida de tu preferencia. En todas nuestras sucursales, nuestro personal estará listo para atenderte de la manera mejor manera posible.",

	//podrás disfrutar de tu puro en un lugar cómodo que te hará sentir como en el lobby de un lujoso hotel de Nueva York. En todas nuestras ubicaciones, nuestro personal te atenderá de manera profesional y atenta. En muchas de nuestras sucursales también encontrarás una barrar en la que  
	
	//Store Home
	'title_Store'=>'Nuestros bares',
	'content_Store'=>'En todos nuestrós bares, podrás disfrutar de tu puro en un lugar cómodo que se asemejará a la sala de estar de un lujoso hotel de Nueva York. Nuestro personal estará encantado de atenderte de la manera más profesional y atenta.<br>
		<br>
	    Más abajo podrás conocer las características únicas de cada uno de nuestros locales, horas de servicio y números de teléfono.<br>',
    
    'store'=> array(
		[
			'title' =>'La Casa del Habano Cozumel' ,
			'description' => 'Andador Benito Juárez 1 esq. malecón (frente al muelle de los ferris), Centro, Cozumel<br>
			Teléfono: 987 8689-1696<br>
			<a href="https://goo.gl/maps/XzBKdR9zaJ72" target="_blank">Ver en Google Maps</a><br>
			<a href="https://www.facebook.com/TheCubanSpotInCozumel/">Visita nuestro Facebook</a>',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/cozumel.png',''
			), 
			'visit'=>'La Casa del Habano Cozumel',
			'link'=>'cozumel.php',
			'seelink'=>'ver en el mapa'
		],
		[
				'title' =>'La Casa del Habano Cancún' ,
			'description' => 'Blvd. Kukulkan km. 12.7<br>
			Zona Hotelera de Cancún<br>
			(justo al lado del OXXO, frente a la estación de policía)<br>
			Teléfono: +52 998 840 7000<br>
			<a href="https://goo.gl/maps/19biUGLbQp22" target="_blank">Ver en Google Maps</a><br>',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/cancun.png',''
			), 
			'visit'=>'La Casa del Habano Cancún',
			'link'=>'cancun.php',
			'seelink'=>'ver en el mapa'
		],
		[
				'title' =>'Havana Cigar House & Mojito' ,
			'description' => 'Plaza Puerto Paraíso, Lazaro Cardenas,
			Cabos San Lucas<br>
			Teléfono: +52 624 143 7533<br>
			<a href="https://goo.gl/maps/pzVXxphcmum" target="_blank">Ver en Google Maps</a>',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/cabos.png',''
			), 
			'visit'=>'Havana Cigar House & Mojito, Los Cabos',
			'link'=>'cabos.php',
			'seelink'=>'ver en el mapa'
		],
		[
			'title' =>'La Casa del Habano Tijuana' ,
			'description' => 'Av. Revolución 1115,<br>
			Centro, Tijuana<br>
			Teléfono: +52 664 688-33-39<br>
			<a href="https://goo.gl/maps/FPAEbxsMYdQ2" target="_blank">Ver en Google Maps</a>',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/tijuana.png',''
			), 
			'visit'=>'La Casa del Habano Tijuana',
			'link'=>'tijuana.php',
			'seelink'=>'ver en el mapa'
		],
		
	),

);
$cozumel = array(
	'title'=> 'La Casa del Habano Cozumel',
	'sub_title'=> 'Los expertos en puros en México',
	'navlogo'=>'images/logo.png',
	'images'=> array( 'https://master-rhino-205702.firebaseapp.com/images/habano/slider.png',''),
	'logo' => array( 'images/logo.png',''),
//About Cozumel
	'title_About'=>'Bienvenidos a la mejor terraza de Cozumel',
	'content_About'=>'<strong><span class="color-black">En La Casa del Habano, nuestro humidificador ofrece las 27 marcas comercializadas por Habanos SA.</span></strong>',
	'blockquote_About'=>"<p><strong>Aquí encontrarás Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.</strong>
	<br>
	<br>
	<p>Su ambiente cubano te hará sentir como si estuvieras sentado en la recepción del Hotel Nacional en La Habana. En nuestro bar Cozumel, Frank, nuestro famoso <em>bartender</em>, te preparará la bebida adecuada a tu gusto para acompañar tu puro cubano</p>.
	<br>
	<br>
	<p>Además del repertorio más amplio de puros y bebidas cubanas, nuestra sucursal también cuenta con un chef cubano que te preparará el mejor plato para acompañar tu puro favorito con la bebida de tu preferencia.</p>
	<br>
	<br>
		</p>",
	'banner_about'=>'<h2 class="text-white"><strong><em>“La única forma de romper un mal hábito era reemplazarlo con un hábito mejor (explicando por qué cambió de cigarros a puros)."</strong></em></h2><h5 class="text-white">– Jack Nicholson</h5>',
	
	//Experience Cozumel
	'title_Exp'=>'"Fumar es indispensable cuando no se tiene nada qué besar"',
	'content_Exp'=>" - Sigmund Freud",
	'images_exp'=> array( 'images/habano/experiences.png',''),
	'images_exp2'=> array( 'images/habano/experiences2.png',''),
	'images_exp3'=> array( 'images/habano/experiences3.png',''),
	'images_exp4'=> array( 'images/habano/experiences4.png',''),
		
	//Location Cozumel
	'title_Loc'=>"Nuestro está climatizado y cuenta con ventanales y una terraza que te permitirán disfrutar de las mejores vistas al mar Caribe y unos atardeceres espectaculares. La combinación entre bebida, comida y música cubana sin duda representan el mejor ambiente para disfrutar de un auténtico puro cubano.",
	'address'=>'Andador Benito Juárez esq. Malecón, Centro, Cozumel',
	'phone'=>'Teléfono: 987 8689-1696',
	'lat'=>21.2568147,
	'lng'=>-86.7492857,
		//Footer Cozumel
	'titleFooter'=>'La Casa del Habano Cozumel',
	'addressFooter'=>'Andador Benito Juarez esq. Malecón, Centro Cozumel',
	'linkFooter'=>'https://goo.gl/maps/9zd5P9jSxvL2',
	'seelink'=>'ver en el mapa',
	'store'=> array(
		[
			'title' =>'La Casa del Habano Cancun',
			'address' =>'Av. Kukulkan km. 12.7',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2',
			'seelink'=>'ver en el mapa'

		],
		[
			'title' =>'Havana Cigar House & Mojito',
			'address' =>'Plaza Puerto Paraiso, Av. Lázaro Cárdenas
			Cabos San Lucas',
			'link' =>'https://goo.gl/maps/pzVXxphcmum',
			'seelink'=>'ver en el mapa'
		],
		[
			'title' =>'La Casa del Habano Tijuana',
			'address' =>'1115 Revolucion Av.
			Downtown, Tijuana',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2',
			'seelink'=>'ver en el mapa'
		],
	),
	'social'=> array(
		// [
		// 	'title' =>'icon-twitter-with-circle',
		// 	'link' =>'#'

		// ],
		[
			'title' =>'icon-facebook-with-circle',
			'link' =>'https://www.facebook.com/TheCubanSpotInCozumel/">Visit us on Facebook'
		],
		[
			'title' =>'icon-instagram-with-circle',
			'link' =>'https://www.instagram.com/explore/locations/922710764/la-casa-del-habano-cozumel/'
		],
	),


);
$cancun = array(
	'title'=> 'La Casa del Habano Cancún',
	'sub_title'=> 'Los expertos en puros en México ',
	'logo' => array( 'images/habano/logo_habana_cigars.png',''),
	'navlogo'=>'images/habano/logo-cancun.png',
	'images'=> array( 'images/habano/slidercancun.png',''),
	//About
	'title_About'=>'Bienvenidos a nuestro local',
	'content_About'=>' Esta sucursal está ubicada en el centro de la Zona Hotelera de Cancún y ofrece las 27 marcas de puros cubanos.',
	'content_About'=>'<strong><span class="color-black"></span></strong> Esta sucursal está ubicada en el centro de la Zona Hotelera de Cancún y ofrece las 27 marcas de puros cubanos.',
	'blockquote_About'=>"<p><strong>Algunas de las marcas cubanas que encontrarás en LCH Cancún son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.</strong></p>
	<br>
	<br>
		<p><strong>También podrás escoger si quieres fumar tu puro en nuestra elegante sala con aire acondicionado y sillones de piel, en nuestra barra de bebidas o si prefieres disfrutar de él al aire libre en nuestra terraza.</strong> En esta sucursal del grupo Cigars House International, podrás acompañar tu puro cubano con tu bebida favorita o con un buen café cubano.",
	'banner_about'=>"<h2 class='text-white'><em>Fumar puros es como enamorarse. Primero, te atrae su forma; después te atrapa su sabor, y nunca olvides evitar que la llama se apague.En mi experiencia, las personas que no tienen vicios, tienen muy pocas virtudes</em></h2><h5 class='text-white'>- <strong>Winstron Churchill</strong></h5>",
	
	//Experience Cancún
	'title_Exp'=>'"En mi experiencia, las personas que no tienen vicios, tienen muy pocas virtudes"',
	'content_Exp'=>'- Abraham Lincoln',
	'images_exp'=> array( 'images/habano/experiences_cancun.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cancun2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cancun3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cancun4.png',''),
	//Location
	'title_Loc'=>"Nuestro bar está ubicado justo frente a la estación de policía, localizada cerca de la Plaza Kukulcan; estratégicamente en el centro de la zona hotelera, con la intención de estar más cerca de ti.",
	'address'=>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 <br> Zona Hotelera Cancun Q.ROO C.P 77500',
	'phone'=>'Teléfono: 998 8407000 y 998 8407001',
	'lat'=>21.1022968,
	'lng'=>-86.7659305,
	//Footer
	'titleFooter'=>'CANCUN',
	'addressFooter'=>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
	'linkFooter'=>'https://goo.gl/maps/YbCWVxUfttS2',
	'seelink'=>'ver en el mapa',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'https://maps.google.com/?cid=707275755286104100',
			'seelink'=>'ver en el mapa'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'https://goo.gl/maps/pzVXxphcmum',
			'seelink'=>'ver en el mapa'
		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2',
			'seelink'=>'ver en el mapa'
		],
	),
	// 'social'=> array(
	// 	[
	// 		'title' =>'icon-twitter-with-circle',
	// 		'link' =>'#'

	// 	],
	// 	[
	// 		'title' =>'icon-facebook-with-circle',
	// 		'link' =>'#'
	// 	],
	// 	[
	// 		'title' =>'icon-instagram-with-circle',
	// 		'link' =>'#'
	// 	],
	// ),
);
$cabos = array(
	'title'=> 'Havana Cigar House & Mojito',
	'sub_title'=> 'Los expertos en puros en México ',
	'navlogo'=>'images/habano/logo_habana_cigars.png',
	'images'=> array( 'images/habano/slidercabos.png',''),
	
	//About Cabos
	'title_About'=>'Bienvenido a Havana Cigar House & Mojito',
	'content_About'=>'<strong><span class="color-black">Havana Cigar House & Mojito se encuentra en Cabo San Lucas.</span></strong> En este local de Cigars Mexico del Grupo Cigars House International, encontrarás una barra en la que podrás ordenar las bebidas de tu preferencia para acompañar tu puro. También <strong>tendrás la opción de disfrutar de tu puro en su elegante sala climatizada o en su terraza, para disfrutar de tus puros al aire libre.</strong>',
	'blockquote_About'=>"<p>Havana Cigar House & Mojito Los Cabos ofrece las 27 marcas cubanas comercializadas por Habanos SA, la empresa del Estado Cubano que comercializa las marcas de puros cubanos. Algunas de las marcas cubanas que encontrarás en este local son <strong>Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.</strong></p>",
	'banner_about'=>'<h2 class="text-white"><em><b>"Las mujeres se ponen celosas de los puros... los consideran un fuerte competidor"</em></b></h2><h5 class="text-white"> - William Makepeace Thackeray</h5>',
	//Experience Cabos
	'title_Exp'=>'"Fumo con moderación: solo un puro a la vez."',
	'content_Exp'=>'- Mark Twain',
	'images_exp'=> array( 'images/habano/experiences_cabos.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cabos2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cabos3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cabos4.png',''),
	//Location Cabos
	'title_Loc'=>"Nuestro local está dentro de la plaza Puerto Paraíso y cuenta con una terraza con agradable con vista a la Marina de Cabo San Lucas, desde la que podrás disfrutar de tu puro al aire libre.",
	'address'=>'Av. Lázaro Cardenas, Plaza Comercial Puerto Paraíso<br> El Medado, Cabo San Lucas.',
	'phone'=>'Teléfono: 624 143-7533',
	'lat'=>22.8866076,
	'lng'=>-109.9116737,

	//Footer
	'titleFooter'=>'LOS CABOS',
	'addressFooter'=>'BLVD Lázaro Cardena S/N LocalL L-41-A <br>El Medado Cabos San Lucas C.P 23410 <br>Referencia: Plaza Comercial Puerto Paraiso<br>Teléfono: 624 143-7533',
	'linkFooter'=>'https://goo.gl/maps/pzVXxphcmum',
	'seelink'=>'ver en el mapa',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'https://maps.google.com/?cid=707275755286104100',
			'seelink'=>'ver en el mapa'

		],
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2',
			'seelink'=>'ver en el mapa'

		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2',
			'seelink'=>'ver en el mapa'
		],
	),
	// 'social'=> array(
	// 	[
	// 		'title' =>'icon-twitter-with-circle',
	// 		'link' =>'#'

	// 	],
	// 	[
	// 		'title' =>'icon-facebook-with-circle',
	// 		'link' =>'#'
	// 	],
	// 	[
	// 		'title' =>'icon-instagram-with-circle',
	// 		'link' =>'#'
	// 	],
	// ),
);
$tijuana = array(
	'title'=> ' La Casa del Habano Tijuana',
	'sub_title'=> 'Los expertos en puros en México ',
	'navlogo'=>'images/habano/logo-tijuana.png',
	'images'=> array( 'images/habano/slidertijuana.png',''),
		
	//About Tijuana
	'title_About'=>'Bienvenidos a La Casa del Habano Tijuana',
	'content_About'=>'<span class="color-black">Esta sucursal de La Casa del Habano está estratégicamente ubicada a unas cuantas cuadras de la frontera con EUA. En ella, encontrarás las 27 marcas comercializadas por Habanos SA. Algunas de las marcas ed puros que encontrarás en La Casa del Habano <strong>Tijuana son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.</span></strong>',
	'blockquote_About'=>"<p>Su ambiente tranquilo y su elegante decoración, te harán sentir como en la recepción de un gran hotel de Nueva York.
	<br>
	<br>
	Podrás acompañar tu puro Cubano con el café de tu preferencia y disfrutar de una partida de ajedrez mientras te relajas en nuestra cómoda sala.</p>",
	'banner_about'=>'<h2 class="text-white"><b><em>"La única forma de romper un mal hábito es reemplazarlo por uno peor (al explicar por qué cambió los cigarros por los puros)."</em></b></h2><h5 class="text-white"> - Jack Nicholson</h5>',
	
	//Experience Tijuana
	'title_Exp'=>'“Fumar es indispensable si uno no tiene nada qué besar”',
	'content_Exp'=>" - Sigmund Freud",
	'images_exp'=> array( 'images/habano/experiences_tijuana.png',''),
	'images_exp2'=> array( 'images/habano/experiences_tijuana2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_tijuana3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_tijuana4.png',''),
	//Location Tijuana
	'title_Loc'=>"Esta sucursal está estratégicamente localizada en la zona comercial de Tijuana, cerca de bares, restaurantes y bancos, y a unas pocas cuadras de la frontera con Estados Unidos.",
	'address'=>'Avenida Revolución 1115 int. 13<br>Centro, Tijuana',
	'phone'=>'Teléfono: 664 688-33-39 y 664 685-5248',
	'lat'=>32.5316376,
	'lng'=>-117.0389608,
	//Footer
	'titleFooter'=>'TIJUANA',
	'addressFooter'=>'Avenida Revolución No1115 INT 13 Zona Centro <br>Tjuana B.C C.P 22000 <br>Telefono: 664 688-33-39 y 664 685-5248 ',
	'linkFooter'=>'https://goo.gl/maps/FPAEbxsMYdQ2',
	'seelink'=>'ver en el mapa',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'https://maps.google.com/?cid=707275755286104100',
			'seelink'=>'ver en el mapa'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'https://goo.gl/maps/pzVXxphcmum',
			'seelink'=>'ver en el mapa'
		],
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 ',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2',
			'seelink'=>'ver en el mapa'
		],
	),
	// 'social'=> array(
	// 	[
	// 		'title' =>'icon-twitter-with-circle',
	// 		'link' =>'#'

	// 	],
	// 	[
	// 		'title' =>'icon-facebook-with-circle',
	// 		'link' =>'#'
	// 	],
	// 	[
	// 		'title' =>'icon-instagram-with-circle',
	// 		'link' =>'#'
	// 	],
	// ),
);

?>