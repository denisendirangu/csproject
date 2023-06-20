
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></title>
<base href="/">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<script src="https://kit.fontawesome.com/e1edd9a381.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
<script nonce="45bb37bc-1861-40e2-a0b7-f25481b6a97d">(function(w,d){!function(dK,dL,dM,dN){dK[dM]=dK[dM]||{};dK[dM].executed=[];dK.zaraz={deferred:[],listeners:[]};dK.zaraz.q=[];dK.zaraz._f=function(dO){return function(){var dP=Array.prototype.slice.call(arguments);dK.zaraz.q.push({m:dO,a:dP})}};for(const dQ of["track","set","debug"])dK.zaraz[dQ]=dK.zaraz._f(dQ);dK.zaraz.init=()=>{var dR=dL.getElementsByTagName(dN)[0],dS=dL.createElement(dN),dT=dL.getElementsByTagName("title")[0];dT&&(dK[dM].t=dL.getElementsByTagName("title")[0].text);dK[dM].x=Math.random();dK[dM].w=dK.screen.width;dK[dM].h=dK.screen.height;dK[dM].j=dK.innerHeight;dK[dM].e=dK.innerWidth;dK[dM].l=dK.location.href;dK[dM].r=dL.referrer;dK[dM].k=dK.screen.colorDepth;dK[dM].n=dL.characterSet;dK[dM].o=(new Date).getTimezoneOffset();if(dK.dataLayer)for(const dX of Object.entries(Object.entries(dataLayer).reduce(((dY,dZ)=>({...dY[1],...dZ[1]})),{})))zaraz.set(dX[0],dX[1],{scope:"page"});dK[dM].q=[];for(;dK.zaraz.q.length;){const d_=dK.zaraz.q.shift();dK[dM].q.push(d_)}dS.defer=!0;for(const ea of[localStorage,sessionStorage])Object.keys(ea||{}).filter((ec=>ec.startsWith("_zaraz_"))).forEach((eb=>{try{dK[dM]["z_"+eb.slice(7)]=JSON.parse(ea.getItem(eb))}catch{dK[dM]["z_"+eb.slice(7)]=ea.getItem(eb)}}));dS.referrerPolicy="origin";dS.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dK[dM])));dR.parentNode.insertBefore(dS,dR)};["complete","interactive"].includes(dL.readyState)?zaraz.init():dK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="../../index2.html" class="h1">Recover Password</a>
</div>
<div class="card-body">
<p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
<form action="login.html" method="post">
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Confirm Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<button type="submit" class="btn btn-primary btn-block">Change password</button>
</div>

</div>
</form>
<p class="mt-3 mb-1">
<a href="<?= route_to('user.login'); ?>">Login</a>
</p>
</div>

</div>
</div>


<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
