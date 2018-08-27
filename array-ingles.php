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
			['Ranked','#ranked']
		),

	);
$home = array(
	'title'=> 'THE CUBAN SPOT IN MEXICO',
	'sub_title'=> 'THE CIGAR EXPERTS OF MEXICO ',
	//About
	'title_About'=> 'About Us',
	'content_About'=>'<p class="lead mb-30">A local barber shop that was created by two friends in 1996. Our motto: Keeping it oldschool and handsome.</p>
                        <p class="mb-40">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <h5 class="mb-10">Open Hours:</h5>
                        <ul class="text-uppercase font-alt-1 list-unstyled">
                            <li>Mon-Fri: 8 AM - 5 PM</li>
                            <li>Saturday: 9 AM - 3 PM</li>
                            <li>Sunday: Closed</li>
                        </ul>',
     //History
     'title_History'=>'History',
     'content_History'=>'Because of the unique aroma and taste that tobacco gets because from its geographical location, Cuban tobacco is considered to be the best in the world.',
     'content_History2'=>"Indigenous people in America had been using tobacco before the Spaniard’s arrival. Actually,
                           the word cigar originally derives from the Mayan sikar ('to smoke rolled tobacco leaves' –
                           from si'c, 'tobacco'). The Spanish word, 'puro' spans the gap between the Mayan and modern use.",
	'content_History3'=>"Because of the unique aroma and taste that tobacco gets because from its geographical location, Cuban tobacco is considered to be the best in the world. Nevertheless, other other countries with great tobacco are Dominican Republic, Nicaragua and Honduras.",
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
	'title_Brands'=>'BRANDS',
	'content_Brands'=>'Being the only authorized distributor of Habanos S.A, we not only have the best brands, but we have ALL  brands of Cuban cigars.
                            Among the brands that we handle are Cohiba, Montecristo, Partagás, Romeo and Julieta, Hoyo de Monterrey,
                            H. Upmann and all the others. To know the characteristics of each of the Cuban cigar brands, read this article (link).
All our cigars are authentic Cuban cigars and have all the security elements of Habanos S.A. (link) to avoid piracy.',
	//Experiences
	'title_Experiences'=>'A New Experience',
	'content_Experiences'=>"Keeping the modern man handsome since '96. The only true American Barber Shop in New York City.",
	//Store
	'title_Store'=>'STORE',
	'content_Store'=>'At our stores, you will be able to enjoy from your cigar in a comfortable place that will resemble the lounge of a luxurious hotel of New York.<br>
                            In all of our locations our personnel will be more than happy to serve you in the most professional and attentive way.<br>
                            Please visit our locations (link a la página de locales) page to get to know the unique features of each of our stores and their locations, service hours and phone numbers.',
    'store'=> array(
		[
			'title' =>'COZUMEL' ,
			'description' => 'Benito Juárez No1 Centro Cozumel<br>
			Q. ROO C.P 77600
			Entre AVD Rafael E Melgar y calle  5TA
			Telefono: 987 8689-1696<br>
			<a href="#">See the Google map</a>',
			'img' => array(
				'images/habano/cozumel.png',''
			), 
			'visit'=>'Visit Now',
			'link'=>'cozumel.php'
		],
		[
			'title' =>'CANCUN' ,
			'description' => 'BLVD Kukulkan No 3, 4 Y 5 Km12.7<br>
			Zona Hotelera Cancun Q.ROO C.P 77500<br>
			Teléfono: 998 8407000 y 998 8407001<br>
			<a href="#">See the Google map</a>',
			'img' => array(
				'images/habano/cancun.png',''
			), 
			'visit'=>'Visit Now',
			'link'=>'cancun.php'
		],
		[
			'title' =>'LOS CABOS' ,
			'description' => 'BLVD Lázaro Cardena S/N LocalL L-41-A<br>
			El Medado Cabos San Lucas C.P 23410<br>
			Referencia: Plaza Comercial Puerto Paraiso<br>
			Teléfono: 624 143-7533<br>
			<a href="#">See the Google map</a>',
			'img' => array(
				'images/habano/cabos.png',''
			), 
			'visit'=>'Visit Now',
			'link'=>'cabos.php'
		],
		[
			'title' =>'TIJUANA' ,
			'description' => ' Avenida Revolución No1115 INT 13 Zona Centro<br>
			Tjuana B.C C.P 22000<br>
			Telefono: 664 688-33-39 y 664 685-5248<br>
			<a href="">See the Google map</a>',
			'img' => array(
				'images/habano/tijuana.png',''
			), 
			'visit'=>'Visit Now',
			'link'=>'tijuana.php'
		],
		
	),

);
$cozumel = array(
	'title'=> 'THE HOUSE OF THE CUBAN CIGARS',
	'navlogo'=>'images/logo.png',
	'images'=> array( 'images/habano/slider.png',''),
	'logo' => array( 'images/logo.png',''),
	//About
	'title_About'=>'WELCOME TO OUR SHOP',
	'content_About'=>'<strong><span class="color-black">This branch of La Casa del Habano (LCH)</span></strong> , has a humidor where we offer the 27 brands marketed by Habanos SA.',
	'blockquote_About'=>"<p>Some of the Cuban brands you'll find at LCH Cancun are Cohiba, Montecristo, Romeo and Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad and Bolívar.Its quiet atmosphere and elegant decoration will make you feel like you are at the reception of a great hotel in New York.
		At this location of the Cigars House International Group, you can accompany your Cuban cigar with the drink of your choice.
		If you are in Cancun, do not stay with the desire: we wait for you in La Casa del Habano.
		</p>",
	'banner_about'=>'<h2 class="text-white"><b>A NEW EXPERIENCE</b></h2><h5 class="text-white">"Smoking is indispensable if one has nothing to kiss."" 
	Sigmund Freud</h5>',
	//Experience
	'title_Exp'=>'A New Experience',
	'content_Exp'=>"“The only way to break a bad habit was to replace it with a better habit.” (explaining why he switched from 
	cigarettes to cigars) – Jack Nicholson",
	'images_exp'=> array( 'images/habano/experiences.png',''),
	'images_exp2'=> array( 'images/habano/experiences2.png',''),
	'images_exp3'=> array( 'images/habano/experiences3.png',''),
	'images_exp4'=> array( 'images/habano/experiences4.png',''),
	//Location
	'title_Loc'=>"Furthermore, after dinning time, La Casa del Habano Cozumel becomes the best club in Cozumel, it gets filled by locals who come to enjoy from Latin music live. At that time, you will find the best dancers on the island.",
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
	'title'=> 'THE HOUSE OF THE CUBAN CIGARS',
	'logo' => array( 'images/habano/logo_habana_cigars.png',''),
	'navlogo'=>'images/habano/logo-cancun.png',
	'images'=> array( 'images/habano/slidercancun.png',''),
	//About
	'title_About'=>'Welcome To Our Shop',
	'content_About'=>'<strong><span class="color-black">This branch of La Casa del Habano (LCH)</span></strong> , has a humidor where we offer the 27 brands marketed by Habanos SA.',
	'blockquote_About'=>"<p>Some of the Cuban brands you'll find at LCH Cancun are Cohiba, Montecristo, Romeo and Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad and Bolívar.Its quiet atmosphere and elegant decoration will make you feel like you are at the reception of a great hotel in New York.
		At this location of the Cigars House International Group, you can accompany your Cuban cigar with the drink of your choice.
		If you are in Cancun, do not stay with the desire: we wait for you in La Casa del Habano.
		</p>",
	'banner_about'=>"<h2 class='text-white'><b>A NEW EXPERIENCE</b></h2><h5 class='text-white'>Keeping the modern man handsome since '96. The <br> only true American Barber Shop in New York City.</h5>",
	//Experience
	'title_Exp'=>'A New Experience',
	'content_Exp'=>"Keeping the modern man handsome since '96. The only true American Barber Shop in New York City.",
	'images_exp'=> array( 'images/habano/experiences_cancun.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cancun2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cancun3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cancun4.png',''),
	//Location
	'title_Loc'=>"Have a project that requires renovation or redesign? We'll be happy to take a look at your project. All project estimates are free.",
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
	'title'=> 'THE HOUSE OF THE CUBAN CIGARS',
	'navlogo'=>'images/habano/logo_habana_cigars.png',
	'images'=> array( 'images/habano/slidercabos.png',''),
	//About
	'title_About'=>'Welcome To Our Shop',
	'content_About'=>'<strong><span class="color-black">This La Casa del Habano store</span></strong> , offers the 27 brands marketed by the Cuban State-owned cigar-distributor Habanos SA.',
	'blockquote_About'=>"<p>Some of the brands you will find in our Tijuana store are Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad and Bolívar.Its quiet atmosphere and elegant decoration will make you feel like if you were sitting at the reception of a great hotel in New York.You will also be able to accompany your Cuban cigar with your favorite coffee and enjoy a game of chess while you relax in our lounge.If you are in Tijuana, do not think it twice: visit us at La Casa del Habano; we will be looking forward to meet you.</p>",
	'banner_about'=>'<h2 class="text-white"><b>A NEW EXPERIENCE</b></h2><h5 class="text-white">"Smoking is indispensable if one has nothing to kiss." Sigmund Freud</h5>',
	//Experience
	'title_Exp'=>'A New Experience',
	'content_Exp'=>'"The most futile and disastrous day seems well spent when it is reviewed through the blue, fragrant smoke of a Havana Cigar." -Evelen Waugh',
	'images_exp'=> array( 'images/habano/experiences_cabos.png',''),
	'images_exp2'=> array( 'images/habano/experiences_cabos2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_cabos3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_cabos4.png',''),
	//Location
	'title_Loc'=>"Have a project that requires renovation or redesign? We'll be happy to take a look at your project. All project estimates are free.",
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
	'title'=> 'THE HOUSE OF THE CUBAN CIGARS',
	'navlogo'=>'images/habano/logo-tijuana.png',
	'images'=> array( 'images/habano/slidertijuana.png',''),
	//About
	'title_About'=>'Welcome To Our Shop',
	'content_About'=>'<strong><span class="color-black">This branch of La Casa del Habano (LCH)</span></strong> , has a humidor where we offer the 27 brands marketed by Habanos SA.',
	'blockquote_About'=>"<p>Some of the brands you will find in our Tijuana store are Cohiba, Montecristo, Romeo y Julieta, Partagás, Hoyo de Monterrey, H. Upmann, Punch, Trinidad and Bolívar.Its quiet atmosphere and elegant decoration will make you feel like if you were sitting at the reception of a great hotel in New York.You will also be able to accompany your Cuban cigar with your favorite coffee and enjoy a game of chess while you relax in our lounge.If you are in Tijuana, do not think it twice: visit us at La Casa del Habano; we will be looking forward to meet you.
		</p>",
	'banner_about'=>'<h2 class="text-white"><b>A NEW EXPERIENCE</b></h2><h5 class="text-white">"Cigar smoking actively encouraged." Sign in a London restaurant</h5>',
	//Experience
	'title_Exp'=>'A New Experience',
	'content_Exp'=>"““If you can’t send money, send tobacco.” (to the Continental Congress, 1776 ) - George Washington",
	'images_exp'=> array( 'images/habano/experiences_tijuana.png',''),
	'images_exp2'=> array( 'images/habano/experiences_tijuana2.png',''),
	'images_exp3'=> array( 'images/habano/experiences_tijuana3.png',''),
	'images_exp4'=> array( 'images/habano/experiences_tijuana4.png',''),
	//Location
	'title_Loc'=>"Have a project that requires renovation or redesign? We'll be happy to take a look at your project. All project estimates are free.",
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