<?php 
function day_of_week(int $day)
{
    if ($day ==1) 
    {
        return "Monday";
    }
    if ($day ==2) 
    {
        return "Tuesday";
    }
    if ($day ==3) 
    {
        return "Wednesday";
    }
    if ($day ==4) 
    {
        return "Thursday";
    }
    if ($day ==5) 
    {
        return "Friday";
    }
    if ($day ==6) 
    {
        return "Saturday";
    }
    if ($day ==7) 
    {
        return "Sunday";
    }
    else{
        return"invalid";
    }

}

$day=day_of_week(5);

echo"$day";

?>