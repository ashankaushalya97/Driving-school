<?php session_start(); ?>
<?php 
    require_once('inc/connection.php');
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
    
    

    <title>DMS | Dashboard </title>
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
                    <a class="nav-link" id="name-display" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="logout()">Logout</a>
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
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item list-group-item-action active main-color-bg"><i class="far fa-credit-card"></i> Dashboard</a>
                        <a href="schedule.php" class="list-group-item list-group-item-action"><i class="far fa-calendar-alt"></i> Schedule <span class="badge badge-secondary float-right">5</span></a>
                        <a href="students.php" class="list-group-item list-group-item-action"><i class="fas fa-user"></i> Students <span class="badge badge-secondary float-right">12</span></a>
                        <a href="instructors.php" class="list-group-item list-group-item-action"><i class="fas fa-user-tie"></i> Instructors<span class="badge badge-secondary float-right">6</span></a>
                        <a href="fleet.php" class="list-group-item list-group-item-action"><i class="fas fa-car"></i> Fleet<span class="badge badge-secondary float-right">12</span></a>
                        <a href="payments.php" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i> Payments <span class="badge badge-secondary float-right">2</span></a>

                    </div> 
                </div>
                <div class="col-sm-9 text-center">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h4 class="panel-title">Overview</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <article class="topcontent">
                                    <h2><i class="fas fa-user"></i> 20</h2>
                                    <h4>Students</h4>
                                </article>
                            </div>
                            <div class="col-sm-4">
                                <article class="topcontent">
                                    <h2><i class="fas fa-dollar-sign"></i> 1000000</h2>
                                    <h4>Income</h4>
                                </article>
                            </div>
                            <div class="col-sm-4">
                                <article class="topcontent">
                                    <h2><i class="fas fa-user"></i> 75%</h2>
                                    <h4>Attendance</h4>
                                </article>
                            </div>
                            <br>
                        </div>
                        <br>
                            <div class="panel-heading main-color-bg">
                                <h4 class="panel-title">Student Growth Rate</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <article class="topcontent">
                                        GRAPH
                                    </article>
                                </div>
                            </div>
                        

                        
 <!--                       <div class="panel-body">
                            <div class="col-sm-3">
                                <div class="well dash-style">
                                    <h2><i class="fas fa-user"></i>20</h2>
                                    <h4>Students</h4>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well dash-style">
                                    <h2><i class="fas fa-user"></i>70%</h2>
                                    <h4>Attendance</h4>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well dash-style">
                                    <h2><i class="fas fa-user"></i>2000000LKR</h2>
                                    <h4>Income</h4>
                                </div>
                            </div>
                        </div>
-->
                    </div>
                </div>
            </div>
        </div>
    </section>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/plugin/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/controller/indexController.js"></script>
</body>
</html>