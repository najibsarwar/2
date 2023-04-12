<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Form-v9 by Colorlib</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="./assets/signup/css/nunito-font.css">

<link rel="stylesheet" href="./assets/signup/css/main.css">
<meta name="robots" content="noindex, follow">
<script nonce="908070b6-a2e2-4799-af5b-a1df33ffdae1">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>

<body class="form-v9">
<div class="page-content">
<div class="class=js-fullweight form-v9-content" style="background-image: url('images.jpg')">
<form class="form-detail" action="./controlar/storeuser.php" method="post">
<h2>Registration Form</h2>
<div class="form-row-total">
<div class="form-row">


<?php 
if (isset($_SESSION['form_errors']['name_error'])) {?>
<spanz><?=$_SESSION['form_errors']['name_error'] ?></span>
<?php
}
?>
<input value="<?=isset($_SESSION['old']['name']) ? $_SESSION['old']['name'] :'' ?>" type="text" name="name" id="name" class="input-text" placeholder="Your Name" >
</div>
<div class="form-row">
<?php 
if (isset($_SESSION['form_errors']['email_error'])){ ?>


<span><?=$_SESSION['form_errors']['email_error'] ?></span>
<?php
}
?>
<input value="<?= isset($_SESSION['old']['email']) ? $_SESSION['old']['email'] :'' ?>" type="text" name="email" id="email" class="input-text" placeholder="Your Email" >
</div>
</div>
<div class="form-row-total">
<div class="form-row">
<?php
if (isset($_SESSION['form_errors']['password_error'])) {?>
 <span><?=$_SESSION['form_errors']['password_error'] ?></span>
<?php }
?>
<input value="<?=isset($_SESSION['old']['password']) ? $_SESSION['old']['password'] :'' ?>" type="password" name="password" id="password" class="input-text" placeholder="Your Password" >

</div>
<div class="form-row">
<?php
if (isset($_SESSION['form_errors']['c_password_error'])) {?>
  <span><?=$_SESSION['form_errors']['c_password_error'] ?></span>
  <?php
}
?>
<input value="<?=isset($_SESSION['old']['c_password']) ? $_SESSION['old']['c_password'] : '' ?>" type="password" name="comfirm_password" id="comfirm-password" class="input-text" placeholder="Comfirm Password">
</div>
</div>
<div class="form-raw">
<?php 
if (isset($_SESSION['form_errors']['phone_error'])) {?>
  <span><?=$_SESSION['form_errors']['phone_error'] ?></span>
  <?php
}
?>

<input value="<?= isset($_SESSION['old']['phone']) ? $_SESSION['old']['phone'] : '' ?>" type="tel" name="phone" id="phone" class="form-control rounded" placeholder="Your phone Number">
</div>
<div class="form-row-last">
<input type="submit" name="register" class="register" value="SignUp">
</div>
</form>
</div>
</div>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996" integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ==" data-cf-beacon='{"rayId":"7b57ec45bc2578b8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
<?php 
session_unset()
?>