<?php 

$op = array(
	'lang'=>'en',
	'menuNav' => array(
            ['Home','#home'],
			['About Us','#about'],
			['History','#history'],
			['Brands','#brands'],
			['Experiences','#experiences'],
			['Store','#store']
		),
	'desNav' => array(
            ['Home','#home'],
			['About Us','#about'],
			['Experiences','#experiences'],
			['Location','#location'],
			// ['Ranked','#ranked']
		),

	);
$home = array(
	'title'=> 'Cigars Mexico',
	'sub_title'=> 'THE CIGAR EXPERTS OF MEXICO ',
	
	//About US Home
	'title_About'=> 'About Us',
	'content_About'=>
		'<p class="lead mb-30"><strong>La Casa del Habano is the official franchise of Habanos S.A.</strong>, the Cuban-State company that manufactures and exports the 27 brands of Cuban cigars.</p>
		<p class="mb-40">Through our brands,<strong> La Casa del Habano and Havana Cigar House</strong>, we have become the largest distributor of certified Cuban cigars in Mexico. For that reason<<strong>we are the cigar experts in Mexico.</strong></p>',
     
     //History Home
     'title_History'=>'Cigar\'s Story',
'content_History'=>'THE WORD CIGAR ORIGINALLY DERIVES FROM THE MAYAN SIKAR ("TO SMOKE ROLLED TOBACCO LEAVES" – FROM "SIC", "TOBACCO"). THE SPANISH WORD.',
     'content_History2'=>"Indigenous people in America had been using tobacco before the Spaniard’s arrival.  Because of the unique aroma and taste that tobacco gets because from its geographical location, Cuban tobacco is considered to be the best in the world. Nevertheless, other countries with great tobacco are Mexico, Dominican Republic, Nicaragua and Honduras. 'PURO' spans the gap between the mayan and modern use.",
	
	
	'images'=> array(
		[
			'title' =>'Culture' ,
			'description' => '',
			'img' => array(
				'https://master-rhino-205702.firebaseapp.com/images/habano/cultivo.png',''
			), 
		],
		[
			'title' =>'Benefit' ,
			'description' => '',
			'img' => array(
				'images/habano/beneficio.png',''
			), 
		],
		[
			'title' =>'Aging' ,
			'description' => '',
			'img' => array(
				'images/habano/anejamineto.png',''
			), 
		],
		[
			'title' =>'Elaboration' ,
			'description' => '',
			'img' => array(
				'images/habano/elaboracion.png',''
			), 
		],
		[
			'title' =>'Finished' ,
			'description' => '',
			'img' => array(
				'images/habano/terminado.png',''
			),  
		],
		[
			'title' =>'Origin' ,
			'description' => '',
			'img' => array(
				'images/habano/origen.png',''
			),  
		],
	),
				//Brands Home
			'title_Brands'=>'We Offer All of the Cuban Brands Cigars',
			'content_Brands'=>'Being the only authorized distributor of Habanos S.A, we not only have the best brands, but we have ALL brands of Cuban cigars. Among the brands that we handle are Cohiba, Montecristo, Partagas, Romeo and Julieta, Hoyo de Monterrey, H. Upmann and all the others.',
			'content_Brands2'=>'All our cigars are authentic Cuban cigars and have all the security elements of Habanos S.A. Do not get fooled by pirates: according to the Mexican Law, original Cuban cigars (those imported from the Cuban factories), will have 70% of the outside of the box covered with messages discouraging the act of smoking... <strong>However, we believe that an authentic Cuban cigar is a joy every cigar connoisseurs should enjoy every once in a while.</strong>',
			//... Nevertheless one should one of those every once in a while... Every once in a while. A true Cuban is a joy every human should enjoy every once in a while.
			//certified, authentic, real, true
			
			//Experiences Home
			'title_Experiences'=>'Come enjoy the best Cuban experience',
			'content_Experiences'=>"We are the biggest and most experienced cigar group in Mexico and we have cigar bars in Cozumel, Cancun, Puerto Vallarta, Tijuana, Isla Mujeres and Los Cabos. All of our locations are designed for you to enjoy your Cuban cigars. In all of our locations our personnel will be ready to serve you in the most professional and attentive way.",
			
			//Store Home
			'title_Store'=>'Our Cigar-Bars & Lounges',
			'content_Store'=>'At our locations, you will be able to enjoy from your cigar in a comfortable place that will resemble the lounge of a luxurious hotel of New York.<br>
		                  	Scroll down to get to know our locations and the unique features of each of our bars, their addresses, service hours and phone numbers.',
    'store'=> array(
		[
				'title' =>'La Casa del Habano Cozumel' ,
			'description' => '1 Andador Benito Juárez
			Downtown Cozumel
			Phone: +52 987 8689 1696<br>
			<a href="https://goo.gl/maps/XzBKdR9zaJ72" target="_blank">See it on the map!</a><br>
			<a href="https://www.facebook.com/TheCubanSpotInCozumel/">Visit us on Facebook</a>',
			'img' => array(
				'images/habano/cozumel.png',''
			), 
			'visit'=>'Visit La Casa del Habano Cozumel',
			'link'=>'cozumel-cuban-cigar-salsa-bar-havana-bobs-lcdh.php',
			'seelink'=>'See it on map'
		],
		[
				'title' =>'La Casa del Habano Cancun' ,
			'description' => '3,4 & 5 Kukulkan Blvd. Km 12.7<br>
			Hotel Zone, Cancun<br>
			(Right beside the OXXO)<br>
			Phone: +52 998 840 7000<br>
			<a href="https://goo.gl/maps/19biUGLbQp22">See it on the map!</a><br>',
			'img' => array(
				'images/habano/cancun.png',''
			), 
			'visit'=>'Visit La Casa del Habano Cancun',
			'link'=>'cancun-cuban-cigar-bar-restaurant-havana-humidor-lcdh.php',
			'seelink'=>'See it on map'
		],
		[
			'title' =>'Havana Cigar House & Mojito' ,
			'description' => 'Lazaro Cardenas Blvd.<br>
			Cabos San Lucas<br>
			(Puerto Paraiso Mall)<br>
			Phone: +52 624 143 7533<br>
			<a href="https://goo.gl/maps/pzVXxphcmum">See it on the map!</a>',
			'img' => array(
				'images/habano/cabos.png',''
			), 
			'visit'=>'Visit Havana Cigar House & Mojito',
			'link'=>'havana-cigar-house-cuban-bar-cabo-san-lucas-humidor.php',
			'seelink'=>'See it on map'

		],
		[
			'title' =>'La Casa del Habano Tijuana' ,
			'description' => ' 1115 Revolucion Av.<br>
			Downtown, Tijuana<br>
			Phone: +52 664 688-33-39<br>
			<a href="https://goo.gl/maps/FPAEbxsMYdQ2">See it on the map!</a>',
			'img' => array(
				'images/habano/tijuana.png',''
			), 
			'visit'=>'Visit La Casa del Habano Tijuana',
			'link'=>'tijuana-cuban-cigar-bar-humidor-lcdh-habana.php',
			'seelink'=>'See it on map'
		],
		
	),
	//Footer
	'title_Footer'=>'CASA DEL HABANO',
	'title_Footer2'=>'Our Other Stores ',
	'title_Footer3'=>'Useful Links',
	'addressFooter'=>'Benito Juárez No1 Centro Cozumel',
	'linkFooter'=>'https://maps.google.com/?cid=707275755286104100',
	'linkName'=>'See it on map',

);
$cozumel = array(
	'title'=> 'La Casa del Habano Cozumel',
	'sub_title'=> 'THE CIGAR EXPERTS OF MEXICO ',
	'navlogo'=>'images/logo.png',
	'images'=> array( 'images/habano/slider.png',''),
	'logo' => array( 'images/logo.png',''),

		//About Coz
	'title_About'=>'WELCOME TO OUR CIGAR BAR & TERRACE',
	'content_About'=>'<strong><span class="color-black">At La Casa del Habano Cozumel, our humidifier offers the 27 brands marketed by Habanos SA.</span></strong>',
	'blockquote_About'=>"<p><strong>Here you will find Cohiba, Montecristo, Romeo and Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad and Bolívar.</strong>
	<br>
	<br>
	<p>Its Cuban atmosphere will make you feel as if you were sitting at the reception of the Hotel Nacional in Havana. In our Cozumel bar, Frank, our famous bartender, will prepare you just the right drink for your taste to accompany your premium Cuban cigar.</p>.
	<br>
	<br>
	<p>In addition to the broadest repertoire of Cuban cigars and drinks in Cozumel, this cigar-bar & terrace also features a Cuban Chef who will prepare you the best dish to accompany the Cigar of your choice with your favorite drink.</p>
	<br>
	<br>
		</p>",
	'banner_about'=>'<h2 class="text-white"><b><i>"Smoking is indispensable if one has nothing to kiss."</b></i></h2>
	<h5 class="text-white"> -Sigmund Freud</h5>',
	
	//Experience Coz
	'title_Exp'=>"“The only way to break a bad habit was to replace it with a better habit.” (explaining why he switched from cigarettes to cigars)",
	'content_Exp'=> "– Jack Nicholson",

	'images_exp'=> array( 'images/habano/experiences.png',''),
	'images_exp2'=> array( 'images/habano/experiences2.png',''),
	'images_exp3'=> array( 'images/habano/experiences3.png',''),
	'images_exp4'=> array( 'images/habano/experiences4.png',''),
		
	//Location Coz
	'title_Loc'=>"Our air-conditioned cigar-bar is right across the ferris' dock and features a terrace from which you will be able to enjoy the best views of the beautiful Caribbean Sea and its spectacular sunsets.",
	'address'=>'This is simply the perfect spot to enjoy your Cuban cigar. The entrance is on the pedestrian-street.',
	'phone'=>'+52 987 8689-1696',
	'lat'=>20.5110504,
	'lng'=>-86.9496888,
	//Footer
	'titleFooter'=>'COZUMEL',
	'addressFooter'=>'Benito Juárez No1 Centro Cozumel',
	'linkFooter'=>'https://goo.gl/maps/8NA37acnH9M2',
	'linkName'=>'See it on map',
	'seelink'=>'See it on map',
	'store'=> array(
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2',
			'seelink'=>'See it on map'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'https://goo.gl/maps/pzVXxphcmum',
			'seelink'=>'See it on map'

		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2',
			'seelink'=>'See it on map'
		],
	),
	'social'=> array(
		// [
		// 	'title' =>'icon-twitter-with-circle',
		// 	'link' =>'#'

		// ],
		[
				'title' =>'icon-facebook-with-circle',
			'link' =>'https://www.facebook.com/CigarsCozumel/'
		],
		[
			'title' =>'icon-instagram-with-circle',
				'link' =>'https://www.instagram.com/casadelhabanocozumel/'
		],
	),
	'footerlogo'=>'images/habano/logo_habana_cigars.png',
	'title_Footer2'=>'Our Other Stores ',
	'title_Footer3'=>'Useful Links',
);
$cancun = array(
	'title'=> 'La Casa del Habano Cancún',
	'sub_title'=> 'THE CIGAR EXPERTS OF MEXICO ',
	'logo' => array( 'images/habano/logo_habana_cigars.png',''),
	'navlogo'=>'images/habano/logo-cancun.png',
	'images'=> array( 'images/habano/slidercancun.png',''),
		//About Can
	'title_About'=>'Welcome To Our Cigar Bar & Lounge',
	'content_About'=>'This is one of our biggest stores. At this location of La Casa del Habano (LCH). Here <strong><span class="color-black">our humidor features ALL of the 27 Cuban brands commercialized by Habanos S.A.',
	'blockquote_About'=>"<p>Some of the brands you will find at LCH Cancun are <strong><span>Cohiba, Montecristo, Romeo and Julieta, Partagas, Hoyo de Monterrey, H. Upmann, Punch, Trinidad and Bolívar.</span></strong><br>
	<br>
	At this location you will be able to choose if you want to smoke your cigar in our elegant room with air conditioning and leather sofas, in our bar or if you prefer to enjoy your cigar outdoors, in our terrace.<br>
	<br>At our bar, you will be able to <b>choose your favorite drink</b> to accompany your Cuban cigar. Do not hesitate to <b>ask for recommendations to our bartenders</b>, they are there to help you choose the right drink for you.</p>",
	'banner_about'=>"<h2 class='text-white'><b><i>“Smoking Cigars is like falling in love. First, you are attracted by its shape; you stay for its flavor, and you must always remember never, never to let the flame go out!”</i></b></h2><h5 class='text-white'>- Winston Churchill</h5>",
	
	//Experience Can
	'title_Exp'=>'"It has been my experience that folks who have no vices, have very few virtues."',
	'content_Exp'=>'- Abraham Lincoln',
	'images_exp'=> array( 'images/habano/experiences_cancun.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cancun2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cancun3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cancun4.png',''),
	
	//Location Can
	'title_Loc'=>"Our cigar bar & loung is strategically located in the middle of Cancun's hotel zone so it is closer to you disregarding the hotel you are staying in.",
	'address'=>'Km. 12.7 Kukulkan Blvd., Hotel Zone Cancun (in front of the police station near the Kukulcan Mall and right beside the OXXO).',
	'phone'=>'Phone: 998 8407000 y 998 8407001',
	'lat'=>21.1048887,
	'lng'=>-86.7648663,
		//Footer Cancún
	'titleFooter'=>'La Casa del Habano Cancun',
	'addressFooter'=>'Km. 12.7 Kukulkan Blvd., Hotel Zone Cancun',
	'linkFooter'=>'https://goo.gl/maps/YbCWVxUfttS2',
	'seelink'=>'See it on map',
	'store'=> array(
		[	
			'title' =>'La Casa del Habano Cozumel',
			'address' =>'1 Andador Benito Juárez, downtown Cozumel',
			'link' =>'https://goo.gl/maps/8NA37acnH9M2',
			'seelink'=>'See it on map'

		],
		[
				'title' =>'Havana Cigar House & Mojito',
			'address' =>'Puerto Paraiso Mall, Cabo San Lucas.',
			'link' =>'https://goo.gl/maps/pzVXxphcmum',
			'seelink'=>'See it on map'
		],
		[
			'title' =>'La Casa del Habano Tijuana',
			'address' =>'1115 Revolucion Av. Downtown, Tijuana',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2',
			'seelink'=>'See it on map'
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
	'title_Footer2'=>'Our Other Stores ',
	'title_Footer3'=>'Useful Links',
);
$cabos = array(
	'title'=> 'Havana CIgar House & Mojito Los Cabos ',
	'sub_title'=> 'THE CIGAR EXPERTS OF MEXICO ',
	'navlogo'=>'images/habano/logo_habana_cigars.png',
	'images'=> array( 'images/habano/slidercabos.png',''),
	//About Cabos
	'title_About'=>'Welcome to Havana Cigar House & Mojito Los Cabos',
	'content_About'=>'Havana Cigar House & Mojito is located in Cabo San Lucas, México. <strong><span class="color-black">In this lounge & terrace of the Cigars House International Group you will find a bar where you can order the drinks of your preference to accompany your cigar. You can enjoy your cigar in its elegant white room or in its terrace.</span></strong> ',
	'blockquote_About'=>"<p>In its humidor, you will find all the 27 Cuban brands marketed by Habanos SA, the Cuban state company that sells Cuban cigar brands. Some of the Cuban brands that you will find in this place are <b>Cohiba, Montecristo, Romeo and Julieta, Partagas, Hoyo de Monterrey, H. Upmann, Punch, Trinidad and Bolívar.</b></p>",
	'banner_about'=>'<h2 class="text-white"><b>"Women are jealous of cigars... they regard them as a strong rival."</b></h2><h5 class="text-white"> -William Makepeace Thackeray</h5>',
	
	//Experience Cabos
	'title_Exp'=>'"I smoke in moderation. Only one cigar at a time."',
	'content_Exp'=>'- Mark Twain',
	'images_exp'=> array( 'images/habano/experiences_cabos.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cabos2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cabos3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cabos4.png',''),
	//Location Cabos
	'title_Loc'=>"Our bar its located in the Puerto Paraíso mall and its terrace features an elegant view to Cabo San Lucas’ marina; a great place to enjoy from your cigar & favorite drink.",
	'address'=>'Lazaro Cardenas Blvs., Puerto Paraiso Mall',
	'phone'=>'Phone: 624 143-7533',
	'lat'=>22.8865677,
	'lng'=>-109.9096332,
	//Footer Cabos
	'titleFooter'=>'LOS CABOS',
	'addressFooter'=>'BLVD Lázaro Cardena S/N LocalL L-41-A <br>El Medado Cabos San Lucas C.P 23410 <br>Referencia: Plaza Comercial Puerto Paraiso<br>Teléfono: 624 143-7533',
	'linkFooter'=>'https://goo.gl/maps/pzVXxphcmum',
	'seelink'=>'See it on map',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'https://goo.gl/maps/8NA37acnH9M2',
			'seelink'=>'See it on map'

		],
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 Zona Hotelera Cancun ',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2',
			'seelink'=>'See it on map'

		],
		[
			'title' =>'TIJUANA',
			'address' =>'Avenida Revolución No1115 INT 13 Zona Centro ',
			'link' =>'https://goo.gl/maps/FPAEbxsMYdQ2',
			'seelink'=>'See it on map'
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
	'title_Footer2'=>'Our Other Stores ',
	'title_Footer3'=>'Useful Links',
);
$tijuana = array(
	'title'=> 'La Casa del Habano Tijuana',
	'sub_title'=> 'THE CIGAR EXPERTS OF MEXICO ',
	'navlogo'=>'images/habano/logo-tijuana.png',
	'images'=> array( 'images/habano/slidertijuana.png',''),
	//About Tijuana
	'title_About'=>'Welcome La Casa del Habano Tijuana',
	'content_About'=>'This La Casa del Habano store is located a few blocks away from the American-Mexican border, offers the 27 brands marketed by the Cuban State-owned cigar-distributor Habanos SA. At this store, you will be able to find <strong><span class="color-black"> Cohiba, Montecristo, Romeo y Julieta, Partagas, Hoyo de Monterrey, H. Upmann, Punch, Trinidad, Bolívar and ALL of the other Cuban brands of cigars.</span></strong>',
	'blockquote_About'=>"<p>Its quiet atmosphere and elegant decoration will make you feel like if you were sitting at the reception of a great hotel in New York. You will also be able to <b>accompany your Cuban cigar with your favorite coffee and enjoy from a game of chess while you relax in our lounge.</b></p>",
	'banner_about'=>'<h2 class="text-white"><b>“The only way to break a bad habit was to replace it with a better habit (when explaining why he switched from cigarettes to cigars)".</b></h2><h5 class="text-white"> – Jack Nicholson </h5>',
	
	//Experience Tijuana
	'title_Exp'=>'"Smoking is indispensable if one has nothing to kiss."',
	'content_Exp'=>' - Sigmund Freud',
	'images_exp'=> array( 'images/habano/experiences_tijuana.png',''),
	'images_exp2'=> array( 'images/habano/experiences_tijuana2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_tijuana3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_tijuana4.png',''),
		//Location Tijuana
	'title_Loc'=>"If you are in Tijuana, do not think it twice: visit us at La Casa del Habano; we will be looking forward to meet you.",
	'address'=>'1115 Revolucion AV.,<br>
	Downtown, Tijuana',
	'phone'=>'Phone: +52 664 688-33-39',
	'lat'=>32.5316172,
	'lng'=>-117.0371637,
	//Footer
	'titleFooter'=>'TIJUANA',
	'addressFooter'=>'Avenida Revolución No1115 INT 13 Zona Centro <br>Tjuana B.C C.P 22000 <br>Telefono: 664 688-33-39 y 664 685-5248 ',
	'linkFooter'=>'https://goo.gl/maps/FPAEbxsMYdQ2',
	'seelink'=>'See it on map',
	'store'=> array(
		[
			'title' =>'COZUMEL',
			'address' =>'Benito Juárez No1 Centro Cozumel',
			'link' =>'https://goo.gl/maps/8NA37acnH9M2',
			'seelink'=>'See it on map'

		],
		[
			'title' =>'LOS CABOS',
			'address' =>'BLVD Lázaro Cardena S/N LocalL L-41-A ',
			'link' =>'https://goo.gl/maps/pzVXxphcmum',
			'seelink'=>'See it on map'
		],
		[
			'title' =>'CANCUN',
			'address' =>'BLVD Kukulkan No 3, 4 Y 5 Km12.7 ',
			'link' =>'https://goo.gl/maps/YbCWVxUfttS2',
			'seelink'=>'See it on map'
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
	'title_Footer2'=>'Our Other Stores ',
	'title_Footer3'=>'Useful Links',
);
?>