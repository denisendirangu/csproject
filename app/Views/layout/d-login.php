
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
<script nonce="cd536a75-82d6-4423-821c-1f1609cb6a8b">(function(w,d){!function(dK,dL,dM,dN){dK[dM]=dK[dM]||{};dK[dM].executed=[];dK.zaraz={deferred:[],listeners:[]};dK.zaraz.q=[];dK.zaraz._f=function(dO){return function(){var dP=Array.prototype.slice.call(arguments);dK.zaraz.q.push({m:dO,a:dP})}};for(const dQ of["track","set","debug"])dK.zaraz[dQ]=dK.zaraz._f(dQ);dK.zaraz.init=()=>{var dR=dL.getElementsByTagName(dN)[0],dS=dL.createElement(dN),dT=dL.getElementsByTagName("title")[0];dT&&(dK[dM].t=dL.getElementsByTagName("title")[0].text);dK[dM].x=Math.random();dK[dM].w=dK.screen.width;dK[dM].h=dK.screen.height;dK[dM].j=dK.innerHeight;dK[dM].e=dK.innerWidth;dK[dM].l=dK.location.href;dK[dM].r=dL.referrer;dK[dM].k=dK.screen.colorDepth;dK[dM].n=dL.characterSet;dK[dM].o=(new Date).getTimezoneOffset();if(dK.dataLayer)for(const dX of Object.entries(Object.entries(dataLayer).reduce(((dY,dZ)=>({...dY[1],...dZ[1]})),{})))zaraz.set(dX[0],dX[1],{scope:"page"});dK[dM].q=[];for(;dK.zaraz.q.length;){const d_=dK.zaraz.q.shift();dK[dM].q.push(d_)}dS.defer=!0;for(const ea of[localStorage,sessionStorage])Object.keys(ea||{}).filter((ec=>ec.startsWith("_zaraz_"))).forEach((eb=>{try{dK[dM]["z_"+eb.slice(7)]=JSON.parse(ea.getItem(eb))}catch{dK[dM]["z_"+eb.slice(7)]=ea.getItem(eb)}}));dS.referrerPolicy="origin";dS.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dK[dM])));dR.parentNode.insertBefore(dS,dR)};["complete","interactive"].includes(dL.readyState)?zaraz.init():dK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">

<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="#" class="h1">LOGIN</a>
</div>
<div class="card-body">
<p class="login-box-msg">Sign in to start your session</p>
<form action="<?= base_url('login'); ?>" method="post">
<?= csrf_field(); ?>
<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>

<p class="mb-1">
<a href="<?= route_to('user.forgotpass'); ?>">I forgot my password</a>
</p>
<p class="mb-0">
<a href="<?= route_to('user.register'); ?>" class="text-center">Register a new membership</a>
</p>
</div>

</div>

</div>


<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>

<!--
<!doctype html>
<html>
    <head>
    
        <script src="https://kit.fontawesome.com/e1edd9a381.js" crossorigin="anonymous"></script>
        <title><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins");

* {
  box-sizing: border-box;
}

body {
  display: flex;
  background-color: #f6f5f7;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: "Poppins", sans-serif;
  overflow: hidden;
  height: 100vh;
}

h1 {
  font-weight: 700;
  letter-spacing: -1.5px;
  margin: 0;
  margin-bottom: 15px;
}

h1.title {
  font-size: 45px;
  line-height: 45px;
  margin: 0;
  text-shadow: 0 0 10px rgba(16, 64, 74, 0.5);
}

p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
  text-shadow: 0 0 10px rgba(16, 64, 74, 0.5);
}

span {
  font-size: 14px;
  margin-top: 25px;
}

a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
  transition: 0.3s ease-in-out;
}

a:hover {
  color: #4bb6b7;
}

.content {
  display: flex;
  width: 100%;
  height: 50px;
  align-items: center;
  justify-content: space-around;
}

.content .checkbox {
  display: flex;
  align-items: center;
  justify-content: center;
}

.content input {
  accent-color: #333;
  width: 12px;
  height: 12px;
}

.content label {
  font-size: 14px;
  user-select: none;
  padding-left: 5px;
}

