<?php

// Задача 17.1
// Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.

class Arr {

    public array $numbers = [];

    /**
     * 
     * @param int $number
     * @return $this
     */
    public function add(int $number)
    {
        $this->numbers[] = $number;
        return $this;
    }

    //Задача 17.2
//Добавьте в класс Arr еще один метод append, который параметром будет принимать массив чисел и добавлять эти числа в конец массива, хранящегося в объекте.

    /**
     * 
     * @param array $numbers
     * @return $this
     */
    public function append(array $numbers)
    {
        foreach ($numbers as $number) {
            $this->numbers[] = $number;
        }
        return $this;
    }
/**
 * 
 * @return int|float
 */
    public function getSum(): int|float
    {
        return array_sum($this->numbers);
    }

}

echo (new Arr)->add(1)->append([1, 2])->add(2)->getsum();

//Задача 17.3
//Сделайте класс User, у которого будут приватные свойства surname (фамилия), name (имя) и patronymic (отчество).
//Эти свойства должны задаваться с помощью соответствующих сеттеров.
//Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке, а самым последним методом в цепочке можно было вызвать метод getFullName,
//который вернет ФИО юзера (первую букву фамилии, имени и отчества).

class User {

    private string $surname;
    private string $name;
    private string $patronymic;
/**
 * 
 * @param string $Surname
 * @return $this
 */
    public function setSurname(string$Surname)
    {
        $this->surname = $Surname;
        return $this;
    }
/**
 * 
 * @param string $Name
 * @return $this
 */
    public function setName(string$Name)
    {
        $this->name = $Name;
        return $this;
    }
/**
 * 
 * @param string $Patronymic
 * @return $this
 */
    public function setPatronymic(string$Patronymic)
    {
        $this->patronymic = $Patronymic;
        return $this;
    }

    public function getFullName()
    {
        printf(
                ' %s%s%s',
                mb_substr($this->surname, 0, 1),
                mb_substr($this->name, 0, 1),
                mb_substr($this->patronymic, 0, 1)
        );
    }

}

$User = new User();
echo $User->setSurname('Петр')->setName('Николай')->setPatronymic('Иванович')->getFullName();
?>