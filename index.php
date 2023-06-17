<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="width: 100%; height: 100vh; background-color: antiquewhite;display: flex;justify-content: center;align-items: center; flex-direction: column;">
    <h1>Car Management System</h1>
    <ul>
        <li><a href="addCar.php">Add</a></li>
        <li><a href="showCars.php">Show</a></li>
    </ul>

    <?
    $carCount = 0;
    if (file_exists('cars.txt')) {
        $cars = file('cars.txt', FILE_IGNORE_NEW_LINES);
        $carCount = count($cars);
    }

    echo "<p>Количество автомобилей: $carCount</p>";
    ?>
</body>

</html>