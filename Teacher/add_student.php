<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Registration.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Add student</title>
</head>
<?php

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $roll = $_POST['roll'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $branch = $_POST['Branch'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];

        // Connecting to the Database
        $servername = "172.31.91.110";
        $username = "root";
        $password = "root";
        $database = "students";

         // Create a connection
         $conn = mysqli_connect($servername, $username, $password, $database);

         // Die if connection was not successful
         if (!$conn){
             die("Sorry we failed to connect: ". mysqli_connect_error());
         }
         else{
           // Submit these to a database
           // Sql query to be executed
             $sql = "INSERT INTO `student` (`roll`, `fName`, `lName`, `branch`, `gender`, `email`, `mobile`, `dob`, `address`) VALUES ('$roll', '$fName', '$lName', '$branch', '$gender', '$email', '$mobile', '$dob', '$address')";
            $result = mysqli_query($conn, $sql);

        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Student has been Added successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          </div>';
        }
        else{
        //     echo "The Student was not Added successfully because of this error ---> ". mysqli_error($conn);
        //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //   <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvinience caused!
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">×</span>
        //   </button>
        // </div>';
        }

      }

    }
  ?>

<body>
<div id="college-title">
    <h1 id="college-name">
      <img src="http://www.pccoepune.com/images/PCET Logo 2_new.png" alt="PCET Trust Logo" style="width:75px; height:75px; margin:0px 10px">
      <b>Pimpri Chinchwad College of Engineering, Pune</b>
      <img src="http://www.pccoepune.com/images/PCET Logo 2_new.png" alt="PCET Trust Logo" style="width:75px; height:75px; margin:0px 10px">
    </h1>
  </div>
<img class="bg" src="../bg.jpg" alt="background_img">
  <div class="wrapper">
    <div class="title">
      Student Form
    </div>

    <form class="" action="add_student.php" method="post">
      <div class="form">
      <div class="inputfield">
          <label>Roll No.</label>
          <input type="number" name="roll" class="input" >
        </div>
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" name="fName" class="input" >
        </div>
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" name="lName" class="input" >
        </div>
        <div class="inputfield">
          <label>Branch: </label>
          <div class="custom_select">
            <select class="input-field" id="Branch" name="Branch" >
              <option value="">Select</option>
              <option value="Computer">Computer</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Entc">Entc</option>
              <option value="Mechanical">Mechanical</option>
              <option value="Civil">Civil</option>
              <option value="Civil">None</option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select" >
            <select name="gender">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </div>
        <div class="inputfield" >
          <label>Email Address</label>
          <input type="email" name="email" class="input">
        </div>
        <div class="inputfield">
          <label>Mobile Number</label>
          <input type="number" class="input" name="mobile" >
        </div>
        <div class="inputfield">
          <label>Date of Birth</label>
          <input type="Date" class="input" name="dob" >
        </div>
        <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address" ></textarea>
        </div>
        <div class="inputfield">
          <input type="submit" value="ADD" class="btn" onclick="alert('student added succesfully')">
        </div>
        <div class="inputfield">
          <input type="button" value="Go Back" onclick="history.back()" class="btn">
        </div>
    </form>

  </body>
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
          font-size: 3rem;
          line-height: 2rem;
          animation: mymove 10s infinite;
          position: relative;
          text-shadow: 2px 2px 4px #000000;
        }
        @keyframes mymove {
          from {left: 1200px;;}
          to {left: 75px;;}
        }
  </style>

</html>
