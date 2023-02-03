<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="header-container" class="col-12 col-s-12">
  <div class="col-4 col-s-4 space"></div>
  <div id="header" class="col-4 col-s-4">
    <h1 id="title">Student Strandtest Form</h1>
    <p id="description">Please fill out the survey to complete your application for S.Y. 2022-2023.</p>
  </div>
  <div class="col-4 col-s-4 space"></div>
</div>
<div class="col-3 col-s-3 space"></div>
<div id="form-container" class="col-6 col-s-6">
  <?php if($_GET['view'] == 'Q1'){ ?>
  <form id="survey-form" action="#" method="POST">
    <label id="name-label" for="name"><h3>Name</h3></label>
    <input id="name" type="text" name="fname" placeholder="Enter your name" required>
    <input id="name" type="hidden" name="code" value="<?php echo rand(666666,999999); ?>" required>
    <p id="submission">
    <input id="submit" name="submit" type="submit" value="PROCEED">
    </p>
  </form>
  <?php if(isset($_POST['submit'])){ ?>
  <?php   
   include_once('../connection/connection.php'); 
   $name = $_POST['fname'];
   $code = $_POST['code'];
   $subject_interest = 0;
   $activity = 0; 
   $working = 0;
   $mantra = 0;
   $free_time = 0;
   $problem = 0;
   $describe  = 0;
  
   mysqli_query($con,"INSERT INTO `strand_question` (`name`, `subject_interest`, `activity`, `working`, `mantra`, `free_time`, `problem`, `describe`, `code`) VALUES('$name', '$subject_interest', '$activity', '$working', '$mantra', '$free_time', '$problem', '$describe', '$code')");

   header('Location:index.php?view=Q2&name'.$name.'&code='.$code)

   ?> 
  <?php } ?> 
  <?php } else if($_GET['view'] == 'Q2'){  ?>
  <form id="survey-form" action="#" method="POST">
  <input id="name" type="hidden" name="code" value="<?php echo $_GET['code']; ?>" required>
  <table id="radio-table">
      <tr>
        <th colspan="2"><h3>A Subject That I'm Interested In Answers, please choose ?</h3></th>
      </tr>
      <tr>
        <td><input type="radio" name="subject_interest" value="Music, Arts, Physical Education, and Health"></td><td>Music, Arts, Physical Education, and Health</td>
      </tr>
      <tr>
        <td><input type="radio" name="subject_interest" value="Mathematics (Business)"></td><td>Mathematics (Business)</td>
      </tr>
      <tr>
        <td><input type="radio" name="subject_interest" value="Contemporary Issues"></td><td>Contemporary Issues</td>
      </tr>
      <tr>
        <td><input type="radio" name="subject_interest" value="Biology"></td><td>Biology</td>
      </tr>
      <tr>
        <td><input type="radio" name="subject_interest" value="ICT"></td><td>ICT</td>
      </tr>
    </table>
    <p id="submission">
    <input id="submit" name="q1" type="submit" value="PROCEED">
    </p>
   </form>
  <?php if(isset($_POST['q1'])){ ?>
  <?php   
   include_once('../connection/connection.php'); 
   $subject_interest = $_POST['subject_interest'];
   $code = $_POST['code'];
   
  
   mysqli_query($con,"UPDATE strand_question SET subject_interest = '$subject_interest' WHERE code = '$code'");

   header('Location:index.php?view=Q3&code='.$code);
 
   }
   ?>
    <?php } else if($_GET['view'] == 'Q3'){  ?>
   <form id="survey-form" action="#" method="POST">
  <input id="name" type="hidden" name="code" value="<?php echo $_GET['code']; ?>" required>
  <table id="radio-table">
      <tr>
        <th colspan="2"><h3>An Activity That I Enjoy The Most Answers, please choose 1</h3></th>
      </tr>
      <tr>
        <td><input type="radio" name="activity" value="Solving Math Problems"></td><td>Solving Math Problems</td>
      </tr>
      <tr>
        <td><input type="radio" name="activity" value="Composing Music"></td><td>Composing Music</td>
      </tr>
      <tr>
        <td><input type="radio" name="activity" value="Reading about Philosophy"></td><td>Reading about Philosophy</td>
      </tr>
      <tr>
        <td><input type="radio" name="activity" value="Making Crafts"></td><td>Making Crafts</td>
      </tr>
      <tr>
        <td><input type="radio" name="activity" value="Studying"></td><td>Studying</td>
      </tr>
    </table>
    <p id="submission">
    <input id="submit" name="q1" type="submit" value="PROCEED">
    </p>
   </form>
  <?php if(isset($_POST['q1'])){ ?>
  <?php   
   include_once('../connection/connection.php'); 
   $activity = $_POST['activity'];
   $code = $_POST['code'];
   
  
   mysqli_query($con,"UPDATE strand_question SET activity = '$activity' WHERE code = '$code'");

   header('Location:index.php?view=Q4&code='.$code);
 
   }
   ?>

  <?php } else if($_GET['view'] == 'Q4'){  ?>
   <form id="survey-form" action="#" method="POST">
  <input id="name" type="hidden" name="code" value="<?php echo $_GET['code']; ?>" required>
  <table id="radio-table">
      <tr>
        <th colspan="2"><h3>Working Environment I Dream Of Answers, please choose 1</h3></th>
      </tr>
      <tr>
        <td><input type="radio" name="working" value="Data -Driven Environment"></td><td>Data -Driven Environment</td>
      </tr>
      <tr>
        <td><input type="radio" name="working" value="Creative Environment"></td><td>Creative Environment</td>
      </tr>
      <tr>
        <td><input type="radio" name="working" value="An Environment of Different Cultures"></td><td>An Environment of Different Cultures</td>
      </tr>
      <tr>
        <td><input type="radio" name="working" value="An Environment With a Mix of Everything"></td><td>An Environment With a Mix of Everything</td>
      </tr>
      <tr>
        <td><input type="radio" name="working" value="Investigative Environment"></td><td>Investigative Environment</td>
      </tr>
      <tr>
        <td><input type="radio" name="working" value="Crafty Environment"></td><td>Crafty Environment</td>
      </tr>
    </table>
    <p id="submission">
    <input id="submit" name="q1" type="submit" value="PROCEED">
    </p>
   </form>
  <?php if(isset($_POST['q1'])){ ?>
  <?php   
   include_once('../connection/connection.php'); 
   $working = $_POST['working'];
   $code = $_POST['code'];
   
  
   mysqli_query($con,"UPDATE strand_question SET working = '$working' WHERE code = '$code'");

   header('Location:index.php?view=Q5&code='.$code);
 
   }
   ?>


     <?php } else if($_GET['view'] == 'Q5'){  ?>
   <form id="survey-form" action="#" method="POST">
  <input id="name" type="hidden" name="code" value="<?php echo $_GET['code']; ?>" required>
  <table id="radio-table">
      <tr>
        <th colspan="2"><h3>What's your mantra? Answers, please choose 1</h3></th>
      </tr>
      <tr>
        <td><input type="radio" name="mantra" value="Every problem will be healed with the touch of a melody"></td><td>Every problem will be healed with the touch of a melody</td>
      </tr>
      <tr>
        <td><input type="radio" name="mantra" value="Of course we can fix it"></td><td>Of course we can fix it</td>
      </tr>
      <tr>
        <td><input type="radio" name="mantra" value="The biggest risk is not taking any"></td><td>The biggest risk is not taking any</td>
      </tr>
      <tr>
        <td><input type="radio" name="mantra" value="Live with a system, calculate your actions"></td><td>Live with a system, calculate your actions</td>
      </tr>
      <tr>
        <td><input type="radio" name="mantra" value="There is always a wide range of options to choose from"></td><td>There is always a wide range of options to choose from</td>
      </tr>
    </table>
    <p id="submission">
    <input id="submit" name="q1" type="submit" value="PROCEED">
    </p>
   </form>
  <?php if(isset($_POST['q1'])){ ?>
  <?php   
   include_once('../connection/connection.php'); 
   $mantra = $_POST['mantra'];
   $code = $_POST['code'];
   
  
   mysqli_query($con,"UPDATE strand_question SET mantra = '$mantra' WHERE code = '$code'");

   header('Location:index.php?view=Q6&code='.$code);
 
   }
   ?>


    <?php } else if($_GET['view'] == 'Q6'){  ?>
   <form id="survey-form" action="#" method="POST">
  <input id="name" type="hidden" name="code" value="<?php echo $_GET['code']; ?>" required>
  <table id="radio-table">
      <tr>
        <th colspan="2"><h3>Things I do during my free time Answers, please choose 1</h3></th>
      </tr>
      <tr>
        <td><input type="radio" name="free_time" value="Solving puzzles"></td><td>Solving puzzles</td>
      </tr>
      <tr>
        <td><input type="radio" name="free_time" value="Selling Things Online"></td><td>Selling Things Online</td>
      </tr>
      <tr>
        <td><input type="radio" name="free_time" value="Playing Musical Instruments"></td><td>Playing Musical Instruments</td>
      </tr>
      <tr>
        <td><input type="radio" name="free_time" value="Fixing Things and Organizing My Stuff"></td><td>Fixing Things and Organizing My Stuff</td>
      </tr>
      <tr>
        <td><input type="radio" name="free_time" value="Trying Cool Science Experiments"></td><td>Trying Cool Science Experiments</td>
      </tr>
      <tr>
        <td><input type="radio" name="free_time" value="Reading Books"></td><td>Reading Books</td>
      </tr>
    </table>
    <p id="submission">
    <input id="submit" name="q1" type="submit" value="PROCEED">
    </p>
   </form>
  <?php if(isset($_POST['q1'])){ ?>
  <?php   
   include_once('../connection/connection.php'); 
   $free_time = $_POST['free_time'];
   $code = $_POST['code'];
   
  
   mysqli_query($con,"UPDATE strand_question SET free_time = '$free_time' WHERE code = '$code'");

   header('Location:index.php?view=Q7&code='.$code);
 
   }
   ?>



    <?php } else if($_GET['view'] == 'Q7'){  ?>
   <form id="survey-form" action="#" method="POST">
  <input id="name" type="hidden" name="code" value="<?php echo $_GET['code']; ?>" required>
  <table id="radio-table">
      <tr>
        <th colspan="2"><h3>When I encounter a problem, I usually Answers, please choose 1</h3></th>
      </tr>
      <tr>
        <td><input type="radio" name="problem" value="Analyze informations before making a move"></td><td>Analyze informations before making a move</td>
      </tr>
      <tr>
        <td><input type="radio" name="problem" value="Consider various opinions from other people"></td><td>Consider various opinions from other people</td>
      </tr>
      <tr>
        <td><input type="radio" name="problem" value="Stick to proven ways to solve the problem"></td><td>Stick to proven ways to solve the problem</td>
      </tr>
      <tr>
        <td><input type="radio" name="problem" value="Worry about how a certain action affects another person"></td><td>Worry about how a certain action affects another person</td>
      </tr>
      <tr>
        <td><input type="radio" name="problem" value="Think outside the box"></td><td>Think outside the box</td>
      </tr>
      
    </table>
    <p id="submission">
    <input id="submit" name="q1" type="submit" value="PROCEED">
    </p>
   </form>
  <?php if(isset($_POST['q1'])){ ?>
  <?php   
   include_once('../connection/connection.php'); 
   $problem = $_POST['problem'];
   $code = $_POST['code'];
   
  
   mysqli_query($con,"UPDATE strand_question SET problem = '$problem' WHERE code = '$code'");

   header('Location:index.php?view=Q8&code='.$code);
 
   }
   ?>
 
      <?php } else if($_GET['view'] == 'Q8'){  ?>
   <form id="survey-form" action="#" method="POST">
  <input id="name" type="hidden" name="code" value="<?php echo $_GET['code']; ?>" required>
  <table id="radio-table">
      <tr>
        <th colspan="2"><h3>People usually describe me as... Answers, please choose 1</h3></th>
      </tr>
      <tr>
        <td><input type="radio" name="describe" value="Creative"></td><td>Creative</td>
      </tr>
      <tr>
        <td><input type="radio" name="describe" value="Resourceful"></td><td>Resourceful</td>
      </tr>
      <tr>
        <td><input type="radio" name="describe" value="Analytical"></td><td>Analytical</td>
      </tr>
      <tr>
        <td><input type="radio" name="describe" value="Philosophical"></td><td>Philosophical</td>
      </tr>
      <tr>
        <td><input type="radio" name="describe" value="Collaborative"></td><td>Collaborative</td>
      </tr>
      <tr>
        <td><input type="radio" name="describe" value="Practical"></td><td>Practical</td>
      </tr>
      
    </table>
    <p id="submission">
    <input id="submit" name="q1" type="submit" value="PROCEED">
    </p>
   </form>
  <?php if(isset($_POST['q1'])){ ?>
  <?php   
   include_once('../connection/connection.php'); 
   $describe = $_POST['describe'];
   $code = $_POST['code'];
   
  
   mysqli_query($con,"UPDATE strand_question SET describe = '$describe' WHERE code = '$code'");

   header('Location:index.php?view=Q9&code='.$code);
 
   }
   ?>


    <?php } else if($_GET['view'] == 'Q9'){  ?>
   <form id="survey-form" action="#" method="POST">


        
        <?php 
 include_once('../connection/connection.php'); 
  
$result=mysqli_query($con, "select * from strand_question where code='".$_GET['code']."'");
$row=mysqli_fetch_array($result);

if($row['subject_interest'] == 'ICT') {
echo "Academic Track - Science, Technology, Engineering, and Math
You wish to play a key role in the sustained growth and stability of our economy, and also a critical component to helping the PH nation win the future. You're a critical thinker who might be part of the next generation of innovators. Innovation leads to new products and processes that sustain our country."; 
} else if ($row['subject_interest'] == 'Mathematics (Business)'){ 
echo "Academic Track- Accountancy, Business, and Management
You are a persuader who wants to take risks and want to influence others. You're one of those students who plans to take up business courses and accountancy. This track is perfect for those who are good in organizing and planning and for those who want to start a business in the future. It is important to enhance their skills and knowledge for their college life. In particular, you fit the likes of entrepreneurs.";
} else if ($row['subject_interest'] == 'Contemporary Issues') {
echo "Academic Track- Humanities and Social Sciences
If you are into comprehending behaviour of people and you want to improve your reading, writing, and speaking skills you have the right to choose HUMSS as your strand. You aspire to become a member of society who will be dealing with a lot of people and you're willing to promote civil rights to our fellow citizens. You can be part of the next generation of teachers, psychologists, lawyers, and etc."; 
} else { 
echo "Academic Track- General Academics
Are you uncertain or confused on what specific path you would want to take? GAS could be n option for you. What makes this good is that the courses offered here are encompassing; meaning in all fields. The things that one can learn in this can help your uncertain mind explore your possible college options. To simply put, this strand is for all courses in college.";
}


        ?>     
   </form>

  <?php } else { ?>

  <?php } ?>
</div>
<div class="col-3 col-s-3 space"></div>
<!-- partial -->
</body>
</html>
