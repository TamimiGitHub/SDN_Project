<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IRIS: Rules</title>

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
                    <h1 class="page-header">Rules</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<div class="row">
                
                    <!-- /.panel -->
















<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Scenario 1
                                            </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

<h3>Block a corrupted host from communicating to a department</h3>

This flow drops all the traffic coming from selected host to selected switch


<div class="row">&nbsp;</div>





<table>







                                        <tr>


                                            <form method="post">
                                            <td style="padding-right: 15px;">
                                            <!--- choose host ---->
                                                Host
                                                <select name="host_sen1" id="host_sen1">
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="0a">10</option>
                                                <option value="0b">11</option>
                                                <option value="0c">12</option>
                                                <option value="0d">13</option>
                                                <option value="0e">14</option>
                                                <option value="0f">15</option>
                                                <option value="10">16</option>
                                                <option value="11">17</option>
                                                <option value="12">18</option>
                                                <option value="13">19</option>
                                                <option value="14">20</option>
                                                <option value="15">21</option>
                                                <option value="16">22</option>
                                                <option value="17">23</option>
                                                <option value="18">24</option>
                                                <option value="19">25</option>
                                                </select>
                                              <!--- choose host ---->
                                              </td><td style="padding-right: 15px;">    


                                            <!--- choose switch ---->
                                                Switch
                                                <select name="switch_sen1" id="switch_sen1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                              <!--- choose switch ---->

                                              </td>

                                            <?php if(isset($_POST['PUT_1'])) {


                                            $which_host_1=$_POST['host_sen1'];
                                            $which_switch_1=$_POST['switch_sen1'];

                                                shell_exec("./Flow1_add.sh '$which_host_1' '$which_switch_1' ");
                                                echo '<META http-equiv="refresh" content="0;URL=flows.php?f=1">';

                                            }

                                            ?>
                                            <td style="padding-right: 15px;">



                                            <button type="submit" class="btn btn-primary btn-xs" name="PUT_1" id="PUT_1">APPLY</button>
                                            </form>

                                            </td>



                                             <?php if(isset($_POST['DELETE_1'])) {
                                                
                                                shell_exec('./clear.sh');
                                                echo '<META http-equiv="refresh" content="0;URL=flows.php">';

                                            }

                                            ?>
                                            <td style="padding-right: 15px;">
<form method="post">
                                            <button type="submit" class="btn btn-primary btn-xs" name="DELETE_1" id="DELETE_1">REMOVE</button>
                                            </form>

                                            </td>




                                        </tr>



                           </table>                

                                            







                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>














<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Scenario 2  
                                            </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

<h3>Block HTTP traffic to increase employee productivity</h3>

This flow drops all the http (TCP port 80) traffic going/leaving selected switch network

<div class="row">&nbsp;</div>





<table>







                                        <tr>


                                            <form method="post">
                                            <td style="padding-right: 15px;">
                                            <!--- choose host ---->
                                                

                                              <!--- choose host ---->
                                              </td><td style="padding-right: 15px;">    


                                            <!--- choose switch ---->
                                                Switch
                                                <select name="switch_sen2" id="switch_sen2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                              <!--- choose switch ---->

                                              </td>

                                            <?php if(isset($_POST['PUT_2'])) {


                                            $which_host_2=$_POST['host_sen2'];
                                            $which_switch_2=$_POST['switch_sen2'];

                                                shell_exec("./Flow2_add.sh '$which_switch_2' ");
                                                echo '<META http-equiv="refresh" content="0;URL=flows.php?f=2">';

                                            }

                                            ?>
                                            <td style="padding-right: 15px;">



                                            <button type="submit" class="btn btn-primary btn-xs" name="PUT_2" id="PUT_2">APPLY</button>
                                            </form>

                                            </td>



                                             <?php if(isset($_POST['DELETE_2'])) {
                                                
                                                shell_exec('./clear.sh');
                                                echo '<META http-equiv="refresh" content="0;URL=flows.php">';

                                            }

                                            ?>
                                            <td style="padding-right: 15px;">
<form method="post">
                                            <button type="submit" class="btn btn-primary btn-xs" name="DELETE_2" id="DELETE_2">REMOVE</button>
                                            </form>

                                            </td>




                                        </tr>



                           </table>                

                                            







                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>


</div>



           
      











<div class="row">


<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Scenario 3  
                                            </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

<h3>Upgrading departmental equipments  </h3>

    This flow reroutes all traffic going to S1 network to host 6
<div class="row">&nbsp;</div>





<table>







                                        <tr>


                                            <form method="post">
                                            <td style="padding-right: 15px;">
                                            <!--- choose host ---->
                                                
                                                
                                        
                                               
                                              <!--- choose host ---->
                                              </td><td style="padding-right: 15px;">    




                                              </td>

                                            <?php if(isset($_POST['PUT_3'])) {


                                                shell_exec("./Flow3_add.sh");
                                                echo '<META http-equiv="refresh" content="0;URL=flows.php?f=3">';

                                            }

                                            ?>
                                            <td style="padding-right: 15px;">



                                            <button type="submit" class="btn btn-primary btn-xs" name="PUT_3" id="PUT_3">APPLY</button>
                                            </form>

                                            </td>



                                             <?php if(isset($_POST['DELETE_3'])) {
                                                
                                                shell_exec('./clear.sh');
                                                echo '<META http-equiv="refresh" content="0;URL=flows.php">';

                                            }

                                            ?>
                                            <td style="padding-right: 15px;">
<form method="post">
                                            <button type="submit" class="btn btn-primary btn-xs" name="DELETE_3" id="DELETE_3">REMOVE</button>
                                            </form>

                                            </td>




                                        </tr>



                           </table>                

                                            







                            
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>































<?php if( isset($_GET['f']) && ($_GET['f']>=1 || $_GET['f']<=3))

{

?>

<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Flow <?php echo $_GET['f']; ?>
                                            </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<?php if($_GET['f']==1) { 
echo 'This flow drops all the traffic coming from h5 to switch 5<br><br>
<iframe src="https://publish.animatron.io/1159e456740f7574676a6143?w=640&h=360&a=1&r=0&c=0" width="640" height="360" frameborder="0"></iframe>';
}
elseif($_GET['f']==2)
{
    echo 'This flow drops all the http (TCP port 80) traffic going/leaving S2 network<br><br>
    <iframe src="https://publish.animatron.io/e657e456b151e1fdb103d977?w=640&h=360&a=1&r=1&c=0" width="640" height="360" frameborder="0"></iframe>';

}
elseif($_GET['f']==3)
{
    echo 'This flow reroutes all traffic going to S1 network to host 6<br><br>
<iframe src="https://publish.animatron.io/5d2ae2569c8dc83bd1329eea?w=640&h=360&a=1&r=1&c=0" width="640" height="360" frameborder="0"></iframe>';

}    

?>            </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>

<?php }  ?>




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
