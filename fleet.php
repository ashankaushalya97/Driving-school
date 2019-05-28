<?php session_start(); ?>
<?php 
    require_once('inc/connection.php');
?>

<?php 

    $errors =array();
    $count =0;

    if(isset($_POST['submit'])) {

        $req_fields = array('regno','type','yom','startdate');

                foreach ($req_fields as $field) {
        
                    if(empty(trim($_POST[$field]))) {
                     $errors [] = $field. 'is required.';   
                    }
        
                }
                if(empty($errors)) {
                    //no error //adding new records
                    $regno = mysqli_real_escape_string($connection, $_POST['regno']);
                    $type = mysqli_real_escape_string($connection, $_POST['type']);
                    $yom = mysqli_real_escape_string($connection, $_POST['yom']);
                    $startdate = mysqli_real_escape_string($connection, $_POST['startdate']);

                    $query = "INSERT INTO vehicle (Reg_No ,Car_type ,YOM ,Started_date )
                                 VALUES ('{$regno}','{$type}','{$yom}','{$startdate}')";

                    $result = mysqli_query($connection, $query);

                    if($result) {
                        
                        echo '<script>  window.alert("Successfuly added the vehicle."); </script>'; 
                        header("Location:fleet.php");
                        
                    }else {
                        echo '<script>  window.alert("Database query failed!"); </script>';
                    }


                }else {
                    echo '<script>  window.alert("You have empty fields!"); </script>';
                }

    }else {
        
    }

    

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>DMS | Fleet </title>
</head>
<body>


