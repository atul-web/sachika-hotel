
<?php

<!DOCTYPE html>
<html lang="en">

<head>
<style>
    /* fixed social*/
#fixed-social {
   position: fixed;
   top: 130px;
}

#fixed-social a {
   color: #fff;
   display: block;
   height: 40px;
   position: relative;
   text-align: center;
    line-height: 40px;
   width: 40px;
   margin-bottom: 1px;
   z-index: 2;
}
#fixed-social a:hover>span{
	visibility: visible;
  left: 41px;
  opacity: 1;
} 
#fixed-social a span {
	line-height: 40px;
    left: 60px;
    position: absolute;
    text-align: center;
    width: 120px;
    visibility: hidden;
    transition-duration: 0.5s;
    z-index: 1;
    opacity: 0;
}
 .fixed-facebook{
 	background-color: #00AAE5;
 }
 .fixed-facebook span{
	background-color: #00AAE5;
 }
 .fixed-twitter{
	background-color: #7D3895;

 }
 .fixed-twitter span{
 	background-color: #7D3895;
 }
 .fixed-gplus{
	background-color: #00AF54;

 }
 .fixed-gplus span{
 	background-color: #00AF54;
 }
 .fixed-linkedin{
	background-color: #FFC41E;

 }
 .fixed-linkedin span{
 	background-color: #FFC41E;
 }
 .fixed-instagrem{
	background-color: #ED2B29;

 }
 .fixed-instagrem span{
 	background-color: #ED2B29;
 }
 .fixed-tumblr{
	background-color: #EB1471;

 }
 .fixed-tumblr span{
 	background-color: #EB1471;
 }
/*end fixed social*/
</style>
<!-----------------------------         gtag       ------------------------------------------->
   
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2EHHT182FV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2EHHT182FV');
</script>
   
</head>

<body> <!--------------------------------------------------------------------->
    <div id="fixed-social">
        <div>
          <a href="https://www.facebook.com/hotelrgexclusive/" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
        </div>
        <div>
            <a  href="https://www.instagram.com/hotel_rg/?hl=en" class="fixed-instagrem" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          </div>
        <div>
          <a href="https://wa.me/+919823875999" class="fixed-gplus" target="_blank"><i class="fa fa-whatsapp"></i> <span>Whatsapp</span></a>
        </div>
        <div>
            <a href="tel:+91 8432 154 380" class="fixed-linkedin" target="_blank"><i class="fa fa-phone"></i> <span>Phone No.</span></a>
        </div>

      </div>
    <!--------------------------------------------------------------------->


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Hotel",
  "name": "Hotel RG Exclusive",
  "image": "https://hotelrgexclusive.in/hotel-in-akola.html",
  "@id": "https://hotelrgexclusive.in/",
  "url": "https://hotelrgexclusive.in/",
  "telephone": "7447439462",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Murtizapur Rd, near RAM LATA BUSINESS CENTER, Kirti Nagar, Akola, Maharashtra 444001",
    "addressLocality": "Akola",
    "postalCode": "444001",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 20.6984701,
    "longitude": 77.0182401
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": "https://hotelrgexclusive.in/" 
}
</script></body>

</html>
?>