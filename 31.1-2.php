<?php 
class User {
    private static $count = 0;
    private $name;
    
    
    public function __construct($name )
    {
        $this->name = $name;
        
        self::$count++;
    }
    
    public static function getCount()
    {
        return self::$count;
    }
}
        $user1 = new User('user1'); // создаем первый объект класса
	echo $user1::getCount(); //выведет 1
	
	$user2 = new User('user2'); // создаем второй объект класса
	echo $user2::getCount(); //выведет 2

?>