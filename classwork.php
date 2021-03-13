<!DOCTYPE html>
<html>
<body>
<?php
echo "Q1. PHP is fun, but not without effort.<br>";
echo "Q2. ";
    if(strpos("I am    not    only fine, but;    super fine", "fine")){
        echo "true";
    }
    else{
        echo "false";
    }
echo "<br> Q3. ", strlen("What’s next after PHP?");
echo "<br> Q4. ", str_word_count("What’s next after PHP?");
echo "<br> Q5. ", str_replace("boring","interesting","Today is so boring.");
echo "<br> Q6. ";
$num = 88;
    if ($num>=80){
        echo "Yes, feeling    SUPER";
    }
    elseif ($num<80 && $num>=60){
        echo "It’s    ok    I    guess";
    }
    else{
        echo "Man, I need to put in    more effort";
    }
echo "<br> Q7. ";
for ($i=2; $i<=100; $i+=2)
	
{
  	  
echo $i." ";
	
} 
echo "<br> Q8. ";
$even=array("2","4","6","8","10");
$odd=array("1","3","5","7","9");
print_r(array_merge($even,$odd));
echo "<br> Q9. ";
$students = array(
    array(
        "Name: " => "Prabesh Giari",
        "Address: " => "Baneshwor",
        "Age: " => "20",
        "Email: " => "aprabesh65@gmail.com"
    ),

    array(
        "Name" => "Srijan Panta",
        "Address" => "Buddhanagar",
        "Age: " => "20",
        "Email" => "srijan@gmail.com"
    ),

    array(
        "Name" => "Surakshya Bhandari",
        "Address" => "Butwal",
        "Age: " => "20",
        "Email" => "sbjhandari@gmail.com"
    ),

    array(
        "Name" => "Lee Ji Eun",
        "Address" => "Korea",
        "Age: " => "22",
        "Email" => "jieun@gmail.com"
    ),
    array(
        "Name" => "Cole Sprouse",
        "Address" => "France",
        "Age: " => "23",
        "Email" => "csprouse@gmail.com"
    ),
    array(
        "Name" => "Jackson Wang",
        "Address" => "China",
        "Age: " => "23",
        "Email" => "jwang@gmail.com"
    )
    );
    foreach($students as $student){
        foreach($student as $key =>$value){
            echo "$key = $value, ";
        }
        echo "<br>";
    }
echo "Q10. ";
?>
</body>
</html>