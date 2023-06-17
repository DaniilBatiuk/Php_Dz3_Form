<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="width: 100%; height: 100vh; background-color: antiquewhite;display: flex;justify-content: center;align-items: center; flex-direction: column;">
    <table>
        <tr>
            <th>Модель</th>
            <th>Производитель</th>
            <th>Цена</th>
        </tr>
        <?
        if (file_exists('cars.txt')) {
            $cars = file('cars.txt', FILE_IGNORE_NEW_LINES);
            foreach ($cars as $car) {
                $carData = explode(':', $car);
                echo "<tr>";
                echo "<td>{$carData[0]}</td>";
                echo "<td>{$carData[1]}</td>";
                echo "<td>{$carData[2]}</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>