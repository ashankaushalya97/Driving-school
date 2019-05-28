<?php session_start(); ?>
<?php 
    require_once('inc/connection.php');
?>

<?php 

    $errors =array();
    $count =0;

    if(isset($_POST['submit'])) {

        $req_fields = array('name','email','contact','address','startdate');

                foreach ($req_fields as $field) {
        
                    if(empty(trim($_POST[$field]))) {
                     $errors [] = $field. 'is required.';   
                    }
        
                }
                if(empty($errors)) {
                    //no error //adding new records
                    $name = mysqli_real_escape_string($connection, $_POST['name']);
                    $email = mysqli_real_escape_string($connection, $_POST['email']);
                    $contact = mysqli_real_escape_string($connection, $_POST['contact']);
                    $address = mysqli_real_escape_string($connection, $_POST['address']);
                    $startdate = mysqli_real_escape_string($connection, $_POST['startdate']);

                    $query = "INSERT INTO instructor ( Name ,Email ,Phone ,Address ,Start_date )
                                 VALUES ('{$name}','{$email}','{$contact}','{$address}','{$startdate}')";

                    $result = mysqli_query($connection, $query);

                    if($result) {
                        
                        echo '<script>  window.alert("Successfuly added the instructor."); </script>'; 
                        header("Location:instructors.php");
                        
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
    
    

    <title>DMS | Instructors </title>
</head>
<body>


    <nav class="navbar navbar-expand-md ">
        <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i> Auto Driving School</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                
                
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
                <li class="active">Instructors</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item list-group-item-action "><i class="far fa-credit-card">Dashboard</i></a>
                        <a href="schedule.php" class="list-group-item list-group-item-action"><i class="far fa-calendar-alt"></i> Schedule <span class="badge badge-secondary float-right">5</span></a>
                        <a href="students.php" class="list-group-item list-group-item-action "><i class="fas fa-user"></i> Students <span class="badge badge-secondary float-right">12</span></a>
                        <a href="instructors.php" class="list-group-item list-group-item-action active main-color-bg"><i class="fas fa-user-tie"></i> Instructors<span class="badge badge-secondary float-right">7</span></a>
                        <a href="fleet.php" class="list-group-item list-group-item-action"><i class="fas fa-car"></i> Fleet<span class="badge badge-secondary float-right">12</span></a>
                        <a href="payments.php" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i> Payments <span class="badge badge-secondary float-right">2</span></a>

                    </div> 
                </div>
                <div class="col-sm-9 text-center">
                <div class="panel-heading main-color-bg">
                        <h4 class="panel-title">Instructors</h4>
                </div>
                <article class="topcontent text-center">
                    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#instructor-modal"><i class="fas fa-user-tie"></i> + Add Instructor</button>
                    <div class="modal" role="dialog" id="instructor-modal">
                            <div class="modal-dialog text-left">
                                 <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title"><i class="fas fa-user-tie"></i> Add Instructor</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post">
                                                <div class="form-group">
                                                     <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Contact Number</label>
                                                    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address</label>
                                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                                                </div>
                                                <div class="form-group">
                                                     <label for="exampleInputEmail1">Start-date</label>
                                                    <input type="date" name="startdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Start date">
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
                       
                    <?php
                        $instructor = "SELECT * FROM instructor";
                        
                            $result_set = mysqli_query($connection, $instructor);
                        
                            if($result_set) {
                                if(mysqli_num_rows($result_set)>0) {
                                    
                                    $count=mysqli_num_rows($result_set);
                        
                                    for($x=1; $x<=$count; $x++) {


                                        $instructor_name = "SELECT * FROM instructor WHERE Instructor_ID='{$x}' LIMIT 1";
                                        $result_name = mysqli_query($connection, $instructor_name);

                                        if(mysqli_num_rows($result_name)>0) {
                                            $user=mysqli_fetch_assoc($result_name);
                                            $_SESSION['name']= $user['Name'];
                                        
                                        
                                            echo "<div class='col-sm-4'>
                                                    <article class='topcontent'>
                                                        <h4 id='studentName'>";
                                            echo $_SESSION['name'];
                                            echo "</h4>
                                                        <hr>
                                                        <h2><i class='fas fa-user'></i></h2>
                                                        <br>
                                                        <a class='btn btn-secondary' href=\"iProfile.php?instructor_id={$user['Instructor_ID']}\" role='button'>view profile</a>
                                                    </article>   
                                                </div>";
                                        }

                                    }
                        
                                }
                            }
                    ?>
                   </div>
                                          
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