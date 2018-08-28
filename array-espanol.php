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
	'content_About'=>'<p class="lead mb-30">La Casa del Habano es la única franquicia del mundo autorizada para distribuir los puros de Habanos S.A., la única empresa del Estado Cubano que comercializa las marcas de puros cubanos en el mundo.</p>
                        <p class="mb-40">A través de nuestras marcas La Casa del Habano y Havana Cigar House, nos hemos convertido en el mayor distribuidor de puros cubanos en México.</p>',
     //History
     'title_History'=>'Historia',
     'content_History'=>'Los indígenas americanos fumaban tabaco antes de la llegada de los españoles. De hecho, la palabra “cigarro” proviene originalmente de la palabra maya “sikar” ("fumar hojas de tabaco enrolladas" - de si\'c, "tabaco").',
     'content_History2'=>"Debido al aroma y al sabor únicos que tiene el tabaco, el tabaco cubano es considerado el mejor del mundo. Sin embargo, otros países con gran calidad de tabaco son la República Dominicana, Nicaragua y Honduras.",
	'images'=> array(
		[
			'title' =>'Cultivo' ,
			'description' => '',
			'img' => array(
				'images/habano/cultivo.png',''
			), 
		],
		[
			'title' =>'Beneficio' ,
			'description' => '',
			'img' => array(
				'images/habano/beneficio.png',''
			), 
		],
		[
			'title' =>'Añejamiento' ,
			'description' => '',
			'img' => array(
				'images/habano/anejamineto.png',''
			), 
		],
		[
			'title' =>'Elaboracion' ,
			'description' => '',
			'img' => array(
				'images/habano/elaboracion.png',''
			), 
		],
		[
			'title' =>'Terminado' ,
			'description' => '',
			'img' => array(
				'images/habano/terminado.png',''
			),  
		],
		[
			'title' =>'Origen' ,
			'description' => '',
			'img' => array(
				'images/habano/origen.png',''
			),  
		],
	),
	//Brands
	'title_Brands'=>'MARCAS',
	'content_Brands'=>'Al ser el único distribuidor autorizado de Habanos S.A, no solo tenemos las mejores marcas, sino que tenemos TODAS las marcas de puros cubanos. Entre las marcas que manejamos están Cohiba, Montecristo, Partagás, Romeo y Julieta, Hoyo de Monterrey, H. Upmann y todas las demás. Para conocer las características de cada una de las marcas de puros cubanos, lee este artículo (link a nuestro blog).',
	'content_Brands2'=>'Todos nuestros puros son auténticos puros cubanos y cuentan con todos los elementos de seguridad de Habanos S.A. (link a nuestro blog). para evitar la piratería.',
	//Experiences
	'title_Experiences'=>'Una nueva experiencia',
	'content_Experiences'=>"En nuestras tiendas, podrás disfrutar de tu puro en un lugar cómodo que te hará sentir como en el lobby de un lujoso hotel de Nueva York. En todas nuestras ubicaciones, nuestro personal te atenderá de manera profesional y atenta.",
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
	'lat'=>21.2568147,
	'lng'=>-86.7492857,
	//Footer
	'titleFooter'=>'COZUMEL',
	'addressFooter'=>'Benito Juárez No1 Centro Cozumel',
	'linkFooter'=>'https://maps.google.com/?cid=707275755286104100',
	'store'=> array(
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'https://goo.gl/maps/pzVXxphcmum'
		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2'
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
	'title'=> 'La Casa del Habano Cancún',
	'logo' => array( 'images/habano/logo_habana_cigars.png',''),
	'navlogo'=>'images/habano/logo-cancun.png',
	'images'=> array( 'images/habano/slidercancun.png',''),
	//About
	'title_About'=>'Bienvenidos a nuestro local',
	'content_About'=>'<strong><span class="color-black">Esta sucursal de La Casa del Habano  </span></strong>es uno de nuestros locales más grandes.',
	'blockquote_About'=>"<p>En ella, encontrarás un humidificador donde ofrecemos las 27 marcas comercializadas por Habanos SA. Algunas de las marcas cubanas que encontrarás en LCH Cancún son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.
		También podrás escoger si quieres fumar tu puro en nuestra elegante sala con aire acondicionado y sillones de piel, en nuestra barra de bebidas o si prefieres disfrutar de él al aire libre en nuestra terraza. En esta sucursal del grupo Cigars House International, podrás acompañar tu puro cubano con su bebida favorita o con un buen café cubano.Si estás en Cancún, te esperamos en La Casa del Habano.</p>",
	'banner_about'=>"<h2 class='text-white'><b>UNA NUEVA EXPERIENCIA</b></h2><h5 class='text-white'>Manteniendo al hombre moderno guapo desde el '96. los<br> única verdadera American Barber Shop en la ciudad de Nueva York.</h5>",
	//Experience
	'title_Exp'=>'UNA NUEVA EXPERIENCIA',
	'content_Exp'=>'"En mi experiencia, las personas que no tienen vicios, tienen muy pocas virtudes". Abraham Lincoln',
	'images_exp'=> array( 'images/habano/experiences_cancun.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cancun2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cancun3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cancun4.png',''),
	//Location
	'title_Loc'=>"Nuestro bar está ubicado justo frente a la estación de policía, localizada cerca de la Plaza Kukulcan; estratégicamente en el centro de la zona hotelera, con la intención de estar más cerca de ti.",
	'address'=>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 <br> Zona Hotelera Cancun Q.ROO C.P 77500',
	'phone'=>'Teléfono: 998 8407000 y 998 8407001',
	'lat'=>21.1022968,
	'lng'=>-86.7681192,
	//Footer
	'titleFooter'=>'CANCUN',
	'addressFooter'=>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
	'linkFooter'=>'https://goo.gl/maps/YbCWVxUfttS2',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'https://maps.google.com/?cid=707275755286104100'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'https://goo.gl/maps/pzVXxphcmum'
		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2'
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
	'title'=> 'Havana Cigar House & Mojito',
	'navlogo'=>'images/habano/logo_habana_cigars.png',
	'images'=> array( 'images/habano/slidercabos.png',''),
	//About
	'title_About'=>'BIENVENIDO A NUESTRA TIENDA',
	'content_About'=>'<strong><span class="color-black">En este local de Cigars Mexico del Grupo Cigars House International </span></strong> encontrarás una barra en la que podrás ordenar las bebidas e tu preferencia para acompañar tu puro. También podrás disfrutar de su elegante sala color blanco y de su terraza, para disfrutar de tus puros al aire libre.',
	'blockquote_About'=>"<p>Havana CIgar House & Mojito Los Cabos ofrece las 27 marcas cubanas comercializadas por Habanos SA, la empresa del Estado cubano que comercializa las marcas de puros cubanos. Algunas de las marcas cubanas que encontrarás en este local son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.</p>",
	'banner_about'=>'<h2 class="text-white"><b>UNA NUEVA EXPERIENCIA</b></h2><h5 class="text-white"> "Fumo con moderación: solo un puro a la vez" - Mark Twain</h5>',
	//Experience
	'title_Exp'=>'Una nueva experiencia',
	'content_Exp'=>'"Las mujeres se ponen celosas de los puros... los consideran un fuerte competidor". William Makepeace Thackeray',
	'images_exp'=> array( 'images/habano/experiences_cabos.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cabos2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cabos3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cabos4.png',''),
	//Location
	'title_Loc'=>"Este local está localizado en el centro comercial Puerto Paraíso, cuenta con vista a la Marina de Cabo San Lucas y una terraza en la que podrás disfrutar de tu puro al aire libre.",
	'address'=>'BLVD Lázaro Cardena S/N LocalL L-41-A<br> El Medado Cabos San Lucas C.P 23410 <br> Referencia: Plaza Comercial Puerto Paraiso',
	'phone'=>'Teléfono: 624 143-7533',
	'lat'=>22.8866076,
	'lng'=>-109.9116737,
	//Footer
	'titleFooter'=>'LOS CABOS',
	'addressFooter'=>'BLVD Lázaro Cardena S/N LocalL L-41-A <br>El Medado Cabos San Lucas C.P 23410 <br>Referencia: Plaza Comercial Puerto Paraiso<br>Teléfono: 624 143-7533',
	'linkFooter'=>'https://goo.gl/maps/pzVXxphcmum',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'https://maps.google.com/?cid=707275755286104100'

		],
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2'

		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2'
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
	'title'=> ' La Casa del Habano',
	'navlogo'=>'images/habano/logo-tijuana.png',
	'images'=> array( 'images/habano/slidertijuana.png',''),
	//About
	'title_About'=>'BIENVENIDO A NUESTRA TIENDA',
	'content_About'=>'<strong><span class="color-black">Esta sucursal de La Casa del Habano </span></strong>  está ubicada a unas cuantas cuadras de la frontera con EUA, cuenta con un humidor en donde ofrecemos las 27 marcas comercializadas por Habanos SA.Algunas de las marcas cubanas que encontrarás en La Casa del Habano Tijuana son Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad y Bolívar.',
	'blockquote_About'=>"<p>Su ambiente tranquilo y su elegante decoración, te harán sentir como en la recepción de un gran hotel de Nueva York.Podrás acompañar tu puro Cubano con el café de tu preferencia y disfrutar de una partida de ajedrez mientras te relajas en nuestra sala.
		</p>",
	'banner_about'=>'<h2 class="text-white"><b>UNA NUEVA EXPERIENCIA</b></h2><h5 class="text-white">"La única forma de romper un mal hábito es reemplazarlo por uno peor". (Explicando por qué cambió de puros a puros) - Jack Nicholson</h5>',
	//Experience
	'title_Exp'=>'UNA NUEVA EXPERIENCIA',
	'content_Exp'=>"“Fumar es indispensable si uno no tiene nada qué besar” Sigmund Freud",
	'images_exp'=> array( 'images/habano/experiences_tijuana.png',''),
	'images_exp2'=> array( 'images/habano/experiences_tijuana2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_tijuana3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_tijuana4.png',''),
	//Location
	'title_Loc'=>"Esta sucursal está estratégicamente localizada en la zona comercial de Tijuana, cerca de bares, restaurantes y bancos, a unas cuadras de la frontera con Estados Unidos.",
	'address'=>'Avenida Revolución No1115 INT 13 Zona Centro <br>Tjuana B.C C.P 22000',
	'phone'=>'Telefono: 664 688-33-39 y 664 685-5248',
	'lat'=>32.5316376,
	'lng'=>-117.0389608,
	//Footer
	'titleFooter'=>'TIJUANA',
	'addressFooter'=>'Avenida Revolución No1115 INT 13 Zona Centro <br>Tjuana B.C C.P 22000 <br>Telefono: 664 688-33-39 y 664 685-5248 ',
	'linkFooter'=>'https://goo.gl/maps/FPAEbxsMYdQ2',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'https://maps.google.com/?cid=707275755286104100'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'https://goo.gl/maps/pzVXxphcmum'
		],
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 ',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2'
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