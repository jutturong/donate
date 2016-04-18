<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    
    
    <link rel="stylesheet" href="<?=base_url()?>js_login/css/reset.css">

 <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="<?=base_url()?>js_login/css/style.css">

    
    
    
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->

<!--
<div class="pen-title">
  <h1><?=$title?></h1><span>Pen <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span>
</div>
-->

<!--
<div class="rerun"><a href="">Rerun Pen</a></div>
-->

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login System</h1>
    
    <?=form_open("welcome/checklogin")?>
    <!-- <form > -->
      <div class="input-container">
          <input type="text" id="Username" name="Username"  value="finan" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
          <input type="password" id="Password"  name="Password" value="tawanchai"  required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer"><a href="javascript:void(0)">Forgot your password?</a></div>
  <!--  </form> -->
  <?=form_close()?>
  
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?=base_url()?>js_login/js/index.js"></script>

    
    
    
  </body>
</html>
