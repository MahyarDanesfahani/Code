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

    echo $num1 + $num2; // جمع
    echo $num1 - $num2; // تفریق    
    echo $num1 * $num2; // ضرب
    echo $num1 / $num2; // تقسیم
    echo $num1 % $num2; //  باقیمانده
    echo $num1 ** 2; // توان    
    var_dump($num1 == $num2); // مقایسه مساوی
    var_dump($num1 != $num2); // مقایسه نابرابر
    var_dump($num1 > $num2); // بزرگتر
    var_dump($num1 < $num2); // کوچکتر    
    
    
    
    
    
    
    ?>
</body>

</html>