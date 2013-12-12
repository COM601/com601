
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
                   
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    Feedback uploaded to Assignment 1
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->                    
                            <li><a type="button" class="btn btn-white logout-btn" href="logout.php"><i class="icon-key"></i> Log Out</a></li>
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
                                                    <i class="icon-group"></i>
                                                </div>
                                                <div class="value blue-border">
                                                    <div id="course"></div>
                                                    <p>Course</p>
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
                                                    <p>Assignments</p>
                                                </div>
                                            </section>
                                        </div>
                                        
                                        <div class="col-lg-3 col-sm-6">
                                            <section class="panel">
                                                <div class="symbol red">
                                                    <i class="icon-tasks"></i>
                                                </div>
                                                <div class="value red-border">
                                                    <h1 class="stat_number">30</h1>
                                                   <!-- <h1 class="float-right">%</h1>-->

                                                    <p>% average</p>
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
	                                        <th>User ID</th>
									        <th>Feedback URL</th>
									        <th>First Viewed</th>
									        <th>Last Viewed</th>
									        <th>View Count</th>
									        <th>Assignent Name</th>
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
              <div class="col-lg-12">
                <!--new earning start-->
                <div class="panel terques-chart">
                    <div class="panel-body ">
                        <div class="chart">
                            <div class="heading">
                                <span>Score out of 100%</span>
                            </div>
                            <div class="sparkline" id="linechart-2" data-type="line" data-resize="true" data-height="75" data-width="100%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[65,89,94,79]"></div>
                        </div>
                    </div>
                    <div class="chart-tittle">
                        <span class="title">Assignment Marks</span>
                        <span class="value">
                            <a href="charts.html#" class="active">COM 601</a>
                        </span>
                    </div>
                </div>
            </div>

          
            
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->

    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../js/jquery.customSelect.min.js" ></script>

    <script type="text/javascript" language="javascript" src="../assets/advanced-datatable/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

    <!--common script for all pages-->
    <script src="../js/application.js"></script>

    <!--script for this page-->

    <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../js/sparkline-chart.js"></script>

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
                
            } );

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
			            { "aaData": "feedback_url" },
			            { "aaData": "first_viewed" },
			            { "aaData": "last_viewed" },
			            { "aaData": "view_count" },
						{ "aaData": "assignment_name" },
						{ "aaData": "module" },


			        ]
				} );
			} );
        </script>

 

  </body>
</html>
