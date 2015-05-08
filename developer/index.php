<?php
include '../connection.php';
// Fixed dev-id for now
$dev = 1;

// Find developer's name
$query_name = "SELECT name FROM developers WHERE dev_id='$dev';";
$result_name = mysql_query($query_name);
$row_name = mysql_fetch_array($result_name);

// Project Details which he is working in
$query_pid =
"SELECT p.project_id 
FROM developer_project_map d,projects p 
WHERE d.dev_id='$dev' AND p.project_id=d.project_id AND p.end_day>curdate();";
$result_pid = mysql_query($query_pid);
$row_pid = mysql_fetch_array($result_pid);
$pid = $row_pid['project_id'];

$query_project_detail = "SELECT * FROM projects WHERE project_id='$pid';";
$result_project_detail = mysql_query($query_project_detail);
$row_project_detail = mysql_fetch_array($result_project_detail);

$query_po = "SELECT name FROM po_list WHERE po_id=(SELECT po_id FROM project_po_map WHERE project_id='$pid');";
$result_po = mysql_query($query_po);
$row_po = mysql_fetch_array($result_po);

$query_devs = "SELECT d.name FROM developers d WHERE d.dev_id IN (SELECT dev_id FROM developer_project_map WHERE project_id='$pid');";
$result_devs = mysql_query($query_devs);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff And Search Developer Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../css/developer.css" rel="stylesheet">

    <script type="text/javascript">
        function showMyProject(){
          console.log("clicked1");
          document.getElementById('myProject').style.display = "block";
          document.getElementById('allCurrentProjects').style.display = "none";
          document.getElementById('developers').style.display = "none";
          document.getElementById('editProfile').style.display = "none";
      };
      function showAllProjects(){
        console.log("clicked2");
        document.getElementById('myProject').style.display = "none";
        document.getElementById('allCurrentProjects').style.display = "inline-block";
        document.getElementById('developers').style.display = "none";
        document.getElementById('editProfile').style.display = "none";
    };
    function showDevelopers(){
        console.log("clicked3");
        document.getElementById('myProject').style.display = "none";
        document.getElementById('allCurrentProjects').style.display = "none";
        document.getElementById('developers').style.display = "inline-block";
        document.getElementById('editProfile').style.display = "none";
    };
    function showSkillProfile(){
        console.log("clicked4");
        document.getElementById('myProject').style.display = "none";
        document.getElementById('allCurrentProjects').style.display = "none";
        document.getElementById('developers').style.display = "none";
        document.getElementById('editProfile').style.display = "block";
    };</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Staff And Search</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">

                    <!-- /.dropdown -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> You have been assigned to XYZ project
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <img src="../images/S&S.jpg" style="width:100%;height:auto;">
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Welcome <?php echo $row_name['name'];?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6" onclick="showMyProject()">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-folder fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-center">
                                        <div>My Current Project Details</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" onclick="showAllProjects()">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-archive-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-center">
                                        <div>View All Current Projects</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" onclick="showDevelopers()">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-center">
                                        <div>Search Developers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" onclick="showSkillProfile()">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-center">
                                        <div>Skill Profile</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row" id="myProject">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                          <!-- Default panel contents -->
                          <div class="panel-heading"><?php echo $row_project_detail['name'];?></div>
                          <div class="panel-body">
                            <p>Description: <?php echo $row_project_detail['description'];?></p>
                        </div>
                    </div>

                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item">ID: <?php echo $pid;?></li>
                        <li class="list-group-item">Product Owner: <?php echo $row_po['name'];?></li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-2">Start date:</div>
                                <div class="col-sm-2"><?php echo $row_project_detail['start_day'];?></div>
                                <div class="col-sm-2 col-sm-offset-2">End date:</div>
                                <div class="col-sm-2"><?php echo $row_project_detail['end_day'];?></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Developers: 
                            <?php
                            $row_devs = mysql_fetch_array($result_devs);
                            echo $row_devs['name'];
                            while ($row_devs = mysql_fetch_array($result_devs)) {
                                echo ", ".$row_devs['name'];
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="row" id="allCurrentProjects">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-file-archive-o fa-fw"></i> Current Projects
                            <div class="pull-right">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-10">
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading">Projects</div>

                      <!-- Table -->
                      <table class="table">
                          <tr>
                              <td colspan="1">#</td>
                              <td colspan="2">Project Name</td>
                              <td colspan="5">Region</td>
                          </tr>
                          <tr>
                              <td colspan="1">1</td>
                              <td colspan="2">Analyzer</td>
                              <td colspan="5">Asia</td>
                          </tr>
                      </table>

                  </div>
              </div>
          </div>
          <!-- /.row -->

          <div class="row" id="developers">
            <div class="col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-users fa-fw"></i> List of Developers
                        <div class="pull-right">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search by Skill...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10">
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">Developers</div>

                  <!-- Table -->
                  <table class="table">
                      <tr>
                          <td colspan="1">#</td>
                          <td colspan="2">First Name</td>
                          <td colspan="2">Last Name</td>
                          <td colspan="5">Region</td>
                      </tr>
                      <tr>
                          <td colspan="1">1</td>
                          <td colspan="2">ABC</td>
                          <td colspan="2">XYZ</td>
                          <td colspan="5">Asia</td>
                      </tr>
                  </table>

              </div>
          </div>
      </div>

      <div class="row" id="editProfile">
          <div class="col-lg-10">
              <ul class="list-group">
              <li class="list-group-item">Java</li>
                  <li class="list-group-item">Ruby</li>
                  <li class="list-group-item">Front-end</li>
              </ul>
          </div>
      </div>
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../bower_components/raphael/raphael-min.js"></script>
<script src="../bower_components/morrisjs/morris.min.js"></script>
<script src="../js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
