<?php
     echo "<center><h1>ZEZAR IAN FERNANDO</center></h1><br>";
     
     echo"<br>";
     $num1 = "<center>SIMPLE GRADING SYSTEM</center>";
     
     echo $num1;
     echo"<br>";
     echo"<br>";
   
     echo"<br>";
  
     echo"<br>";
     echo"<br>";

     $marks = 156;
     if ($marks>100)
     {
         $grade = "Wrong Input!";
     }
     else if ($marks>=98)
     {
         $grade = "1.00 Excellent!";
     }
     else if($marks>=95)
     {
         $grade = "1.25 Superior!";
     }
     else if($marks>=92)
     {
         $grade = "1.50 Very Good!";
     }
     else if($marks>=89)
     {
         $grade = "1.75 Good!";
     }
     else if($marks>=86)
     {
         $grade = "2.00 Very Satisfactory!";
     }
     else if($marks>=83)
     {
         $grade = "2.25 Satisfactory!";
     }
     else if($marks>=80)
     {
         $grade = "2.50 Average!";
     }
     else if($marks>=77)
     {
         $grade = "2.75 Fair!";
     }
     else if($marks>=75)
     {
         $grade = "3.00 Passed!";
     }
     else
     {
         $grade = "Fail!";
     }
     
     echo "<center>Course grade: $marks</center>";
     echo "<center> $grade </center>";

?>