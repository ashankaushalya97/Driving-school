<?php session_start(); ?>
<?php 
    require_once('inc/connection.php');
?>

<?php 

    $errors =array();

    if(isset($_POST['submit'])) {

        $req_fields = array('name','address','dob','contact','regdate');

                foreach ($req_fields as $field) {
        
                    if(empty(trim($_POST[$field]))) {
                     $errors [] = $field. 'is required.';   
                    }
        
                }
                if(empty($errors)) {
                    //no error //adding new records
                    $name = mysqli_real_escape_string($connection, $_POST['name']);
                    $address = mysqli_real_escape_string($connection, $_POST['address']);
                    $dob = mysqli_real_escape_string($connection, $_POST['dob']);
                    $contact = mysqli_real_escape_string($connection, $_POST['contact']);
                    $regdate = mysqli_real_escape_string($connection, $_POST['regdate']);

                    $query = "INSERT INTO member ( Name ,Address ,DOB ,Contact_No ,Register_date )
                                 VALUES ('{$name}','{$address}','{$dob}','{$contact}','{$regdate}')";

                    $result = mysqli_query($connection, $query);

                    if($result) {
                        echo '<script>  window.alert("Successfuly added the member."); </script>';    
                    }else {
                        echo '<script>  window.alert("Database query failed!"); </script>';
                    }


                }else {
                    echo '<script>  window.alert("You have empty fields!"); </script>';
                }

    }

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
   
    <title>DMS | Students </title>
</head>
<body>


    <nav class="navbar navbar-expand-md ">
        <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i> Auto Driving School</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Instructors</a>
                </li>
                -->
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                <div class="nav-link">Welcome <?php echo $_SESSION['first_name']; ?> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
 
            </ul>
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h3><i class="fas fa-cog"> </i> Dashboard | <small> Explore the universe</small></h3>
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Students</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item list-group-item-action "><i class="far fa-credit-card"> Dashboard</i> </a>
                        <a href="schedule.php" class="list-group-item list-group-item-action"><i class="far fa-calendar-alt"></i> Schedule <span class="badge badge-secondary float-right">5</span></a>
                        <a href="students.php" class="list-group-item list-group-item-action active main-color-bg"><i class="fas fa-user"></i> Students <span class="badge badge-secondary float-right">12</span></a>
                        <a href="instructors.php" class="list-group-item list-group-item-action"><i class="fas fa-user-tie"></i> Instructors<span class="badge badge-secondary float-right">6</span></a>
                        <a href="fleet.php" class="list-group-item list-group-item-action"><i class="fas fa-car"></i> Fleet<span class="badge badge-secondary float-right">12</span></a>
                        <a href="payments.php" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i> Payments <span class="badge badge-secondary float-right">2</span></a>

                    </div> 
                </div>
                <div class="col-sm-9 text-center">
                <div class="panel-heading main-color-bg">
                        <h4 class="panel-title">Students</h4>
                </div>
                <article class="topcontent ">
                    <button type="button" class="btn btn-success btn-md " data-toggle="modal" data-target="#login-modal"><i class="fas fa-user"></i> + Add Student</button>
                        <div class="modal" role="dialog" id="login-modal">
                            <div class="modal-dialog text-left">
                                 <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title"><i class="fas fa-user"></i> Add Student</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="students.php" method="post">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address</label>
                                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Date of birth</label>
                                                    <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date Of Birth">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Contact Number</label>
                                                    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Register-date</label>
                                                    <input type="date" name="regdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Register date">
                                                </div>
                                                
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>                            
                                    </div>
                        </div>
                </article>

                   <div class="row">
                       <div class="col-sm-4">
                        <article class="topcontent">
                                <h4 id="studentName" value="">Name1</h4>
                                <hr>
                                <h2><i class="fas fa-user"></i></h2>
                                <br>
                                <a class="btn btn-secondary" href="sProfile.php" role="button">view profile</a>
                        </article>   
                       </div>
                       <div class="col-sm-4">
                       <article class="topcontent">
                                <h4 id="studentName" value="">Name1</h4>
                                <hr>
                                <img src="#" class="profile">
                                <br>
                                <button type="button" class="btn btn-secondary">View profile</button>
                        </article> 
                       </div>
                       <div class="col-sm-4">
                        <article class="topcontent">
                                <h4 id="studentName" value="">Name1</h4>
                                <hr>
                                <img src="#" class="profile">
                                <br>
                                <button type="button" class="btn btn-secondary">View profile</button>
                        </article> 
                       </div>
                   </div>
                   <br>
                  <
                       
                </div>
                <br>
               </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>








<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>