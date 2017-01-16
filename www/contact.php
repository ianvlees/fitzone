<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact form - Website www.fit-zone.be'; 
		$to = 'ianvleeshouwers@hotmail.com'; 
		$subject = 'Bericht van Contact form www.fit-zone.be';
		
		$body ="Van: $name\n E-Mail: $email\n Bericht:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Noteer hier je naam';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Noteer hier een geldig e mailadres';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Noteer hier je bericht';
		}
		

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert-true">Bedankt voor de mail, wij proberen u zo snel mogelijk te helpen. </div>';
	} else {
		$result='<div class="alert-false">Sorry er is fout opgetreden. Probeer het opnieuw.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie7" lang="nl" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie8" lang="nl" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="nl" dir="ltr" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10" lang="nl" dir="ltr" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" lang="nl" dir="ltr" prefix="og: http://ogp.me/ns#"><!--
<![endif]-->
<head>  
    <!-- Character Encoding -->
    <meta charset="utf-8"> 
    <!-- Latest version of certain rendering browser engines -->
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
    <!-- Title -->
    <title>Contact - www.fit-zone.be</title>
    <!-- Other SEO Tags -->
    <meta name="description" content="Fit-zone Assenede & Ertvelde">
    <meta name="keywords" content="Fitness HTML5 Assenede Ertvelde">
    <meta name="author" content="Ian Vleeshouwers">
    <meta name="copyright" content="Copyright 2016 Ian Vleeshouwers.">
    <!-- Sitemap.xml -->
    <link rel="sitemap" type="application/xml" title="Sitemap" href="./sitemap.xml">
    <!-- Humans.txt -->
    <link rel="author" type="text/plain" href="./humans.txt">
    <!-- Mobile Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="./css/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./css/images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./css/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./css/images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./css/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./css/images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./css/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./css/images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./css/images/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./css/images/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./css/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./css/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./css/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="194x194" href="./css/images/favicons/favicon-194x194.png">
    <link rel="mask-icon" href="./css/images/favicons/safari-pinned-tab.svg" color="#6fc349">
    <link rel="shortcut icon" href="./css/images/favicons/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#6fc349">   
    <meta name="apple-mobile-web-app-title" content="fit-zone">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="fit-zone">
    <meta name="msapplication-TileColor" content="#6fc349">
    <meta name="msapplication-TileImage" content="./css/images/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="./css/images/favicons/browserconfig.xml">
    <meta name="msapplication-tooltip" content="Sporten doe je het beste bij fit-zone de beste apparaten,
professionele begeleiding en verschillende gratis faciliteiten die je nergens anders vindt.">
    <meta name="msapplication-navbutton-color" content="#6fc349">
    <meta name="theme-color" content="#f6f6f6">
    <!-- Social Media -->
    <meta property="og:title" content="Fit-zone">
    <meta property="og:description" content="Sporten doe je het beste bij fit-zone de beste apparaten,
professionele begeleiding en verschillende gratis faciliteiten die je nergens anders vindt.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./css/images/favicons/android-chrome-192x192.png">
    <!-- DNS Prefetching -->
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <!-- Style Sheets -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media-queries.css">
    <link rel="stylesheet" type="text/css" href="css/uikit.gradient.css" />
    <link rel="stylesheet" type="text/css" href="assets/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/slidenav/slidenav.css" />
    <link rel="stylesheet" type="text/css" href="css/slidenav/slidenav.gradient.css" />
    <link rel="stylesheet" type="text/css" href="css/slidenav/slidenav.gradient.min.css" />
    <link rel="stylesheet" type="text/css" href="css/slidenav/slidenav.min.css" />
    
</head>
<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <header>
        <div class="navlogobox">
            <svg version="1.1" class="navlogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve"><g>
                <ellipse class="st0" cx="236.4" cy="90" rx="17.3" ry="26.8"/>
                <path class="st0" d="M261.5,113.4h26c0,81.4-22.5,81.4-56.3,62.3s-64.1-40.7-85.7-52.8s-26-15.6-37.2-6.1s-13.9-3.9,0-13
		c24.2-14.3,52.8,4.8,52.8,4.8c82.7,53.2,95.7,46.3,95.7,46.3S270.6,162.8,261.5,113.4z"/>
                <path class="st0" d="M200,0C89.7,0,0,89.7,0,200s89.7,200,200,200s200-89.7,200-200S310.3,0,200,0z M200,384.4
		c-54.8,0-104.1-24.1-137.9-62.2c15.1-10.1,100.5-66.8,141.8-84.1c45.5-19,75.3-29,42,71h25.5c27.3-103.9,0-116.5-21.6-116.5
		c-21.2,0-163.6,82.8-192.1,124.5C31.4,285.3,15.6,244.4,15.6,200C15.6,98.3,98.3,15.6,200,15.6S384.4,98.3,384.4,200
		S301.7,384.4,200,384.4z"/></g>
            </svg>
        </div>
        <div class="naviconbox .uk-text-center">
            <svg version="1.1" class="navicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 32 24" xml:space="preserve"><rect y="0" width="32" height="3.5"/><rect y="8.2" width="32" height="3.5"/><rect y="17.1" width="32" height="3.5"/>
            </svg><br>
            menu
        </div>
        <div class="navmobile">
            <ul class="navlist">
                <li class="navlist_item"><a class="navlist_link" href="index.html">Welkom</a></li>
                <li class="navlist_item"><a  class="navlist_link" href="info.html">Info</a></li>
                <li class="navlist_item"><a class="navlist_link" href="prices.html">Prijzen</a></li>
                <li class="navlist_item"><a class="navlist_link" href="group.html">Groepslessen</a></li>
                <li class="navlist_item"><a style="border-left: 6px solid #6fc349;color: #6fc349;background: #ededed;" class="navlist_link" href="contact.html">Contact</a></li>
                <li class="navlist_item"><a class="navlist_link" href="gallery.html">Foto's</a></li>
            </ul>
        </div>
        <div class="navdesktop">
            <ul class="navlist">
                <li class="navlist_item"><a class="navlist_link" href="index.html">Welkom</a></li>
                <li class="navlist_item"><a  class="navlist_link" href="info.html">Info</a></li>
                <li class="navlist_item"><a class="navlist_link" href="prices.html">Prijzen</a></li>
                <li class="navlist_item"><a class="navlist_link" href="group.html">Groepslessen</a></li>
                <li class="navlist_item"><a style="color: #fff;background: #6fc349;border: 2px solid #59a237;" class="navlist_link" href="contact.html">Contact</a></li>
                <li class="navlist_item"><a class="navlist_link" href="gallery.html">Foto's</a></li>
                
            </ul>
        </div>
    </header>
    <div class="black"></div>
    <div class="contentsection">
        <div id="contact_title" class="content">
                <div id="info2"></div>
                <h3>CONTACT</h3>
            
        </div>
        <div class="contact_contactbox">
            <div id="contact_div" class="content">
                <div class="contact_left">
                    <h2>CONTACTEER ONS</h2>
    <form  id="contact" role="form" method="post" action="contact.php">
        <input class="form_half" placeholder="Naam..." name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
        <?php echo "<p class='text-danger'>$errName</p>";?>
        
        <input id="form_half2" class="form_half" name="email" placeholder="Email..." value="<?php echo htmlspecialchars($_POST['email']); ?>">
        <?php echo "<p class='text-danger'>$errEmail</p>";?>
        <textarea class="form_full" name="message" placeholder="Bericht..."></textarea>
        
        <input id="contact_button" class="buttonlink" name="submit" type="submit" value="Verzend"><br>
        <?php echo $result; ?>	
    </form>
    
                </div>
                <div class="contact_right">
                    <div class="contact_float">
                        <div class="contact_locationleft">
                            <h5>Fit-zone Assenede</h5>
                            <ul>
                                <li>Kappeledreef 4</li>
                                <li>9960 Assenede</li>
                                <li>Tel.093782180</li>
                            </ul>
                            <a title="www.facebook.com/fitzone.assenede" target="_blank" href="https://www.facebook.com/fitzone.assenede">
                                <svg version="1.1" id="contact_fb1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="156 -156 512 512" style="enable-background:new 156 -156 512 512;" xml:space="preserve">
<g>
	<g>
		<g>
			<path class="st0" d="M412-156c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256C668-41.4,553.4-156,412-156z
				 M478.2,100l-42,0l0,153.6h-57.6V100h-38.4V47.1l38.4,0l-0.1-31.2c0-43.2,11.7-69.5,62.6-69.5h42.4v53H457
				c-19.8,0-20.8,7.4-20.8,21.2L436.2,47h47.6L478.2,100z"/>
		</g>
	</g>
</g>
</svg></a>
                            <a title="info@fit-zone.be" href="mailto:TEST@hotmail.com" target="_top">
                                <svg version="1.1" id="contact_mail1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="6 -6 512 512" style="enable-background:new 6 -6 512 512;" xml:space="preserve">
<path class="st0" d="M262-6C120.6-6,6,108.6,6,250s114.6,256,256,256s256-114.6,256-256S403.4-6,262-6z M377.3,136.2l-115.4,91.3
	l-119.2-91.3H377.3z M389.2,363.8H130.8v-189l119.1,90.3c3.2,2.4,7.9,3.7,11.7,3.7c3.9,0,7.3-1.3,10.5-3.8l117-93.1V363.8z"/>
</svg></a>
                        </div>
                        <div class="contact_locationright">
                            <h5>Fit-zone Ertvelde</h5>
                            <ul>
                                <li>Holstraat 1A</li>
                                <li>9940 Ertvelde</li>
                                <li>Tel.092234585</li>
                            </ul>
                            <a title="www.facebook.com/Fit-zone-Ertvelde-1523922327830110/" target="_blank" href="https://www.facebook.com/Fit-zone-Ertvelde-1523922327830110/">
                                <svg version="1.1" id="contact_fb1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="156 -156 512 512" style="enable-background:new 156 -156 512 512;" xml:space="preserve">
<g>
	<g>
		<g>
			<path class="st0" d="M412-156c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256C668-41.4,553.4-156,412-156z
				 M478.2,100l-42,0l0,153.6h-57.6V100h-38.4V47.1l38.4,0l-0.1-31.2c0-43.2,11.7-69.5,62.6-69.5h42.4v53H457
				c-19.8,0-20.8,7.4-20.8,21.2L436.2,47h47.6L478.2,100z"/>
		</g>
	</g>
</g>
</svg></a>
                            <a title="info@fit-zone.be" href="mailto:TEST@hotmail.com" target="_top">
                                <svg version="1.1" id="contact_mail1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="6 -6 512 512" style="enable-background:new 6 -6 512 512;" xml:space="preserve">
<path class="st0" d="M262-6C120.6-6,6,108.6,6,250s114.6,256,256,256s256-114.6,256-256S403.4-6,262-6z M377.3,136.2l-115.4,91.3
	l-119.2-91.3H377.3z M389.2,363.8H130.8v-189l119.1,90.3c3.2,2.4,7.9,3.7,11.7,3.7c3.9,0,7.3-1.3,10.5-3.8l117-93.1V363.8z"/>
</svg></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="contact_title2" class="content">
            <div id="info2"></div>
            <h3>LOCATIE</h3>
            <div class="maps">
            <div class="mapleft">
                <h4>Fit-zone Assende</h4>
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:350px;width:100%;padding-top:20px;'><div id='gmap_canvas' style='height:350px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(51.2309369,3.7484521000000086),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.2309369,3.7484521000000086)});infowindow = new google.maps.InfoWindow({content:'<strong>Fit-zone Assenede</strong><br>Kapelledreef 4, 9960 Assenede<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
            <div class="mapright">
                <h4>Fit-zone Ertvelde</h4>
                <div class="map">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'>
                </script>
                <div style='overflow:hidden;height:350px;width:100%;padding-top:20px'>
                    <div id='gmap_canvas2' style='height:350px;width:100%;'>
                    </div>
                    <div>
                        <small>
                            <a href="http://embedgooglemaps.com">									embed google maps							
                            </a>
                        </small>
                    </div>
                    <div>
                    </div>
                    <style>#gmap_canvas img{max-width:none!important;background:none!important}
                    </style>
                    </div>
                    <script type='text/javascript'>
                        function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(51.181497,3.74517579999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas2'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.181497,3.74517579999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Fit-zone Ertvelde</strong><br>Holstraat 1A, 9940 Ertvelde<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                </div>
            </div>
        
            </div>
        </div>
        <div style="margin-top:40px;" id="pricesfull" class="fullw">
        <div class="groepslesbox">
            <div class="grouptxt">
                <h2>SCRIJF JE IN VOOR</h2>
                <h1>GROEPSLESSEN</h1>
            </div>
            <a class="rounded_button" href="group.html">MEER INFO</a>
        </div>
    </div>
        
        
    </div>
    <div style="margin-top:0;" id="footer" class="grid__column-12">
        <div class="footercontent">
            <div id="footer_center" style="padding:0;padding-bottom:14px;" class="grid__column-12">©2016 Fit-zone.be</div>
            <div style="margin-top:20px;padding:0;padding-bottom:14px;" class="grid__column-12">
                <svg version="1.1" id="footer_fb" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="-41 164.9 512 512" style="enable-background:new -41 164.9 512 512;" xml:space="preserve">
<g>
	<g>
		<g>
			<path class="st0" d="M215,164.9c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256
				C471,279.5,356.4,164.9,215,164.9z M281.2,420.9l-42,0l0,153.6h-57.6V420.9h-38.4V368l38.4,0l-0.1-31.2
				c0-43.2,11.7-69.5,62.6-69.5h42.4v53H260c-19.8,0-20.8,7.4-20.8,21.2l-0.1,26.5h47.6L281.2,420.9z"/>
		</g>
	</g>
</g>
                </svg>
                <a href="https://www.facebook.com/fitzone.assenede" target="_blank" class="footer_assenedefb">Fit-zone Assenede</a>  |  
                <a href="https://www.facebook.com/Fit-zone-Ertvelde-1523922327830110/" target="_blank" class="footer_ertveldefb">Fit-zone Ertvelde</a></div>
            <div style="margin-top:20px;padding:0;" class="grid__column-12">
                <svg version="1.1" id="footer_tel" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="-41 164.9 512 512" style="enable-background:new -41 164.9 512 512;" xml:space="preserve">

                    <g>
	<path class="st0" d="M215,164.9c-141.4,0-256,114.6-256,256c0,141.4,114.6,256,256,256s256-114.6,256-256
		C471,279.5,356.4,164.9,215,164.9z M350.2,538.4l-20.5,20.5c-3.7,3.7-14.4,5.9-14.7,5.9c-64.8,0.6-127.3-24.9-173.2-70.8
		c-46-46-71.5-108.7-70.8-173.7c0,0,2.3-10.4,6-14.1l20.5-20.5c7.5-7.5,21.9-10.9,32-7.6l4.3,1.4c10.1,3.4,20.6,14.5,23.4,24.8
		l10.3,37.8c2.8,10.3-1,24.9-8.5,32.4l-13.7,13.7c13.4,49.7,52.5,88.8,102.2,102.3l13.7-13.7c7.5-7.5,22.2-11.3,32.4-8.5l37.8,10.3
		c10.3,2.8,21.4,13.3,24.8,23.4l1.4,4.4C361.1,516.6,357.7,531,350.2,538.4z"/>
</g>
                </svg>
                <span class="footer_assenede">Assenede 093782180</span>  |  
                <span class="footer_ertvelde">Ertvelde 092234585</span></div>
        </div>
    </div>
    
    <!-- Bottom scripts -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/lightbox.js" type="text/javascript"></script>
    <script src="js/parallax.js" type="text/javascript"></script>
    <script src="js/touch.js" type="text/javascript"></script>
    <script src="js/jQuery.scrollSpeed.js" type="text/javascript"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $(".smoothscroll").on('click', function(event) {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          });
        });
        </script>

        <script>
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});
		</script> 
    <script src="assets/viewportchecker.js"></script>
    <script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$('#status').delay(900).fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(200).css({'overflow':'visible'});
		})
	//]]>
    </script>
    <script>
        $(function() {  

            jQuery.scrollSpeed(120, 400);
    
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="vendor/jquery/jquery.min.js">\x3C/script>')</script>
    <script src="js/base.js"></script>
    

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>