<?php 

    /* 
Question 01:
Let’s make a result grade calculator…
Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.
Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 
From this given formula, you will get a mark. Show the Grade message by the mark.

A+ = 80 - 100 
A   = 70 - 79
A-  = 60 - 69
B   = 50 - 59
C   = 40 - 49
F   = 01 - 39 

Firstly you have to calculate the average mark of Rishita.
Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range.
    */



    $subjectA       = 75;
    $subjectB       = 80;
    $subjectC       = 65;
    $subjectD       = 90;

    $totalMarks     = $subjectA + $subjectB + $subjectC + $subjectD;
    $totalSubj      = 4;
    $avgMarks       = $totalMarks / $totalSubj;

    if ($avgMarks >= 80 ) {
        echo "You got A+";

    } else if ($avgMarks >= 70 ) {
        echo "You got A";

    } else if ($avgMarks >= 60 ){
        echo "You got A-";

    } else if ($avgMarks >= 50){
          echo "You got B";

    } else if ($avgMarks >= 40){
        echo "You got C";

    } else{
        echo "You got F!";
    }

    //Output: You got A

?>