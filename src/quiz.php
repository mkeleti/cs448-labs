<html>

<head>
   <meta charset="utf-8" />
   <title>Multiplication Table</title>
   <link rel="stylesheet" href="styles.css" />
   <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
   <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="password.js"></script>
</head>

<body>
   <div class="text-start">
      <a href="../index.html">
         <button type="button" class="btn btn-lg btn-secondary">Home</button>
      </a>
   </div>
   <div class="container text-center">
      <h1 class="text-center h1">Quiz Results</h1>
      <div class="card">
         <div class="card-body text-start">
            <?php

            $kancap = $_POST["kancap"];
            $volley = $_POST["volley"];
            $galaxy = $_POST["galaxy"];
            $life = $_POST["life"];
            $fear = $_POST["fear"];

            $correct_1 = "Topeka";
            $correct_2 = "Wilson";
            $correct_3 = "Milky Way";
            $correct_4 = "42";
            $correct_5 = "Fear is the mind-killer.";

            echo "<i>What is the Capitol of Kansas?</i> <br><br>";
            echo "&emsp; You Answered: " . $kancap . "<br>";
            echo "&emsp; Correct Answer: " . $correct_1 . "<br><br>";
            echo "<i>What was the name of the volleyball in Castaway starring tom hanks?</i> <br><br>";
            echo "&emsp; You Answered: " . $volley . "<br>";
            echo "&emsp; Correct Answer: " . $correct_2 . "<br><br>";
            echo "<i>What galaxy do we live in?</i> <br><br>";
            echo "&emsp; You Answered: " . $galaxy . "<br>";
            echo "&emsp; Correct Answer: " . $correct_3 . "<br><br>";
            echo "<i>What is the meaning of life?</i> <br><br>";
            echo "&emsp; You Answered: " . $life . "<br>";
            echo "&emsp; Correct Answer: " . $correct_4 . "<br><br>";
            echo "<i>What is fear?</i> <br><br>";
            echo "&emsp; You Answered: " . $fear . "<br>";
            echo "&emsp; Correct Answer: " . $correct_5 . "<br>";

            $grade = 0;
            if ($correct_1 == $kancap) {
               $grade += 20;
            }
            if ($correct_2 == $volley) {
               $grade += 20;
            }
            if ($correct_3 == $galaxy) {
               $grade += 20;
            }
            if ($correct_4 == $life) {
               $grade += 20;
            }
            if ($correct_5 == $fear) {
               $grade += 20;
            }
            echo "<br><br><b>Your Score: " . $grade . "%";
            ?>
         </div>
      </div>
   </div>