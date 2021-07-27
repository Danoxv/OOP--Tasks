<?php
class Employee {

    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

}
$arr = [new Employee('belgorod', '1mln'),
 new Employee ('kharkov', '1.5mln')
];
foreach ($arr as $value) {
 echo $value->name . $value->population ;
}

?>