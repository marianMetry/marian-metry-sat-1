<!-- 7-     trace the code & discuss of each statement of value of x and y
$x = 3 ; $y=$x++;
$y+= ++$x;
 
if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
 }
else if ($y == 8){
 	$x--;
 	echo $x ."<br>";
	}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
else { 
	$x= 0;
	echo $x ."<br>"; }
 -->

 <?php
 $x = 3 ; $y=$x++;   //$x=3  // $y=4
//  echo "$x <br>";    //$x=3 
//  echo "$y <br>";    // $y=4 


$y+= ++$x;    //$x=5  // $y=8
//  echo "$x <br>";    //$x=5 
//  echo "$y <br>";    // $y=8 

if ($y == 7) {          
    $x++;
    echo $x ."<br>";
}
else if ($y == 8){        //>==$x=4   $y=8
    $x--;
    echo $x ."<br>";
   }
else if ($y == 9) {
   $x+=2;
   echo $x ."<br>";
}
else { 
   $x= 0;
   echo $x ."<br>"; }
