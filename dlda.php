<?php
//dlda1 no of students appeared
  $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dlda1 >=0 AND dlda1 <=20";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $dlda1_A= $row['count'];
} else
    $dlda1_A="0";
  //dlda1 no of students absent
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dlda1 ='NULL'";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $dlda1_B= $row['count'];
} else
    $dlda1_B="0";

    
    //dlda1 no of students passed
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dlda1 >=8";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $dlda1_C= $row['count'];
} else
    $dlda1_C="0";
    

 // dlda1 no of students between 60% - 70%
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dlda1 >=12 AND dlda1 <=14";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $dlda1_D= $row['count'];
} else
    $dlda1_D="0";

    //dlda1 no of students above 70%
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dlda1 >14 ";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    
   if($row = mysql_fetch_assoc($result)) 
       $dlda1_E= $row['count'];
} else
    $dlda1_E="0";
    
    //dlda1 u-percent of students passed
    $dlda1_F=($dlda1_C/$dlda1_A)*100;
    //dlda1 -percent of students between 60 to 70 percent
    $dlda1_G=($dlda1_D/$dlda1_A)*100;
    //dlda1 u-percent of students above 70 percent
    $dlda1_H=($dlda1_E/$dlda1_A)*100;
    
?>