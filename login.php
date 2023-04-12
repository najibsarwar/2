<!doctype html>
<html lang="en">
<head>
<title>Login 10</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/login/css/style.css">
<script nonce="cc8fc410-a4d6-495d-b797-ea729e124a35">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="img js-fullheight" style="background-image: url(bg.jpg);">
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section"> Have an Account?</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<h3 class="mb-4 text-center">Sign In Here </h3>
<form action="#" class="signin-form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Username" required>
</div>
<div class="form-group">
<input id="password-field" type="password" class="form-control" placeholder="Password" required>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
</div>
<div class="form-group d-md-flex">
<div class="w-50">
<label class="checkbox-wrap checkbox-primary">Remember Me
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</div>
<div class="w-50 text-md-right">
<a href="./signup.php" style="color: #fff">SignUp Now !</a>
</div>
</div>
</form>
<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
<div class="social d-flex text-center">
<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="./assets/login/js/jquery.min.js"></script>
<script src="./assets/login/js/popper.js"></script>
<script src="./assets/loginjs/bootstrap.min.js"></script>
<script src="./assets/login/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996" integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ==" data-cf-beacon='{"rayId":"7b55dc258e8a78b7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
