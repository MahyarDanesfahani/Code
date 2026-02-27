<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    // $a = 12;
    // $b = 22;
    // echo $a + $b; 

    // if($a >= 10){
    //     echo "Big";
    // }else{
    //     echo "Small";
    // }

    for ($i = 0; $i <= 20; $i++) {
        if($i % 2 ==0){
            echo "".$i."";
        }
    }

    $numbers=array(1, 2, 3, 4, 5);
    $sum=0;
    foreach($numbers as $number){
        echo "".$number."";
        $sum += $number;
    }
    echo $sum;

    $students = [
    ["name" => "Ali", "grade" => 18],
    ["name" => "Sara", "grade" => 15],
    ["name" => "Reza", "grade" => 19]
    ];
    $mid_class=0;
    foreach($students as $student){
        echo "Name: " . $student["name"] . "<br>";
        $mid_class += $student["grade"];
    }
    echo $mid_class/count($students);
    
    
    ?>
</body>

</html>