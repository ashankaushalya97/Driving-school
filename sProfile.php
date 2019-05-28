<?php session_start(); ?>
<?php 
    require_once('inc/connection.php');
?>

<?php

    $name = '';
    $address = '';
    $dob = '';
    $contact = '';
    $regdate = '';

    if(isset($_GET['member_id'])) {

      $member_id = mysqli_real_escape_string($connection,$_GET['member_id']);
      $query = "SELECT * FROM member WHERE Member_ID={$member_id} LIMIT 1";
      $result_set = mysqli_query($connection,$query);

      if($result_set) {
        if(mysqli_num_rows($result_set)==1) {

          $member = mysqli_fetch_assoc($result_set);
          $name = $member['Name'];
          $address = $member['Address'];
          $dob = $member['DOB'];
          $contact = $member['Contact_No'];
          $regdate = $member['Register_date'];

        }else {

        }
      }



    }else {
      header("Location:students.php?user_id_not_found");
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



  <title>DMS | Student Profile </title>
</head>
<body>


  <nav class="navbar navbar-expand-md ">
    <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i> Auto Driving School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Instructors</a>
        </li>

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
        <li class="active">Student profile</li>
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
        <div class="col-sm-9">
          <div class="content">
            <article class="topcontent">
              <div class="row">
                <div class="col-sm-9"><h3>Student Details</h3></div>
                <div class="col-sm-3">
                  <button type="button" class="btn btn-dark">Add course  <i class="fas fa-plus"></i></button>
                </div>
              </div>
                <div class="container">
                <form>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Name</label>
                               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=<?php echo $name; ?> disabled>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Address</label>
                               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=<?php echo $address; ?> disabled>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Date of birth</label>
                               <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=<?php echo $dob; ?> disabled>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Contact Number</label>
                               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=<?php echo $contact; ?> disabled>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Register-date</label>
                               <input type="datetime" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=<?php echo $regdate; ?> disabled>
                           </div>
                  </form>
                </div>
              
              <h5>Courses enrolled</h5>
              <p class="post-info">
                kadjsbckjbec
              </p>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Progress</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Cars</td>
                    <td>3 months</td>
                    <td>20%</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </article>
          </div>
        </div>
      </div>     
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-9">
          <article class="topcontent">
            <h3>Schedule</h3>
            <hr>

          </article>
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