<?php
include("connection.php");
if(isset($_REQUEST['mode']) && $_REQUEST['mode']='mode')
{
//echo $_POST['g-recaptcha-response'];die;exit;
 if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
		//your site secret key
        $secret = '6Lfd0DgUAAAAAPXUB2DOf0dHhRTd-TUA7Df_-egC';
		//get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
		 
	$txtUsername1= str_replace(' ', '-', $_REQUEST['txtUsername']);
	$txtPassword1= str_replace(' ', '-', $_REQUEST['txtPassword']);
	
	$txtUsername2= preg_replace('/[^A-Za-z0-9\-]/', '', $txtUsername1);
	$txtPassword2= preg_replace('/[^A-Za-z0-9\-]/', '', $txtPassword1);
	
	if($responseData->success){
	
	$txtUsername= mysql_real_escape_string($txtUsername2);
	$txtPassword= mysql_real_escape_string($txtPassword2);
	
	$_SESSION['txtUsername']=$txtUsername;
    $txtUsername=$_SESSION['txtUsername'];
	
	$select = @mysql_query("SELECT * FROM `admin`  WHERE `username`  ='$txtUsername' and `password` ='$txtPassword'") ;
	if(mysql_num_rows($select)>0)
	{
			$result = mysql_fetch_object($select);
			$_SESSION['auth']="yes";
			$_SESSION['ADMIN_USERNAME'] = $result->username;
			$_SESSION['ADMIN_ID'] = $result->adminId;
			$_SESSION['ADMIN_PASSWORD']= $result->password;
			$_SESSION['LASTLOGINTIME']= $result->admin_logintime;
			$loginstatus_update = "UPDATE ".admin." SET `login_status` = 'Y' WHERE `username` = '".$_SESSION['ADMIN_USERNAME']."'";
			$exe_loginstatus = mysql_query($loginstatus_update);
			header("location: home.php");
			
	}else { $msg="Oops! Either username or password is invalid"; }
	} else{
            $msg = 'Robot verification failed, please try again.';
       }
} else {
$msg = 'Please click on the reCAPTCHA box.';
}	   
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <!-------------validation------------->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
$(document).ready(function(){ 
 var alphanumers = /^[a-zA-Z0-9]+$/;
if(!alphanumers.test($("#txtUsername").val())){
    alert("Username can have only alphabets and numbers.");
} 
if(!alphanumers.test($("#txtPassword").val())){
    alert("Password can have only alphabets and numbers.");
}  

	$("#form1").validate({
		rules: {
			txtUsername: {
				required: true,
				minlength: 3
			},
			
			
			txtPassword: {
				required: true,
				minlength:6
				
				}
			 
		}, //end rules
		messages: {
			
			txtUsername: {
				required: "<br /> Please Enter Your Username.",
				minlength: "<br /> Atleast 3 Character Long."
			
			},
		
			
			txtPassword: {
				required: "<br /> Please Enter Your Password.",
				minlength: "<br /> Password must be 6 character."
				}
				
			
			
		} //end messages
		
	}); //end validate
  });
</script>
<!-------------validation end------------->
    </head>
    <body>
    <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
              <div class="clr"></div>
      </div><!--/ Codrops top bar -->
            <header>
                <h1>Khabor Ebong <span> Login</span></h1>
				<nav class="codrops-demos"></nav>
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="" id="form1" method="post" autocomplete="off">
                            <input type="hidden" name="mode" value="mode"> 
                                <h1>Log in</h1> 
                               <h2> <?php if(!empty($msg)): ?><div class="errMsg"><?php echo $msg; ?></div><?php endif; ?></h2>
                                <p> 
                                    <label for="username" class="uname" data-icon="u"> Your  username </label>
                                  <input id="username" name="txtUsername" required type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="txtPassword" required type="password" placeholder="password" /> 
                                </p>
                             <div class="g-recaptcha" data-sitekey="6Lfd0DgUAAAAAFViwzyM4IU1H8b1OiVffzlG4OaQ"></div>
                                <p class="login button"> 
                                    <input type="submit" name="submit" id="submit" value="Login" /> 
								</p>
                                
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
    </div>
    </body>
</html>