<nav class="navbar navbar-expand-md ">
    <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i> Auto Driving School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <!--
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Instructors</a>
            </li>
            -->
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Hello, Ashan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>

        </ul>
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3><i class="fas fa-cog"> </i> Dashboard |
                    <small> Explore the universe</small>
                </h3>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Fleet</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action "><i
                                class="far fa-credit-card"></i> Dashboard</a>
                    <a href="schedule.php" class="list-group-item list-group-item-action"><i
                                class="far fa-calendar-alt"></i> Schedule <span
                                class="badge badge-secondary float-right">5</span></a>
                    <a href="students.php" class="list-group-item list-group-item-action"><i class="fas fa-user"></i>
                        Students <span class="badge badge-secondary float-right">12</span></a>
                    <a href="instructors.php" class="list-group-item list-group-item-action"><i
                                class="fas fa-user-tie"></i> Instructors<span class="badge badge-secondary float-right">12</span></a>
                    <a href="fleet.php" class="list-group-item list-group-item-action active main-color-bg"><i
                                class="fas fa-car"></i> Fleet<span
                                class="badge badge-secondary float-right">12</span></a>
                    <a href="payments.php" class="list-group-item list-group-item-action"><i
                                class="fas fa-dollar-sign"></i> Payments <span
                                class="badge badge-secondary float-right">2</span></a>

                </div>
            </div>
            <div class="col-md-9 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h4 class="panel-title">Light weight vehicles</h4>
                    </div>
                    <article class="topcontent text-center">
                        <button type="button" class="btn btn-success btn-md" data-toggle="modal"
                                data-target="#login-modal"><i class="fas fa-car"></i> + Add Vehicle
                        </button>
                        <div class="modal" role="dialog" id="login-modal">
                            <div class="modal-dialog text-left">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title"><i class="fas fa-car"></i> Add Vehicle</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form enctype="multipart/form-data" method="post" id="add-fleet-form">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Register Number</label>
                                                <input type="text" name="regno" class="form-control" id="exampleInputEmail"
                                                       aria-describedby="emailHelp" placeholder="Register Number">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Vehicle Type</label>
                                                <div class="form-group">
                                                <select class="form-control" id="sel1" name="type">
                                                  <option>Select Type</option>
                                                  <option value ="Light weight">Light weight</option>
                                                  <option value = "Heavy Duty">Heavy-Duty</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Year Of Manufacture</label>
                                                <input type="text" class="form-control" name="yom" id="exampleInputEmail2"
                                                       aria-describedby="emailHelp" placeholder="Year of manufacture">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Started-date</label>
                                                <input type="date" name="startdate" class="form-control" id="exampleInputEmail"
                                                       aria-describedby="emailHelp" placeholder="Started date">
                                            </div>


                                            <button name ="submit" type="submit" id="submit-btn" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="panel-body">
                        <article class="topcontent">
                            <div class="container" id="fleet-container">

                            <div class="row">
                       
                    <?php
                        $vehicle = "SELECT * FROM vehicle";
                        
                            $result_set = mysqli_query($connection, $vehicle);
                        
                            if($result_set) {
                                if(mysqli_num_rows($result_set)>0) {
                                    
                                    $count=mysqli_num_rows($result_set);
                        
                                    for($x=1; $x<=$count; $x++) {


                                        $vehicle_no = "SELECT * FROM vehicle WHERE Vehicle_ID='{$x}' AND Car_type='Light weight' LIMIT 1";
                                        $result_name = mysqli_query($connection, $vehicle_no);

                                        if(mysqli_num_rows($result_name)>0) {
                                            $vehicle=mysqli_fetch_assoc($result_name);
                                            $_SESSION['regno']= $vehicle['Reg_No'];
                                        
                                        
                                            echo "<div class='col-sm-4'>
                                                    <article class='topcontent'>
                                                        <h4 id='studentName'>";
                                            echo $_SESSION['regno'];
                                            echo "</h4>
                                                        <hr>
                                                        <h2><i class=\"fas fa-car\"></i></h2>
                                                        <br>
                                                        <a class='btn btn-secondary' href=\"vProfile.php?vehicle_id={$vehicle['Vehicle_ID']}\" role='button'>view profile</a>
                                                    </article>   
                                                </div>";
                                        }

                                    }
                        
                                }
                            }
                    ?>

                            </div>
                        </article>
                    </div>
                    <br>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h4 class="panel-title">Heavy Duty vehicles</h4>
                                </div>
                                <div class="panel-body">
                                    <br>
                                    <article class="topcontent">
                                    <div class="container" id="fleet-container">

                            <div class="row">
                       
                    <?php
                        $vehicle = "SELECT * FROM vehicle";
                        
                            $result_set = mysqli_query($connection, $vehicle);
                        
                            if($result_set) {
                                if(mysqli_num_rows($result_set)>0) {
                                    
                                    $count=mysqli_num_rows($result_set);
                        
                                    for($x=1; $x<=$count; $x++) {


                                        $vehicle_no = "SELECT * FROM vehicle WHERE Vehicle_ID='{$x}' AND Car_type='Heavy Duty' LIMIT 1";
                                        $result_name = mysqli_query($connection, $vehicle_no);

                                        if(mysqli_num_rows($result_name)>0) {
                                            $vehicle=mysqli_fetch_assoc($result_name);
                                            $_SESSION['regno']= $vehicle['Reg_No'];
                                        
                                        
                                            echo "<div class='col-sm-4'>
                                                    <article class='topcontent'>
                                                        <h4 id='studentName'>";
                                            echo $_SESSION['regno'];
                                            echo "</h4>
                                                        <hr>
                                                        <h2><i class=\"fas fa-car\"></i></h2>
                                                        <br>
                                                        <a class='btn btn-secondary' href=\"vProfile.php?vehicle_id={$vehicle['Vehicle_ID']}\" role='button'>view profile</a>
                                                    </article>   
                                                </div>";
                                        }

                                    }
                        
                                }
                            }
                    ?>

                            </div>
                                    </article>
                                </div>

                            </div>
                        </div>

                    </div><!-- container -->
                </div>
            </div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/plugin/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="js/controller/fleetController.js"></script>
</body>
</html>