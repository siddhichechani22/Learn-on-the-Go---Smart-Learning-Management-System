<?php
//maths1 no of students appeared
  $sql="SELECT count(*) as count FROM student.stud_termtest WHERE maths1 >=0 AND maths1 <=20";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $maths1_A= $row['count'];
} else
    $maths1_A="0";
  //maths1 no of students absent
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE maths1 ='NULL'";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $maths1_B= $row['count'];
} else
    $maths1_B="0";

    
    //maths1 no of students passed
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE maths1 >=8";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $maths1_C= $row['count'];
} else
    $maths1_C="0";
    

 // maths1 no of students between 60% - 70%
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE maths1 >=12 AND maths1 <=14";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $maths1_D= $row['count'];
} else
    $maths1_D="0";

    //maths1 no of students above 70%
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE maths1 >14 ";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    
   if($row = mysql_fetch_assoc($result)) 
       $maths1_E= $row['count'];
} else
    $maths1_E="0";
    
    //maths1 u-percent of students passed
    $maths1_F=($maths1_C/$maths1_A)*100;
    //maths1 -percent of students between 60 to 70 percent
    $maths1_G=($maths1_D/$maths1_A)*100;
    //maths1 u-percent of students above 70 percent
    $maths1_H=($maths1_E/$maths1_A)*100;
    
?>