<?php

class Post {

    private string $name;
    private int $salary;

    public function __construct(string $name, int  $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
/**
 * 
 * @return string
 */
    public function getName():string
    {
        return $this->name;
    }
/**
 * 
 * @return int
 */
    public function getSalary():int
    
    {
        return $this->salary;
    }

}

class Employee {

    private string $name;
    private string $surname;
    private $post;

    public function __construct(string$name,string $surname, Post $post)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setPost($post);
    }

    public function setName($name)
    {
        $this->name = $name;
    }
/**
 * 
 * @return string
 */
    public function getName():string
    {
        return $this->name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
/**
 * 
 * @return string
 */
    public function getSurname():string
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