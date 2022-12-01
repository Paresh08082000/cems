<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login_student.php");
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300&display=swap" rel="stylesheet">
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
          <a href="https://learner.pceterp.in/"  target="_blank" class="nav-item nav-link">ERP Login</a>
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
    <div class="welcome">
    Welcome <br> 
    <?php echo "<em><div id='name'>". $_SESSION['fName']." ". $_SESSION['lName']. "</div></em>";?>
    </div>
  </div>
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
      .welcome {
        font-family: 'Passion One', cursive;
        margin: auto;
        padding: 30px;
        font-size:120px;
        text-align:center;
        font-weight:bold;
      }
      .welcome #name {
        font-family: 'Frank Ruhl Libre', serif;
        padding : 10px;
        font-size : 40px;
        color : blue;
      }
      .contact-us #contact-heading{
          text-align: center;
          font-weight: bolder;
          font-size: 50px;
        }
        .contact-us{
          text-align: center;
          margin: 70px;
          padding: 20px
        }
        .social-icon {
          margin: 80px 40px;
        }
        .contact-us .social-icon img{
            transform: scale(0.5);
            transition:0.5s;
            width: 100px;
            height: 100px;
        }
        .contact-us .social-icon img:hover{
          transform: scale(0.5) translateY(-25px);
        }
        .contact-us p{
          font-size:35px;
          margin:15px;
          font-weight:bold;
        }
        .footer{
          text-align: center;
          margin: 20px 20px 0px 20px;
          padding: 15px 15px 0px 20px;
          backdrop-filter: contrast(0.5);
        }
    </style>
    <hr>
    <div class="contact-us">
      <p id="contact-heading">Contact Us</p>
      <a class="social-icon" href="https://www.facebook.com/PCCOENigadi/" target="_blank">
        <img src="http://www.pccoepune.com/images/fb.png" alt="fb_pccoe">
      </a>
      <a class="social-icon" href="https://www.linkedin.com/company/pccoe-pune?trk=biz-companies-cym" target="_blank">
        <img alt="Pimpri Chinchwad college of engineering is the best engg college in Pune." class="marginleft10"
          src="http://www.pccoepune.com/images/Linkedin-icon.png">
      </a>
      <a class="social-icon" href="https://twitter.com/pccoe_pune" target="_blank">
        <img alt="PCCOE is the best Engineering Institute in Pimpri Chinchwad Pune." class="marginleft10"
          src="http://www.pccoepune.com/images/twitter.png">
      </a>
      <a class="social-icon" href="https://www.instagram.com/pccoepune/" target="_blank">
        <img alt="PCCOE, the famous Engineering College in Pune provides the placement in the most reputed companies."
          class="marginleft10" src="http://www.pccoepune.com/images/insta-icon.png" width="32px" height="31px">
      </a>
      <a class="social-icon" href="https://www.youtube.com/channel/UCQiPDETOiteTLmAvvPk1WjA" target="_blank">
        <img alt="PCCOE, best engineering college in Pune offers good courses with good placement." class="marginleft10"
          src="http://www.pccoepune.com/images/youtube-icon.png" width="32px" height="31px">
      </a>
      <p style="color:black">PCCOE, Pune </p>
    </div>
  <hr>
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
</body>


</html>
