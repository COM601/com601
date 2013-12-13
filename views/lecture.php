
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
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
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
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini2.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini3.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../img/avatar-mini4.jpg"></span>
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
                      <a class="" href="index.html">
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
                          <li><a class="" href="general.html">Assignment 1</a></li>
                          <li><a class="" href="buttons.html">Assignment 2</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                          <span>COM 602</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="grids.html">Assignment1</a></li>
                          <li><a class="" href="calendar.html">Assignment 2</a></li>
                          
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
                          <div class="col-xs-12">
                              <!--follower start-->
                              <section class="panel">
                                  

                                  <footer class="follower-foot">
                                    <div class="row state-overview">
                                        <div class="col-lg-3 col-sm-6">
                                            <section class="panel">
                                                <div class="symbol terques">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="value terques-border">
                                                    <div id="forename"></div>
                                                    <div id="surname"></div>
                                                </div>
                                            </section>
                                        </div>
                                        
                                        <div class="col-lg-3 col-sm-6">
                                            <section class="panel">
                                                <div class="symbol blue">
                                                    <i class="icon-bar-chart"></i>
                                                </div>
                                                <div class="value blue-border">
                                                    <div id="course"></div>
                                                    <p>Course Director</p>
                                                </div>
                                            </section>
                                        </div>
                                        
                                        <div class="col-lg-3 col-sm-6">
                                            <section class="panel">
                                                <div class="symbol yellow">
                                                    <i class="icon-book"></i>
                                                </div>
                                                <div class="value yellow-border">
                                                    <h1 class="stat_number">4</h1>
                                                    <p>Awaiting Feedback</p>
                                                </div>
                                            </section>
                                        </div>
                                        
                                        <div class="col-lg-3 col-sm-6">
                                            <section class="panel">
                                                <div class="symbol red">
                                                    <i class="icon-tags"></i>
                                                </div>
                                                <div class="value red-border">
                                                    <h1 class="stat_number">12/16</h1>
                                                   <!-- <h1 class="float-right">%</h1>-->

                                                    <p>Feedback Viewed</p>
                                                </div>
                                            </section>
                                        </div>
                                        
                                        
                                  </footer>
                              </section>
                              <!--follower end-->
                          </div>
                      </div>
                      <!--weather statement start-->
                     
                  </div>
              </div>
			  <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Assignment Overview
                        </header>
                        <div class="panel-body">
                              <div class="adv-table">
                              	<table class="display table table-bordered table-striped studentTable" id="example">
	                                    <thead>
	                                    <tr>
	                                        <th>Module</th>
											<th>Assignment Name</th>
											<th>User ID</th>
											<th>First Name</th>
											<th>Second Name</th>
											<th>Feedback URL</th>
											<th>First viewed</th>
											<th>Last viewed</th>
											<th>View count</th>
	                                    </tr>
	                                    </thead>
	                                    <tbody>
	                                    
	                                    	<tr>
												<td colspan="5" class="dataTables_empty">Loading data from server</td>
											</tr>
	                                    
	                                    </tbody>
                                    
									</table>
                              </div>
                        </div>
                    </section>
                </div>
            </div> <!-- row -->


            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Comments
                        </header>
                        <div class="panel-body">
                              <div class="adv-table">
                                <table class="display table table-bordered table-striped studentTable" id="commentPrivate">
                                      <thead>
                                      <tr>
                                          <th>User ID</th>
                                          <th>Comment</th>
                                          <th>Module</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      
                                        <tr>
                        <td colspan="5" class="dataTables_empty">Loading data from server</td>
                      </tr>
                                      
                                      </tbody>
                                    
                  </table>
                              </div>
                        </div>
                    </section>
                </div>
            </div> <!-- row -->
            
            
            <div class="row">
            
            	<div class="panel">
                  <header class="panel-heading">
                      Dropzone File Upload
                  </header>
                  <div class="panel-body">
                      <form action="../controller/upload.php" class="dropzone clickable" id="my-awesome-dropzone">
	                      <div class="default message">
	                      	<span>Drop files here to upload your lovely</span>
	                      </div>
                      </form>
                  </div>
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

    <script type="text/javascript" language="javascript" src="../assets/advanced-datatable/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

    <!--common script for all pages-->
    <script src="../js/application.js"></script>

    <!--script for this page-->

    <script src="../js/easy-pie-chart.js"></script>

      <!--script for this page only-->

        

        
           

        
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
                

            });
        

        </script>
        
        <script>
        	$(document).ready(function() {
				$('#example').dataTable( {
					"bProcessing": true,
					"sAjaxSource": "../controller/lectureDatatable.php",
			        "aoColumns": [
			        	{ "aaData": "module" },
			        	{ "aaData": "assignment_name" },
			            { "aaData": "user_id" },
			            { "aaData": "forename" },
			            { "aaData": "surname" },
			            { "aaData": "feedback_url" },
			            { "aaData": "first_viewed" },
			            { "aaData": "last_viewed" },
			            { "aaData": "view_count" }
			        ]
				} );
				
				$(".logout-prim").click(function(){
				            setTimeout(function(){
				              window.location.href="logout.php";
				            },800);
				                             
				        });
				});
        </script>

        <!-- comments -->
        <script>
          $(document).ready(function() {
              $('#commentPrivate').dataTable( {
                "bProcessing": true,
                "sAjaxSource": "../controller/lectureQueryComments.php",
                    "aoColumns": [
                      { "aaData": "user_id" },
                      { "aaData": "comment_body" },
                        { "aaData": "module_ass" }
                    ]
              });

        });
        </script>

 

  </body>
</html>
