<?php session_start(); ?>
<?php 
    require_once('inc/connection.php');
?>

<?php 

    $errors =array();
    $count =0;


    if(isset($_POST['submit'])) {

        $req_fields = array('id','type','amount','method','date');

                foreach ($req_fields as $field) {
        
                    if(empty(trim($_POST[$field]))) {
                     $errors [] = $field. 'is required.';   
                    }
        
                }
                if(empty($errors)) {
                    //no error //adding new records
                    $id = mysqli_real_escape_string($connection, $_POST['id']);
                    $type = mysqli_real_escape_string($connection, $_POST['type']);
                    $amount = mysqli_real_escape_string($connection, $_POST['amount']);
                    $method = mysqli_real_escape_string($connection, $_POST['method']);
                    $date = mysqli_real_escape_string($connection, $_POST['date']);

                    $query = "INSERT INTO payment (Ref,Amount,Method,Date,Member_ID )
                                 VALUES ('{$type}','{$amount}','{$method}','{$date}','{$id}')";

                    $result = mysqli_query($connection, $query);

                    if($result) {
                        
                        echo '<script>  window.alert("Successfuly added the payments."); </script>'; 
                        
                        
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    

    <title>DMS | Payments </title>
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
                        <h3><i class="fas fa-cog"> </i> Dashboard | <small> Explore the universe</small></h3>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </header>

        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="active">Payments</li>
                </ol>
            </div>
        </section>

        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                            <div class="list-group">
                                    <a href="index.php" class="list-group-item list-group-item-action"><i class="far fa-credit-card"></i> Dashboard</a>
                                    <a href="schedule.php" class="list-group-item list-group-item-action"><i class="far fa-calendar-alt"></i> Schedule <span class="badge badge-secondary float-right">5</span></a>
                                    <a href="students.php" class="list-group-item list-group-item-action"><i class="fas fa-user"></i> Students <span class="badge badge-secondary float-right">12</span></a>
                                    <a href="instructors.php" class="list-group-item list-group-item-action"><i class="fas fa-user-tie"></i> Instructors<span class="badge badge-secondary float-right">12</span></a>
                                    <a href="fleet.php" class="list-group-item list-group-item-action"><i class="fas fa-car"></i> Fleet<span class="badge badge-secondary float-right">12</span></a>
                                    <a href="payments.php" class="list-group-item list-group-item-action active main-color-bg"><i class="fas fa-dollar-sign"></i> Payments <span class="badge badge-secondary float-right">2</span></a>
                                                    
                                  </div> 
                    </div>
                    <div class="col-md-9">
                            <div class="panel panel-default">
                                    <div class="panel-heading main-color-bg">
                                        <h4 class="panel-title text-center">Payments</h4>
                                    </div>
                                    <div>
                        <article class="topcontent">                
                        <form method="post">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10 col-md-3">
                                    <label for="cmbCreditSupplier">Student ID</label>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-10 col-md-5">
                                <div class="form-group">
                                            <select class="form-control" id="sel1" name="id">
                                                <option>Name</option>
                                                
                                                <?php
                                                    $vehicle = "SELECT * FROM member";
                        
                                                     $result_set = mysqli_query($connection, $vehicle);
                        
                                                      if($result_set) {
                                                         if(mysqli_num_rows($result_set)>0) {
                                    
                                                           $count=mysqli_num_rows($result_set);
                        
                                                              for($x=1; $x<=$count; $x++) {


                                                                $student = "SELECT * FROM member WHERE Member_ID='{$x}' LIMIT 1";
                                                                 $result_name = mysqli_query($connection, $student);

                                                              if(mysqli_num_rows($result_name)>0) {
                                                                $studentd=mysqli_fetch_assoc($result_name);
                                        
                                        
                                                               echo  "<option value = '";
                                                               echo $studentd['Member_ID'];
                                                               echo "'>";
                                                               echo $studentd['Name'];
                                                               echo "</option>";
                                                            }

                                                        }   
                        
                                                      }
                                                     }
                                                    ?>
                                                
                                            
                                            </select>
                                        </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10 col-md-3">
                                    <label for="cmbCtype">Credit Type</label>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-10 col-md-5">
                                 
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="type">
                                                <option>Select Type</option>
                                                <option value ="Cash">Cash</option>
                                                <option value = "Debit card">Debit card</option>
                                            </select>
                                        </div>
                                    </div>
                                
                                <div class="col-1"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10 col-md-3">
                                    <label for="txtAmount">Amount</label>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-10 col-md-5">
                                    <input class="form-control" type="text" name="amount" id="txtAmount" placeholder="Amount">
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10 col-md-3">
                                    <label for="txtMethod">Method</label>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-10 col-md-5">
                                    <input class="form-control" type="text" name="method" id="txtMethod" placeholder="Method">
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10 col-md-3">
                                    <label for="date">Date</label>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-10 col-md-5">
                                    <input class="form-control" name="date"type="date" name="date" id="date">
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-3 col-md-4"></div>
                                <div class="col-6 col-md-4">
                                    <button name="submit" type="submit" id="btnAddCredit" class="btn btn-success">Submit</button>
                                    <button type="button" class="btn btn-light">Reset</button>
                                </div>
                                <div class="col-3 col-md-4"></div>
                            </div>
                            <br>
                            <br>
                        </form>
                        </article>
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