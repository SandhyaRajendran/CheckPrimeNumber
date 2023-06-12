<?php
//Write a PHP program to find if the given year is leap year or not.

    $my_year = readline("Enter a year : ");
   function year_check($my_year){
      if ($my_year % 400 == 0)
         print("It is a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   
   year_check($my_year);

   //other way

$year = 2032;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}


//other way


function isLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}  
//For testing  
for($year=1991; $year<2016; $year++)  
{  
    If (isLeap($year))  
    {  
        echo "$year : LEAP YEAR<br />\n";  
    }  
    else  
    {  
        echo "$year : Not leap year<br />\n";  
    }  
}  
?>  


Leap Year Program in Form

This program states whether a year is leap year or not by inserting a year in the form.

Example:
<html>  
<body>  
    <form method="post">  
        Enter the Year: <input type="text" name="year">  
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html>  

<?php   
    if($_POST)  
    {     
        //get the year  
        $year = $_POST['year'];   
        //check if entered value is a number  
        if(!is_numeric($year))  
        {  
            echo "Strings not allowed, Input should be a number";  
            return;  
        }   
        //multiple conditions to check the leap year  
        if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )  
        {  
            echo "$year is a Leap Year";    
        }  
        else  
        {  
            echo "$year is not a Leap Year";    
        }  
    }   
?>  

