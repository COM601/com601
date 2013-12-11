<?php

include('../includes/lock.php');

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.css">

       
        
        
    </head>
    <body id="home">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

              <div class="container">
        <header id="header">
          <img src="img/uulogo@2x.png" class="img" width="100" height="99" alt="Univeristy of Ulster logo" title="University of Ulster logo" />
          <h1>Feedback and <br /> notification system</h1>
        </header>

         <div id="login">
          <div class="loginbox">
            <div class="top">
              <h2>Account Login</h2>
            </div><!-- close .top -->

            <section id="content">

              <div id="loader"><img src="img/loading.gif" alt="loading…" /></div>

               <div id="results"></div>

            <form>

              <input type="text" placeholder="Username" required="" title="Please login with your B or E code" name="username" id="username" />

              <input type="password" placeholder="Password" required="" title="Please input your password" name="password" id="password" />

              <input type="submit" value="Sign in" id="submit" />

            </form><!-- form -->



          </section><!-- content -->

          </div><!-- close .loginbox -->
         </div><!-- close #login -->

    </div><!-- close .container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

         <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <script type="text/javascript">

        $(document).ready(function() {

          $("#loader").hide();
          $("#results").hide();


            $("form").submit(function (e){

              var username = $("input#username").val();

                e.preventDefault();

                var dataString = $(this).serialize();

                   $.ajax({
                        type: "POST",
                        url: "login.php",
                        data: dataString,
                        cache: false
                    //if done above do the following function, ajax deffered method
                    }).done(function (result) {
                        //removes all newlines, spaces $.trim
                        result = $.trim(result);
                            console.log('success', result);
                        if(result == 'student'){
                          //select conent fadout over a duration of 1100
                          $("form").fadeOut(600, 'linear');

                            //Select the loader 
                             $("#loader").delay(650).fadeIn(200);

                                $("#results").delay(800).fadeIn(230).append('<p>Success! Logging in as '+username+' </p>');
                            
                             
                            //$("#results").append('<h2>Success! Logged in as <strong>'+usernum+'</strong>!!');

                              setTimeout(function(){
                                window.location.href="views/student.php";
                              },4500);

                       } else if(result == 'lecture'){

                          $("form").fadeOut(600, 'linear');

                            //Select the loader 
                             $("#loader").delay(650).fadeIn(200);

                                $("#results").delay(1000).fadeIn(250).append('<p>Success! Logging in as '+username+' </p>');
                            
                             
                            //$("#results").append('<h2>Success! Logged in as <strong>'+usernum+'</strong>!!');

                              setTimeout(function(){
                                window.location.href="views/lecture.php";
                              },4500);

                           
                       } else {
                           alert('sorry');
                       }
                    //error handle
                   }).fail(function(xhr,status,error) {
                       console.log('error', status, error);
                   });

                });//close click



              $("#login").delay(500).fadeIn(3500);

              
              $("header#header").delay(300).fadeIn(2500);



            });//close dom load

        </script>
       



            
	</body>

</html>	

