<?php
    include("header.php");
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php
        include 'side_and_menu.php';
        $ab = 12;
       ?>

       <?php
        function number_of_projects()
        {
        $res = mysql_query("select * from projects where end_day > curdate()");
    
        $response = mysql_num_rows($res);
        //print_r($res);
        return $response;
        }
        ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrow-circle-right fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_of_projects() ?></div>
                                    <div>Projects going on</div>
                                </div>
                            </div>
                        </div>
                        <a href="project_lists.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
              
              
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Project</div>

                                </div>
                            </div>
                        </div>
                        <a href="new_project.php">
                            <div class="panel-footer">
                                <span class="pull-left">Add now</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">PO </div>

                                </div>
                            </div>
                        </div>
                        <a href="new_po.php">
                            <div class="panel-footer">
                                <span class="pull-left">Add now</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">DEV </div>
                                </div>
                            </div>
                        </div>
                        <a href="new_dev.php">
                            <div class="panel-footer">
                                <span class="pull-left">Add now</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Project Progress
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart">
                                 <ul class="" style="list-style-type: none;">
 <?php
    $res = mysql_query("select * from projects order by end_day asc");
    while ($row = mysql_fetch_assoc($res))
    {
        $pr_id = $row["project_id"];
        $end_day = date_create($row["end_day"]);
        $start_day = date_create($row["start_day"]);
        $diff = date_diff($end_day, $start_day);
        $today = date_create(date("Y-m-d"));
       $diff_cur = date_diff($today, $start_day);
        $per = number_format(($diff_cur->days/$diff->days)*100, 0);
        // echo $per;
        $name = $row["name"];
        if($per > 100)
        {
            $per = 100;
        }
        echo '<li>
                            <a href="project_details.php?id='.$pr_id.'">
                                <div>
                                    <p>
                                        <strong>'.$name.'</strong>
                                        <span class="pull-right text-muted">'.$per.'% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$per.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$per.'%">
                                            <span class="sr-only">'.$per.'% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
    <li class="divider"></li>';


    }
 ?>
                        
                    
                        <li>
                            <a class="text-center" href="project_lists.php">
                                <strong>See All Projects</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                  
                    <!-- /.panel -->
                  
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                   
                    <!-- /.panel -->
                   
                    <!-- /.panel -->
                  
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   <?php
   include 'jquery_files.php';
   ?>

</body>

</html>
