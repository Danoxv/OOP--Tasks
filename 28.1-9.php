<?php

class Post {

    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}

class Employee {

    private $name;
    private $surname;
    private $post;

    public function __construct($name, $surname, Post $post)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setPost($post);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    public function changePost(Post $post)
    {
        $this->setPost($post);
    }

    public function getPost()
    {
        return $this->post;
    }

}

$post = new Post('программист', 500);
$post1 = new Post('менеджер ', 600);
$post2 = new Post('водитель', 700);
$emp = new Employee(' Володя', 'Путин', $post);
$emp->changePost(new Post('водила', 700));
var_dump($emp);
$post3 = $emp->getPost();
echo $emp->getName().$emp->getSurname().$post3->getName().$post3->getSalary();
?>