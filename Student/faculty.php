<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login_teacher.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .bs-example {
      margin: 20px;
    }
  </style>
</head>


<body>
<div id="college-title">
    <h1 id="college-name">
      <img src="http://www.pccoepune.com/images/PCET Logo 2_new.png" alt="PCET Trust Logo" style="width:75px; height:75px; margin:0px 10px">
      <b>Pimpri Chinchwad College of Engineering, Pune</b>
      <img src="http://www.pccoepune.com/images/PCET Logo 2_new.png" alt="PCET Trust Logo" style="width:75px; height:75px; margin:0px 10px">
    </h1>
  </div>
  <div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a href="student_home.php" class="navbar-brand">
        <img src="../PCCOE_LOGO.jpg" alt="PCET Trust Logo" style="width:80px; height:75px; margin:0px 10px">
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <a href="notice.php" class="nav-item nav-link ">Message Received</a>
          <a href="assignment.php" class="nav-item nav-link">Assignment/Timetable Received</a>
          <a href="submit_asg.php" class="nav-item nav-link">Submit Assignment</a>
          <a href="faculty.php" class="nav-item nav-link">Faculty list</a>
          <a href="https://learner.pceterp.in/" target="_blank" class="nav-item nav-link">ERP Login</a>
        </div>
        <div class="navbar-nav ml-auto">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Logout
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Alert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to logout
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">NO</button>
                <button style="text-decoration:none;" type="button" href="../login_student.php" class="btn btn-danger"><a href="../login_student.php">YES
              </a></button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </nav>
  </div>
  <?php echo "<div id='name'> Name: ". $_SESSION['fName']." ". $_SESSION['lName']. "<br>
          Email: ". $_SESSION['email'].
          "</div>";?>
  <div class="teacher-heading" >
        Faculty List
      </div>
          <table>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Branch</th>
            <th>Post</th>
            <th>Gender</th>
            <th>Email id</th>
            <th>Mobile No.</th>
            <th>Address</th>
            </tr>
            <?php
            // Connecting to the Database
                $servername = "172.31.91.110";
                $username = "root";
                $password = "";
                $database = "teachers";

                // Create a connection
                $conn = mysqli_connect($servername, $username, $password, $database);
                // Die if connection was not successful
                if (!$conn){
                    die("Sorry we failed to connect: ". mysqli_connect_error());
                }
                else{
                    // echo "Connection was successful<br>";
                }

                $sql = "SELECT * FROM `teacher`";
                $result = mysqli_query($conn, $sql);

                // Display the rows returned by the sql query
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<tr><td>'.$row['fName'].'</td><td>'.$row['lName'].'</td><td>'.$row['branch'].'</td><td>'.$row['post'].'</td><td>'.$row['gender'].'</td><td>'.$row['email'].'</td><td>'.$row['mobile'].'</td><td>'.$row['address'].'</td></tr>';

                    }
            ?>
        </table>
        <footer>
      <div class="footer">
        <p style="letter-spacing:2px">Made by <b>Paresh Brahmankar</b></p>
        <a href="https://www.facebook.com/paresh.brahmankar.5" target="_blank">
        <span style="font-size: 48px; color: blue; padding:15px">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
          </span>
        </a>
        <a href="https://www.linkedin.com/in/paresh-brahmankar/" target="_blank">
        <span style="font-size: 48px; color: blue; padding:15px;">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
          </span>
        </a>
        <a href="https://www.instagram.com/Paresh_0808/" target="_blank">
        <span style="font-size: 48px; color: red; padding:15px;">
        <i class="fa fa-instagram" aria-hidden="true"></i>
          </span>
        </a>
        <a href="https://github.com/Paresh08082000" target="_blank">
          <span style="font-size: 48px; color: black;  padding:15px;">
            <i class="fa fa-github" aria-hidden="true"></i>
          </span>
        </a>
      </div>
    </footer>
    <style>
    #college-title {
        margin-top: 10px;
        width: 1430px;
        background-color: #c5d6e5;
        padding: 10px;
        width: 100%;
        }

        #college-name {
          color: #e71919;
          font-size: 3.2rem;
          line-height: 2rem;
          animation: mymove 10s infinite;
          position: relative;
          text-shadow: 2px 2px 4px #000000;
        }
        @keyframes mymove {
          from {left: 1200px;;}
          to {left: 75px;;}
        }
    .bs-example {
          background-color: #e9ecef;
          margin-top: 5px;
        }
      #name {
          font-family: 'Frank Ruhl Libre', serif;
          text-align : right;
          margin : 15px 15px 15px 1100px;
          font-size : 20px;
          font-weight : bold;
          border: solid 5px red;
          background-color: #ffe5e5;
          padding: 10px;
          border-radius: 10px;
        }
      .teacher-heading {
        text-align: center;
        font-weight: bold;
        font-size: 50px;
        background-color: purple;
        color: white;
        margin: 20px 560px;
        border-radius: 100%;
        padding: 5px;
      }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 2px solid #000000;
        text-align: center;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        #id {
            text-align:center;
        }
        .footer{
          text-align: center;
          margin: 20px 20px 0px 20px;
          padding: 15px 15px 0px 20px;
          backdrop-filter: contrast(0.5);
        }
    </style>
</body>


</html>
