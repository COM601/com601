
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="http://thevectorlab.net/flatlab/img/favicon.png">

    <title>FAN System</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <link href="../assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="../assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    
    <link href="../assets/dropzone/css/dropzone.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
      	<div class="sidebar-toggle-box">
        	<div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips">
                </div>
            </div>
            <!--logo start-->
            <a href="student.php" class="logo">FAN<span>system</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Filly Campbell</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Filly</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->                    
                            <li><a type="button" class="btn btn-white logout-btn" data-toggle="modal" data-target="#myModal"><i class="icon-key"></i> Log Out</a></li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="follow-ava"></li>
                  <li class="active">
                      <a class="" href="student.php">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                          <span>COM 601</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="com601-assignment1.php"><i class="icon-file-text"></i> Assignment 1</a></li>
                          <li><a class="" href="com601-assignment2.php"><i class="icon-file-text"></i> Assignment 2</a></li>
                          <li><a class="" href="com601-resources.php"><i class="icon-archive"></i> Resources</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                          <span>COM 602</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="com602-assignment1.php"><i class="icon-file-text"></i> Assignment 1</a></li>
                          <li><a class="" href="com602-assignment2.php"><i class="icon-file-text"></i> Assignment 2</a></li>
                          <li><a class="" href="com602-resources.php"><i class="icon-archive"></i>Resources</a></li>
                          
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">

          <section class="wrapper">
            <button class="modal">Hello</button>

             
                          
            
						
			
			
			           <div class="row">
           
           		<div class="col-xs-6">
			   		<div class="panel-group m-bot20" id="accordion">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="general.html#collapseOne">
                                          COM 601 required reading
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                  <div class="panel-body">
                                      <p>The Head First jQuery textbook is essential for this module. Each student needs his or her own copy and the paper version is strongly recommended.</p>

									  <p>For immediate access, if you visit google.co.uk, and from the 'more' dropdown list select 'scholar' and search for Head First jQuery, you will find an electronic copy, though with some parts omitted or blanked out. This is good for seeing what the book is like, but it is 'clunky' to use as well as incomplete.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="general.html#collapseTwo">
                                          Useful Links
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                                  <div class="panel-body">
                                      <p><a href="http://html5test.com">html5test.com - to check browser compliance with html5" target="_blank"</a></p>
										<p><a href="http://trends.builtwith.com/javascript/JQuery" target="_blank">jQuery Usage Trends</a></p>
										<p><a href="http://html5readiness.com" target="_blank">html5readiness graphic</a></p>
										<p><a href="http://html5doctor.com/downloads/h5d-sectioning-flowchart.png" target="_blank">HTML5 Element Flowchart</a></p>
										<p><a href="http://www.html5rocks.com/webappfieldguide/toc/index/">Field Guide to Web Applications (by Google)</a></p>


                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="general.html#collapseThree">
                                          Module Website </a>
                                  </h4>
                              </div>
                              <div id="collapseThree" class="panel-collapse in" style="height: auto;">
                                  <div class="panel-body">
                                      <p>Module web site: <a href="http://magicscm.ulster.ac.uk/com601_1314">Link</a> Username: com601 Password: com601</p>
                                      <p>The web site will contain or point to all module support materials. Normally these will be available at least one week in advance (except for practicals). Please be aware that every effort is made during lectures to ‘add value’ through live demonstrations, code walkthroughs, exercises, etc., so the online notes will contain less than the lectures. On weekdays, please check the announcements on the web site. </p>
                                  </div>
                              </div>
                          </div>
                      </div>
				</div>
				
				<div class="col-xs-6">
				<section class="panel">
                                  <header class="panel-heading tab-bg-dark-navy-blue">
                                      <ul class="nav nav-tabs nav-justified ">
                                          <li class="active">
                                              <a href="widget.html#popular" data-toggle="tab">
                                                  Announcements
                                              </a>
                                          </li>
                    
                                          <li class="">
                                              <a href="widget.html#recent" data-toggle="tab">
                                                  Email
                                              </a>
                                          </li>
                                      </ul>
                                  </header>
                                  <div class="panel-body">
                                      <div class="tab-content tasi-tab">
                                          <div class="tab-pane active" id="popular">
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <img src="../img/nicholl.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <a class=" p-head" href="widget.html#">17/09/2013 4.00 pm</a>
                                                      <p>Textbook purchase. 'Head First jQuery' is essential for this module. Please order it today (or as soon as possible) so that you have</p>
                                                  </div>
                                              </article>
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <img src="../img/nicholl.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <a class=" p-head" href="widget.html#">23/09/2013 2.00 pm</a>
                                                      <p>Welcome to COM601. Please check this site at least on days with classes for new announcements.</p>
                                                  </div>
                                              </article>
                                          </div>
                                          <div class="tab-pane" id="recent">
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <img src="../img/nicholl.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <a class=" p-head" href="#">COM601 Test dB + Dynamic Uploads</a>
                                                      <p>5th December 2012</p>
                                                  </div>
                                              </article>
                                              
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <img src="../img/nicholl.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <a class=" p-head" href="#">Dynamically Uploading files to Groupspace</a>
                                                      <p>5th December 2012</p>
                                                  </div>
                                              </article>
                                              
                                              <article class="media">
                                                  <a class="pull-left thumb p-thumb">
                                                      <img src="../img/nicholl.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <a class=" p-head" href="#">Week 10 Room for Lecture - 9F03</a>
                                                      <p>28th Novemner 2012</p>
                                                  </div>
                                              </article>
                                          </div>
                                      </div>
                                  </div>
                              </section>
				</div>
				
				
           </div> <!-- row -->
           
           
           
   
