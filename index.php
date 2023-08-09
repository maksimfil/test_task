<?php
include 'Weather.php';
function createWeather($count)
{
    $weathers = [];
    for ($i = 0; $i < $count; $i++) {
        $weather = new Weather();
        $weather->setCity(rand(4, 15));
        $weather->setTemperature();
        $weather->setCondition();
        $weathers[] = $weather;
    }
    return $weathers;
}

$weather = createWeather(rand(5, 20));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Name of country/city</th>
        <th scope="col">Temperature</th>
        <th scope="col">Weather conditions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($weather as $item): ?>
        <tr>
            <td><?= $item->getCity() ?></td>
            <td><?= $item->getTemperature() ?></td>
            <td><?= $item->getCondition() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>


