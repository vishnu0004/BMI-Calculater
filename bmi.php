<form action="#" method="post">
    <input type="number" name="height" placeholder="enter height">
    <input type="number" name="weight" placeholder="enter weight">
    <input type="submit" name="submit" value="calculate">
</form>

<?php 

if(isset($_POST['submit'])){
    $height = $_POST['height'];
    $weight = $_POST['weight']/100;
    $bmi = $weight / ($height * $height);

    if ($bmi < 18.5) {
        $category = "Underweight";
    } elseif ($bmi < 24.9) {
        $category = "Normal weight";
    } elseif ($bmi < 29.9) {
        $category = "Overweight";
    } else {
        $category = "Obese";
    }

    echo "<div class='result'>Your BMI is: <strong>$bmi</strong> ($category)</div>";

}
?>
