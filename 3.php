<!-- 3-     write a script to display this shape:
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*
 -->

 <?php
// echo "* <br>";
// echo "*   * <br>";


$star="*";

for ($i=1; $i <=10; $i++) { 
    if($i==1)
    {
        echo "$star  <br>";
    }
    else if($i==2)
    {
        echo "$star $star  <br>";
    }
    else if($i==3)
    {
        echo "$star $star  $star <br>";
    }
    else if($i==4)
    {
        echo "$star $star  $star  $star<br>";
    }
    else if($i==5)
    {
        echo "$star $star  $star  $star $star<br>";
    }
    else if($i==6)
    {
        echo "$star $star  $star  $star  $star<br>";
    }
    else if($i==7)
    {
        echo "$star $star  $star  $star <br>";
    }
    else if($i==8)
    {
        echo "$star $star  $star <br>";
    }
    if($i==9)
    {
        echo "$star   $star <br>";
    }
    if($i==10)
    {
        echo "$star  <br>";
    }

}

