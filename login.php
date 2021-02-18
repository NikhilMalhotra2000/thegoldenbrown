
<html lang="en" dir="ltr">
  <head>
	<script src="myScript.js" type="text/javascript"></script>
	
	<style>
	*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: montserrat;
  box-sizing: border-box;
}

#lp{
  min-height: 100vh;
  background-image: linear-gradient(120deg,#3498db,#8e44ad);
}

.login-form{
  width: 360px;
  background: #f1f1f1;
  height: 580px;
  padding: 80px 40px;
  border-radius: 10px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}

.login-form h1{
  text-align: center;
  margin-bottom: 60px;
}

.txtb{
  border-bottom: 2px solid #adadad;
  position: relative;
  margin: 30px 0;
}

.txtb input{
  font-size: 15px;
  color: #333;
  border: none;
  width: 100%;
  outline: none;
  background: none;
  padding: 0 5px;
  height: 40px;
}

.txtb span::before{
  content: attr(data-placeholder);
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  z-index: -1;
  transition: .5s;
}

.txtb span::after{
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  background: linear-gradient(120deg,#3498db,#8e44ad);
  transition: .5s;
}

.focus + span::before{
  top: -5px;
}
.focus + span::after{
  width: 100%;
}

.logbtn{
  display: block;
  width: 100%;
  height: 50px;
  border: none;
  background: linear-gradient(120deg,#3498db,#8e44ad,#3498db);
  background-size: 200%;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: .5s;
}

.logbtn:hover{
  background-position: right;
}

.bottom-text{
  margin-top: 60px;
  text-align: center;
  font-size: 13px;
}
	</style>
	
	
  </head>
  <body><Script>
  $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
	  
	  </script>
	  <div id="loginPage">
<div id="lp">
      <div  class="login-form">
	  <form action="welcomePage.php" method = "POST">
        <h1>Login</h1>

        <div class="txtb">
          <input type="text" placeholder="email" id="email" name="email">
          
        </div>

        <div class="txtb">
          <input type="password"  placeholder="Password" name="password">
          
        </div>

        <input type="submit" class="logbtn" value="Login" id="loginPageButton">

        <div class="bottom-text">
          Don't have account? <a href="sign.html">Sign up</a>
        </div>
        </form>
        
      </div>
	  </div></div>
  </body>
</html>