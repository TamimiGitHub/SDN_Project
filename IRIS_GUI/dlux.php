<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SDN</title>

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
        <?php include 'header.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Controller</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

<iframe src="http://localhost:8181/index.html" width="100%" height="700px"></iframe>

                
            </div>








<?php 

$host = 'localhost';
$port_6633 = 6633;
$port_8181 = 8181;

$port_6633_status=0;
$port_8181_status=0;

//6633
    $connection = @fsockopen($host, $port_6633);

    if (is_resource($connection))
    {
        //echo '<h2>' . $host . ':' . $port_6633 . ' ' . '(' . getservbyport($port_6633, 'tcp') . ') is open.</h2>' . "\n";

        fclose($connection);

    $port_6633_status=1;


    }




//8181



        $connection = @fsockopen($host, $port_8181);

    if (is_resource($connection))
    {
        //echo '<h2>' . $host . ':' . $port_8181 . ' ' . '(' . getservbyport($port_8181, 'tcp') . ') is open.</h2>' . "\n";

        fclose($connection);

 $port_8181_status=1;

    }

//verify

    if ($port_6633_status==1 && $port_8181_status==1)
    {

    //echo '<a href="http://localhost:8181/index.html#/topology" target="_new"><img src="images/odl_logo.png" width="300"/></a>';

    }



    else
    {
    
            echo '<h2><i class="fa fa-warning"></i>&nbsp;ERROR: ODL IS NOT RUNNING<BR></h2>' . "\n";

}

?>





<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Port Status
                                            </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Port #</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>6633</td>
                                            <td><?php if ($port_6633_status==1) { echo "<i class='fa fa-check-circle'></i>&nbsp;Open"; } else { echo "<i class='fa fa-warning'></i>&nbsp;Closed"; } ?></td>
                                        </tr>

                                                                                <tr>
                                            <td>8181</td>
                                            <td><?php if ($port_8181_status==1) { echo "<i class='fa fa-check-circle'></i>&nbsp;Open"; } else { echo "<i class='fa fa-warning'></i>&nbsp;Closed"; } ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
