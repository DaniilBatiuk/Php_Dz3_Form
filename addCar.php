<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="width: 100%; height: 100vh; background-color: antiquewhite;display: flex;justify-content: center;align-items: center; flex-direction: column;">
    <div>
        <form method="POST">
            <label for="model">Модель:</label><br />
            <input type="text" name="model" required><br>

            <label for="manufacturer">Производитель:</label><br />
            <input type="text" name="manufacturer" required><br>

            <label for="price">Цена:</label><br />
            <input type="number" name="price" required><br>

            <input type="submit" value="Добавить автомобиль" style="width: 100%; margin-top:10px; margin-bottom:10px; height:30px;">
        </form>
    </div>
    <?
    function addCarToFile($carData)
    {
        $carExists = false;
        $carString = implode(':', $carData);

        if (file_exists('cars.txt')) {
            $cars = file('cars.txt', FILE_IGNORE_NEW_LINES);
            foreach ($cars as $car) {
                if ($car == $carString) {
                    $carExists = true;
                    break;
                }
            }
        }

        if (!$carExists) {
            file_put_contents('cars.txt', $carString . PHP_EOL, FILE_APPEND);
        }

        return $carExists;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $carModel = $_POST['model'];
        $carManufacturer = $_POST['manufacturer'];
        $carPrice = $_POST['price'];

        $carData = array($carModel, $carManufacturer, $carPrice);

        $carExists = addCarToFile($carData);

        if ($carExists) {
            echo "Автомобиль уже существует в списке.";
        } else {
            echo "Автомобиль успешно добавлен.";
        }
    }
    ?>
</body>

</html>