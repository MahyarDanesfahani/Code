<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //  echo "Hello, World!";
    $name = 'mahyar';
    $age= 21;
    echo 'hi' . $name . ' you are ' . $age . ' years old';
    var_dump($name);
    
    $cameleCase=''; 
    $snake_case='';
    $pascalCase='';
    
    //String
    $str1 = "Hello";
    var_dump($str1);
    $str2 =null;
    var_dump($str2);
    //int
    $number1 = 123;
    var_dump($number1);
    //float
    $float1 = 3.14;
    var_dump($float1);
    //boolean
    $bool1 = true;
    var_dump($bool1);
    //array
    $color=array("red", "green", "blue");
    var_dump($color);
    
    //function
    function greet($name) {
        return "Hello, " . $name . "!";
    }
    echo greet("Mahyar");
    //function String
    
    // echo "<br>" ; 
    // echo strlen($str1); تعداد حروف
    // echo str_word_count($str1); تعداد کلمات
    // echo strrev($str1); برعکس کردن رشته
    // echo strpos($str1, "lo"); نشان دادن موقعیت حرف یا کلمه در رشته
    // echo str_replace("Hello", "Hi", $str1); جایگزین کردن یک کلمه با کلمه دیگر در رشته
    // $str3 = 'i love php';
    // echo str_repeat($str3, 2) .' ';
    // echo chop($str3,'php '); // حذف کاراکترهای اضافی از انتهای رشته
    // echo substr($str3, 3, 6); // استخراج بخشی از رشته
    // echo strtoupper($str3); // تبدیل رشته به حروف بزرگ
    // echo strtolower($str3); // تبدیل رشته به حروف کوچک
    // echo substr_count($str3, 'o'); // شمارش تعداد وقوع یک زیررشته در رشته
    // echo trim($str3); // حذف فضاهای اضافی از ابتدا و انتهای رشته    
    // echo strcmp($str3, 'i love php'); // مقایسه دو رشته (0 اگر برابر باشند، عدد منفی اگر رشته اول کمتر باشد، عدد مثبت اگر رشته اول بیشتر باشد)
    // echo strstr($str3, 'love'); // پیدا کردن اولین وقوع یک زیررشته در رشته و بازگرداندن آن از آن نقطه به بعد
    // var_dump(explode(' ', $str3)); // تقسیم رشته به آرایه با استفاده از جداکننده
    // echo chunk_split($str3, 5, '-'); // تقسیم رشته به بخش‌های کوچکتر با طول مشخص و جداکننده
        
    // operators
    $num1 = 12;
    $num2 = 23;

    // echo $num1 + $num2; // جمع
    // echo $num1 - $num2; // تفریق    
    // echo $num1 * $num2; // ضرب
    // echo $num1 / $num2; // تقسیم
    // echo $num1 % $num2; //  باقیمانده
    // echo $num1 ** 2; // توان    
    // var_dump($num1 == $num2); // مقایسه مساوی
    // var_dump($num1 != $num2); // مقایسه نابرابر
    // var_dump($num1 > $num2); // بزرگتر
    // var_dump($num1 < $num2); // کوچکتر    
    // echo $num1++; // افزایش بعد از استفاده
    // echo ++$num1; // افزایش قبل از استفاده
    
    // if
    // if($num1 > $num2) {
    //     echo "num1 is greater than num2";
    // } elseif($num1 < $num2) {
    //     echo "num1 is less than num2";
    // } else {
    //     echo "num1 is equal to num2";
    // }

    // // or , || , and , &&
    // if($num1==10 or $num2== 10) {
    //     echo "at least one number is 10";
    // } else {
    //     echo "neither number is 10";
    // }
    // if($num1==10 && $num2== 10) {
    //     echo "both numbers are 10";
    // } else {
    //     echo "neither number is 10";
    // }
    
    // for , switch
    switch($num1) {
        case 10:
            echo "num1 is 10";
            break;
        case 20:
            echo "num1 is 20";
            break;
        default:
            echo "num1 is neither 10 nor 20";
    }
    
    for($i = 0; $i < $num2; $i++){
        echo $i . ' ';
    }
    echo '<br>';
    while($num1 < $num2) {
        echo $num1 . ' ';
        $num1++;
    }
    
    do {
        echo $num1 . ' ';
        $num1++;
    } while($num1 < $num2);
    echo '<br>';
    foreach($color as $c) {
        echo $c . ' ';
        echo '<br>';    
    }
    $age=array("mahyar"=>21, "ali"=>25, "sara"=>19);
    foreach($age as $name => $a) {  
    echo $name . " is " . $a . " years old.<br>";
    echo "<br>";    
    }
        

    //functions
        
    function nameFrindes(string $name){
        echo $name . "Is here";
    }
    function sum(int $x,int $y){
        return $x + $y;
    }
    echo sum(5, 10);
    
    
    ?>
</body>

</html>