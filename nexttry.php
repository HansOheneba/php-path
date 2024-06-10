<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Assistance</title>
    <style>
        body{
            font-family: monospace;
        }
    </style>
</head>

<body>
    <h2>Filter of cars</h2>

    <?php
    $cars = [
        ['manufacturer' => 'Toyota', 'model' => 'Corolla'],
        ['manufacturer' => 'Toyota', 'model' => 'Camry'],
        ['manufacturer' => 'Honda', 'model' => 'Civic'],
        ['manufacturer' => 'Honda', 'model' => 'Accord'],
        ['manufacturer' => 'Ford', 'model' => 'Mustang'],
        ['manufacturer' => 'Ford', 'model' => 'F-150'],
        ['manufacturer' => 'Chevrolet', 'model' => 'Impala'],
        ['manufacturer' => 'Chevrolet', 'model' => 'Malibu'],
        ['manufacturer' => 'BMW', 'model' => '3 Series'],
        ['manufacturer' => 'BMW', 'model' => '5 Series'],
        ['manufacturer' => 'Mercedes-Benz', 'model' => 'C-Class'],
        ['manufacturer' => 'Mercedes-Benz', 'model' => 'E-Class'],
        ['manufacturer' => 'Tesla', 'model' => 'Model S'],
        ['manufacturer' => 'Tesla', 'model' => 'Model 3'],
        ['manufacturer' => 'Tesla', 'model' => 'Model X'],
        ['manufacturer' => 'Tesla', 'model' => 'Model Y'],
        ['manufacturer' => 'Nissan', 'model' => 'Altima'],
        ['manufacturer' => 'Nissan', 'model' => 'Sentra'],
        ['manufacturer' => 'Volkswagen', 'model' => 'Golf'],
        ['manufacturer' => 'Volkswagen', 'model' => 'Passat'],
        ['manufacturer' => 'Hyundai', 'model' => 'Elantra'],
        ['manufacturer' => 'Hyundai', 'model' => 'Sonata'],
    ];

    function filterByManufacturer($cars, $brand){
        $filtered = [];

        foreach($cars as $car){
            if ($car['manufacturer'] === $brand){
                $filtered[] = $car;
            }
        }
        return $filtered;
    };

    ?>

    <ul>
        <?php foreach (filterByManufacturer($cars, 'Tesla') as $car) : ?>
            <li> 
                <?= $car['model']; ?> 
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>