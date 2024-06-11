<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // $car = "BMW";
    // // echo(var_dump($car));
    // $model = "S6";
    // $year = 2015;

    // function printCar($make, $model, $year) {
    //     return ("Car Details: $make $model $year");
    // }
    // echo "<br/>";
    // echo printCar($car, $model, $year);
    class Car {
        private $make;
        private $model;
        private $year;

        // Constructor
        public function __construct($make, $model, $year) {
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
        }

        // Getters and Setters
        // Gives you more control of the type of
        // values to be changed for the properties
        public function getMake() {
            return $this->make;
        }

        public function setMake($make) {
            return $this->make = $make;
        }

        public function getModel() {
            return $this->model;
        }

        public function setModel($model) {
            return $this->model = $model;
        }

        public function getYear() {
            return $this->year;
        }

        public function setYear($year) {
            $allowedYears = [2015, 2016, 2017, 2018, 2019, 2020];
            if (in_array($year, $allowedYears)) {
                return $this->year = $year;
            } else {
                return $this->year;
            }
        }

        public function printCar() {
            return ("Car Details: $this->make $this->model $this->year");    
        }
    }

$car1 = new Car("BMW", "S6", 2015);
echo $car1->printCar(); echo "<br/>";
// echo $car1; echo "<br/>";
echo $car1->getMake(); echo "<br/>";
echo $car1->getModel(); echo "<br/>";
$car1->setYear(2018);
echo $car1->getYear();
    ?>
</body>
</html>