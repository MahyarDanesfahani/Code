<form method="POST">
    <input type="text" age="userage">
    <button type="submit">Send</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["userage"];

    if (is_numeric($age)) {
        if ($age >= 18) {
            echo "You are an adult.";
        } else {
            echo "You are a minor.";
        }
    } else {
        echo "Please enter a valid number.";
    }
}
?>