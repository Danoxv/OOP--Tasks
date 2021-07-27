<?php

/*
 * this class presents  the tasks 17.1-2
 * 
 * 
 */

class Arr {

    public $numbers = [];

    public function add($numbers)
    {
        $this->numbers[] = $numbers;
        return $this;
    }

    public function append(array $numbers)
    {
        foreach ($numbers as $number) {
            $this->numbers[] = $number;
        }
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }

}

echo (new Arr)->add(1)->append([1, 2])->add(2)->getsum();


/*
 * this class presents the task 17.3
 * 
 */

class User {

    private $surname;
    private $name;
    private $patronymic;

    public function setSurname($Surname)
    {
        $this->surname = $Surname;
        return $this;
    }

    public function setName($Name)
    {
        $this->name = $Name;
        return $this;
    }

    public function setPatronymic($Patronymic)
    {
        $this->patronymic = $Patronymic;
        return $this;
    }

    public function getFullName()
    {
        printf(
                ' %s%s%s',
                mb_substr($this->surname, 0, 1) ,
                mb_substr($this->name, 0, 1),
        mb_substr($this->patronymic, 0, 1)
        );
    }

}

$User = new User();
echo $User->setSurname('Петр')->setName('Николай')->setPatronymic('Иванович')->getFullName();


?>