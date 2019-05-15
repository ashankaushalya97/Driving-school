
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
  
  <link href='packages/core/main.css' rel='stylesheet' />
<link href='packages/daygrid/main.css' rel='stylesheet' />
<link href='packages/timegrid/main.css' rel='stylesheet' />
<script src='packages/core/main.js'></script>
<script src='packages/interaction/main.js'></script>
<script src='packages/daygrid/main.js'></script>
<script src='packages/timegrid/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      defaultDate: '2019-04-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-04-01'
        },
        {
          title: 'Long Event',
          start: '2019-04-07',
          end: '2019-04-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-04-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-04-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-04-11',
          end: '2019-04-13'
        },
        {
          title: 'Meeting',
          start: '2019-04-12T10:30:00',
          end: '2019-04-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-04-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-04-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-04-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-04-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-04-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-04-28'
        }
      ]
    });

    calendar.render();
  });

</script>
<style>

  

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

  
  </style>

  <title>DMS | Schedule </title>
</head>
<body>


  <nav class="navbar navbar-expand-md ">
    <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i> Auto Driving School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
   <!--     <li class="nav-item">
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
        <li class="active">Schedule</li>
      </ol>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="list-group">
            <a href="index.php" class="list-group-item list-group-item-action "><i class="far fa-credit-card"> Dashboard</i> </a>
            <a href="schedule.php" class="list-group-item list-group-item-action active main-color-bg"><i class="far fa-calendar-alt"></i> Schedule <span class="badge badge-secondary float-right">5</span></a>
            <a href="students.php" class="list-group-item list-group-item-action"><i class="fas fa-user"></i> Students <span class="badge badge-secondary float-right">12</span></a>
            <a href="instructors.php" class="list-group-item list-group-item-action"><i class="fas fa-user-tie"></i> Instructors<span class="badge badge-secondary float-right">6</span></a>
            <a href="fleet.php" class="list-group-item list-group-item-action"><i class="fas fa-car"></i> Fleet<span class="badge badge-secondary float-right">12</span></a>
            <a href="payments.php" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i> Payments <span class="badge badge-secondary float-right">2</span></a>

          </div> 
        </div>
        <div class="col-sm-9">
          <div class="content">
          <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h4 class="panel-title text-center">Schedule</h4>
              </div>
          <div>
            <article class="topcontent">

              <div id="calendar"></div>


            </article>
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