<!-- 2 - you have a variable that contains any digit from 0 to 9. write a script to display the   	
  	english equivalent of this number.
For example:
digit = 3 → three
 -->


<?php
$digit=9;

switch ($digit) {
    case 0:
        echo "zero";
        break;
    
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    case 4:
        echo "four";
        break;
    case 5:
        echo "five";
        break;
    case 6:
        echo "six";
        break;
    case 7:
        echo "seveen";
        break;
    case 8:
        echo "height";
        break;
    case 9:
        echo "nine";
        break;
                                                                                                                                                                                    
    default:
           echo "enter valid number from 0:9";
        break;
}