<!-- Modal --> 
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog">
					<div class="modal-content"> 
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Logout</h4>
						</div> 
						<div class="modal-body"> </div> 
						<div class="modal-footer"> 
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary logout-prim" data-dismiss="modal">Logout</button>
						</div> 
					</div><!-- /.modal-content --> 
				</div><!-- /.modal-dialog --> 
			</div><!-- /.modal -->    




    
         
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->

    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../js/jquery.customSelect.min.js" ></script>
    <script src="../assets/dropzone/dropzone.js"></script>
    
    <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../js/sparkline-chart.js"></script>

    <script type="text/javascript" language="javascript" src="../assets/advanced-datatable/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

    <!--common script for all pages-->
    <script src="../js/application.js"></script>

    <!--script for this page-->

    <script src="../js/easy-pie-chart.js"></script>

      <!--script for this page only-->

        <script type="text/javascript" charset="utf-8">

                function count($this){
                     var current = parseInt($this.html(), 10);
                     $this.html(++current);
                     if(current !== $this.data('count')){
                         setTimeout(function(){count($this)}, 75);
                     }
                     
                     
                 }        
                $("h1.stat_number").each(function() {
                    
                    $(this).data('count', parseInt($(this).html(), 10));
                    $(this).html('0');
                    
                    count($(this));
                });
               

        </script>
        
        <script>
            $(document).ready(function() {
                //set var with url and locate file
                var url = "../controller/details.php";

                $.getJSON(url,function(dat){
                   
                        //append the data from the array
                        $("#forename").append(
                            '<h1><span>'+ dat.forename +'</span></h1>'

                        );
                        
                         //append the data from the array
                        $("#surname").append(
                            '<p>'+ dat.surname +'</p>'

                        );
                        
                         //append the data from the array
                        $("#course").append(
                            '<h1>'+ dat.course_id +'</h1>'

                        );


						 //append the data from the array
                        $(".follow-ava").append(
                            '<img src="../'+dat.img_url+'"/>'

                        );
                        
                        $(".modal-body").append(
                            '<h4>Are you sure you want to logout ' + dat.user_id + ' ?</h4>'

                        );

                });

                //other script here


            });
        

        </script>
        
        <script>
        	$(document).ready(function() {
				$('#example').dataTable( {
					"bProcessing": true,
					"sAjaxSource": "../controller/studentDatatable.php",
			        "aoColumns": [
			            { "aaData": "user_id" },
			            { "aaData": "module" },
			            { "aaData": "assignment_name" },
			            { "aaData": "feedback_url" }

			        ]
				} );
				
				
				$(".logout-prim").click(function(){
				            setTimeout(function(){
				              window.location.href="logout.php";
				            },800);
				                             
				        });
				});
           
        </script>
        
        
        <script type="text/javascript">  
            $(function() {  
                    
              //retrieve comments to display on page  
              $.getJSON("../controller/comments.php?jsoncallback=?", function(data) {  
                            
                //loop through all items in the JSON array  
                for (var x = 0; x < data.length; x++) {  
                                
                  //create a container for each comment  
                  var div = $("<div>").addClass("panel-body col-lg-12").appendTo("#comments");  
                                    
                  //add author name and comment to container                
                  $("<label>").text(data[x].module_ass).appendTo(div);             
                  $("<div>").addClass("comment").text(data[x].comment_body).appendTo(div);  
               }
              }); 
        
        //add click handler for button
        $("#add").click(function() {
        
          //define ajax config object
          var ajaxOpts = {
            type: "post",
            url: "../controller/addComment.php",
            data: "&module_ass=" + $("#leaveComment").find("input").val() + "&comment_body=" + $("#leaveComment").find("textarea").val(),
            success: function(data) {
              
              //create a container for the new comment
              var div = $("<div>").addClass("row").appendTo("#comments");
            
              //add author name and comment to container
              $("<label>").text($("#leaveComment").find("input").val()).appendTo(div);
              $("<div>").addClass("comment").text($("#leaveComment").find("textarea").val()).appendTo(div);
              
              //empty inputs
              $("#leaveComment").find("input").val("");
              $("#leaveComment").find(".form-controltextarea").val("");
            }
          };
          
          $.ajax(ajaxOpts);
        
        });   
      });            
    </script> 
    
    
    
    
            <script>
        	$(document).ready(function() {
				$('#com601Assignments').dataTable( {
					"bProcessing": true,
					"sAjaxSource": "../controller/com601Datatable.php",
			        "aoColumns": [
			            { "aaData": "user_id" },
			            { "aaData": "module" },
			            { "aaData": "assignment_name" },
			            { "aaData": "assignment_brief" },
			            { "aaData": "feedback_url" }

			        ]
				} );

				});
           
        </script>
        
                    <script>
        	$(document).ready(function() {
				$('#com602Assignments').dataTable( {
					"bProcessing": true,
					"sAjaxSource": "../controller/com602Datatable.php",
			        "aoColumns": [
			            { "aaData": "user_id" },
			            { "aaData": "module" },
			            { "aaData": "assignment_name" },
			            { "aaData": "assignment_brief" },
			            { "aaData": "feedback_url" }

			        ]
				} );

				});
           
        </script>
        
       
        
        


 

  </body>
</html>