input[type=submit] {
  position: relative;
  border-radius: 20px;
  border: 1px solid #4bb6b7;
  background-color: #4bb6b7;
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  margin: 10px;
  padding: 12px 80px;
  letter-spacing: 1px;
  text-transform: capitalize;
  transition: 0.3s ease-in-out;
}

button {
  position: relative;
  border-radius: 20px;
  border: 1px solid #4bb6b7;
  background-color: #4bb6b7;
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  margin: 10px;
  padding: 12px 80px;
  letter-spacing: 1px;
  text-transform: capitalize;
  transition: 0.3s ease-in-out;
}
button a{
  color: #fff;
}
button:hover {
  letter-spacing: 3px;
}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}

button.ghost {
  background-color: rgba(225, 225, 225, 0.2);
  border: 2px solid #fff;
  color: #fff;
}

button.ghost i{
  position: absolute;
  opacity: 0;
  transition: 0.3s ease-in-out;
}

button.ghost i.register{
  right: 70px;
}

button.ghost i.login{
  left: 70px;
}

button.ghost:hover i.register{
  right: 40px;
  opacity: 1;
}

button.ghost:hover i.login{
  left: 40px;
  opacity: 1;
}

form {
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

input {
  background-color: #eee;
  border-radius: 10px;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.container {
  background-color: #fff;
  border-radius: 25px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  position: relative;
  overflow: hidden;
  width: 768px;
  max-width: 100%;
  min-height: 500px;
}

.forcontainer {
  background-color: #fff;
  border-radius: 25px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  position: relative;
  overflow: hidden;
  width: 500px;
  max-width: 100%;
  min-height: 300px;
}

.form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.login-container {
  left: 0;
  width: 50%;
  z-index: 2;
}

.container.right-panel-active .login-container {
  transform: translateX(100%);
}

.register-container {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.container.right-panel-active .register-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

.forgotpass-container {
  left: 0;
  width: 50%;
}

@keyframes show {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }

  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}

.overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.container.right-panel-active .overlay-container {
  transform: translate(-100%);
}

.overlay {
 /*background-image: url('image/image.gif');*/
  background: linear-gradient(90deg, #08c6c9 5%, #b839e3 91%); 
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #fff;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: linear-gradient(
    to top,
    rgba(46, 94, 109, 0.4) 40%,
    rgba(46, 94, 109, 0)
  );
}

.container.right-panel-active .overlay {
  transform: translateX(50%);
}

.overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-left {
  transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
  transform: translateX(0);
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.social-container {
  margin: 20px 0;
}

.social-container a {
  border: 1px solid #dddddd;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
  transition: 0.3s ease-in-out;
}

.social-container a:hover {
  border: 1px solid #4bb6b7;
}
        </style>

    </head>
    <body>
    <div class="container" id="container">
        <div class="form-container register-container ">
            <form action="process-register.php">
                <h2>Register Here</h2>
                <input type="text" name="fname"  placeholder="Full Name">
                <input type="email" name="email"  placeholder="Email">
                <input type="password" name="upassword"  placeholder="Password">
                <input type="submit" value="Register" name="user_register">
                <span>or use your account</span>
                <div class="social-container">
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form action="process-login.php">
                <h2>Login Here</h2>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="upassword" placeholder="Password">
                <div class="content">
                    <div class="pass-link">
                        <a href="forgotpassword.php">Forgot Password?</a>
                    </div>
                </div>
                <button>Login</button>
                <span>or use your account</span>
                <div class="social-container">
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                </div>
            </form>
       </div>

       <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h2>Hello friends </h2>
                    <p>If you have an account, login here and have fun</p>
                    <button class="ghost" id="login">Login
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h2>Start your <br> cooking journey now </h2>
                    <p>If you don't have an account, join and have fun</p>
                    <button class="ghost" id="register">Register
                        <i class="lni lni-arrow-left register"></i>
                    </button>
                </div>
            </div>
       </div>
    </div>
    <script>
      const registerButton = document.getElementById("register");
      const loginButton = document.getElementById("login");
      const container = document.getElementById("container");
      //const forcontainer = document.getElementById("forcontainer");

      registerButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      loginButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
    </body>
</html>-->