<?php
//namespace Home;

require_once "connect.php";
$sql="Select name from users where id=2";
$statment=$pdo->query($sql);
$names = $statment->fetchAll();

var_dump($names);


session_start();
var_dump($_SESSION['name']);


var_dump($_POST);




interface EngineInterface1
{
    public function on();

    public function off();
}


class car
{
    private $color;
    private $model;
    private $engine;

    public function __construct($color, $model, EngineInterface1 $engine)
    {
        $this -> color = $color;
        $this -> model = $model;

        $this -> engine = $engine;
    }

/*
    public function displayColor()
    {
        return $this -> color;
    }

    public function displayModel()
    {
        return $this -> model;
    }
*/

    public function changeColor($color)
    {
        $this -> color = $color;
    }

    public function changeModel($model)
    {
        $this -> model = $model;
    }


    public function startEngine()
    {
        $this -> engine = on();
    }

    public  function stopEngine()
    {
        $this -> engine = off();
    }
}


class engine implements EngineInterface1
{
    public function on()
    {

    }

    public function off()
    {

    }
}


class engine_new implements EngineInterface1
{
    public function on()
    {

    }

    public function off()
    {

    }
}


$engine = new engine();
$engine_new = new engine_new();

$MyCar = new car("white", "Toyota", $engine);

echo "<pre>";
var_dump($MyCar);
/*
$MyCar -> changeColor('black');
$MyCar -> changeModel('MarcedesBance');

echo $MyCar -> displayColor();
echo $MyCar -> displayModel();
*/




interface ringInterface
{
    public function colling_on();

    public function colling_drop();
}

class telefone
{
    private $model;
    private $color;
    private $size;
    private $ring;

    public function __construct($model, $color, $size, ringInterface $ring)
    {
        $this -> model = $model;
        $this -> color = $color;
        $this -> size = $size;

        $this -> ring = $ring;
    }


    public function displayModel()
    {
        return $this -> model;
    }

    public function displayColor()
    {
        return $this -> color;
    }

    public function displaySize()
    {
        return $this -> size;
    }


    public function changeModel($model)
    {
        $this -> model = $model;
    }

    public function changeColor($color)
    {
        $this -> color = $color;
    }


    public function Call()
    {
        $this -> ring = colling_on();
    }

    public function drop()
    {
        $this -> ring = colling_drop();
    }
}

class ring implements ringInterface
{
    public function colling_on()
    {

    }

    public function colling_drop()
    {

    }
}

class ring_new implements ringInterface
{
    public function colling_on()
    {

    }

    public function colling_drop()
    {

    }
}

$ring = new ring();
$ring_new = new ring_new();

$telefone = new telefone("Mi8", "black", "8in x 14in", $ring);

$telefone -> changeModel("Xiaomi");
$telefone -> changeColor("White");


echo "<pre>";
echo $telefone -> displayModel();
echo $telefone -> displayColor();
echo $telefone -> displaySize();

echo "<pre>";
var_dump($telefone);




interface bs_nameInterface
{
    public function inter_BS();
    public function out_BS();
}

class BS
{
    private $model;
    private $location;

    private $bs_name;

    public function __construct($model,$location, bs_nameInterface $bs_name)
    {
        $this -> model = $model;
        $this -> location = $location;

        $this -> bs_name = $bs_name;
    }


    public function displayModel()
    {
        return $this -> model;
    }
    public function displayLocation()
    {
        return $this -> location;
    }


    public function changeModel($model)
    {
        $this -> model = $model;
    }
    public function changeLocation($location)
    {
        $this -> location = $location;
    }


    public function inter_BS()
    {
        $this -> bs_name = inter_BS();
    }
    public function out_BS()
    {
        $this -> bs_name = out_BS();
    }
}

class bs_name implements bs_nameInterface
{
    public function inter_BS()
    {

    }

    public function out_BS()
    {

    }
}

class bs_name_1 implements bs_nameInterface
{
    public function inter_BS()
    {

    }

    public function out_BS()
    {

    }
}

$bs_name = new bs_name();
$bs_name_1 = new bs_name_1();

$My_BS = new BS('BTS3900', 'Dushanbe', $bs_name_1);

$My_BS -> changeModel('DBS312');
$My_BS -> changeLocation('Khorog');

echo $My_BS -> displayModel();
echo $My_BS -> displayLocation();

echo "<pre>";
var_dump($My_BS);





interface monitorInterface
{
    public function on();
    public function off();
}

class monitor
{
    private $size;
    private $model;
    private $color;

    private $display;

    public function __construct($size,$model,$color, monitorInterface $display)
    {
        $this -> size = $size;
        $this -> model = $model;
        $this -> color = $color;

        $this -> display = $display;
    }


    public function displaySize()
    {
        return $this->size;
    }
    public function displayModel()
    {
        return $this->model;
    }
    public function displayColor()
    {
        return $this->color;
    }


    public function changeSize($size)
    {
        $this -> size = $size;
    }
    public function changeModel($model)
    {
        $this -> model = $model;
    }
    public function changeColor($color)
    {
        $this -> color = $color;
    }


    public function on()
    {
        $this -> display = on();
    }
    public function off()
    {
        $this -> display = off();
    }

}

class display implements monitorInterface
{
    public function on()
    {

    }
    public function off()
    {

    }
}

class display_double implements monitorInterface
{
    public function on()
    {

    }
    public function off()
    {

    }
}


$display = new display();
$display_double = new display_double();

$My_monitor = new monitor(19, 'lenovo', 'black', $display_double);

$My_monitor -> changeSize(23);
$My_monitor -> changeModel('samsung');
//$My_monitor -> changeColor('white');

echo "<pre>";
echo $My_monitor -> displaySize();
echo $My_monitor -> displayModel();
echo $My_monitor -> displayColor();


echo "<pre>";
var_dump($My_monitor);




interface PowerInterface
{
    public function on();
    public function off();
}

class sis_box
{
    private $equipment;
    private $size;
    private $color;

    private $Power_Supply;

    public function __construct($equipment, $size, $color, PowerInterface $Power_Supply)
    {
        $this -> equipment = $equipment;
        $this -> size = $size;
        $this -> color = $color;

        $this -> Power_Supply = $Power_Supply;
    }

    public function changeEquipment($equipment)
    {
        $this -> equipment = $equipment;
    }
    public function changeSize($size)
    {
        $this -> size = $size;
    }
    public function changeColor($color)
    {
        $this -> color = $color;
    }

    public function displayEquipment()
    {
        return $this -> equipment;
    }
    public function displaySize()
    {
        return $this -> size;
    }
    public function displayColor()
    {
        return $this -> color;
    }

    public function on()
    {
        $this -> Power_Supply_350kW = on();
    }
    public function off()
    {
        $this -> Power_Supply_350kW = off();
    }
}


class Power_Supply_350kW implements PowerInterface
{
    public function on()
    {

    }
    public function off()
    {

    }
}

class Power_Supply_400kW implements PowerInterface
{
    public function on()
    {

    }
    public function off()
    {

    }
}

$Power_Supply_350kW = new Power_Supply_350kW();
$Power_Supply_400kW = new Power_Supply_400kW();

$My_sis_box = new sis_box('intel Core I7', '100 x 20', 'black', $Power_Supply_400kW);

$My_sis_box -> changeEquipment('intel quadro core I7');
$My_sis_box -> changeSize('H50in L60in W20in');



echo "<pre>";
echo $My_sis_box -> displayEquipment();
echo "<pre>";
echo $My_sis_box -> displaySize();

echo "<pre>";
var_dump($My_sis_box);









class CashBox
{
    public $color;
    public $size;
    public $littleBox;

        public function __construct($color,$size,$littleBox)
        {
            $this -> color = $color;
            $this -> size = $size;
            $this -> littleBox = $littleBox;
        }

        public function get()
        {
            /*
             * код с описанием как доставать кашилек
             * */
        }

        public function open()
        {
            /*
             * код с описанием как искать в кашильке
             * */
        }

        public function put()
        {
            /*
             * код с описание как положить кашилек
             * */
        }
}

$MyCashBox = new CashBox('grey', 'middle', 'yes');
$MyCashBox -> get();
$MyCashBox -> open();
$MyCashBox -> put();

class computer
{
    public $harateristic;
    public $model;
    public $Equipment;

        public function __construct($harateristic,$model,$Equipment)
        {
            $this -> harateristic = $harateristic;
            $this -> model = $model;
            $this -> Equipment = $Equipment;
        }

        public function on()
        {
            /*
             * код с описанием запуска компа.
             * */
        }

        public function off()
        {
            /*
             * код с описанием отключения компа.
             * */
        }
}

$My_computer = new computer('Core2DUO', 'pentium4', 'full');
$My_computer -> on();
$My_computer -> off();

class glass
{
    public $color;
    public $logo;
    public $size;
    public $form;

        public function __construct($color,$logo,$size,$form)
        {
            $this -> color = $color;
            $this -> logo = $logo;
            $this -> size = $size;
            $this -> form = $form;
        }

        public function drink()
        {
            /*
             * Код с описанием поднять стакан
             * */
        }

        public function put()
        {
            /*
             * код с описанием поставить стакан на место
             * */
        }
}

$My_glass = new glass('white', 'I', 'normal', 'form');

$My_glass -> drink();
$My_glass -> put();

class phone
{
    public $model;
    public $made;
    public $company;

    public function __construct($model,$made,$company)
    {
        $this -> model = $model;
        $this -> made = $made;
        $this -> company = $company;
    }

    public function call()
    {
        /*
         * Код с описанием совершения звонка
         */
    }

    public function drop()
    {
        /*
         * код с описанием окончания звонка
         */
    }
}

$My_phone = new phone ('MX6', 'China', 'Maizu');
$My_phone -> call();
$My_phone -> drop();

class key
{
    public $type;
    public $metal;

    public function __construct($type, $metal)
    {
        $this -> type = $type;
        $this -> metal = $metal;
    }

    public function insert()
    {
        /*
         * код с описанием манипулаций ключа в замке
         */
    }

    public function take_out()
    {
        /*
         * код с описанием манипуляций ключа при вынимании ключа
         */
    }
}

$My_key = new key ('for_car', 'copper');

$My_key -> insert();
$My_key -> take_out();





class monitor1
{
    public $model;
    public $color;

    public function __construct($model, $color)
    {
        $this->model=$model;
        $this->color=$color;
    }

    public function on()
    {
        /*
         * код с описанием включения монитора
         */
    }

    public function off()
    {
        /*
         * код с описанием выключения монитора
         */
    }
}

$My_monitor = new monitor1('lenovo', 'bleck');

$My_monitor -> on();
$My_monitor -> off();



class fon
{
    public $color;
    public $made_in;

    public function __construct($color, $made_in)
    {
        $this -> color = $color;
        $this -> made_in = $made_in;
    }

    public function on()
    {
        /*
         * script
         */
    }

    public function off()
    {
        /*
         * script
         */
    }
}

$My_fon = new fon('white','china');

//echo $My_fon -> color;

$My_fon -> on();
$My_fon -> off();


class kyrut
{
    private $color;
    private $consist;

    public function __construct($color,$consist)
    {
        $this -> color = $color;
        $this -> consist = $consist;
    }

    public function changeColor($color)
    {
        $this -> color = $color;
    }

    public function changeConsist($consist)
    {
        $this -> consist = $consist;
    }

    public function displayConsist()
    {
        return $this -> consist;
    }

    public function displayColor()
    {
        return $this -> color;
    }

    public function take()
    {
        /*
         * script
         */
    }

    public function eat()
    {
        /*
         * script
         */
    }
}

$My_kyrut = new kyrut('black', 'chaka');

//$My_kyrut -> color = 'blue';

//$My_kyrut -> changeColor('white');
//$My_kyrut -> changeConsist('milk');

//echo $My_kyrut -> displayColor();
//echo $My_kyrut -> displayConsist();

$My_kyrut -> take();
$My_kyrut -> eat();



class stakan
{
    private $size;
    private $color;

    public function __construct($size,$color)
    {
        $this -> size = $size;
        $this -> color = $color;
    }


    public function changeSize($size)
{
    $this -> size = $size;
}

    public function changeColor($color)
    {
        $this -> color = $color;
    }


    public function displaySize()
    {
        return $this -> size;
    }

    public function displayColor()
    {
        return $this -> color;
    }


    public function take()
    {

    }

    public function drink()
    {

    }
}


$My_stakan = new stakan(35, 'white');

//$My_stakan -> size = 90;
//$My_stakan -> color = blue;

$My_stakan -> changeSize(60);
$My_stakan -> changeColor('blue');


//echo $My_stakan -> size;
//echo $My_stakan -> color;

//echo $My_stakan -> displaySize();
//echo $My_stakan -> displayColor();

$My_stakan -> take();
$My_stakan -> drink();


class stool
{
    private $model;
    private $consists;

    public function __construct($model, $consists)
    {
        $this -> changeModel($model);
        $this -> consists = $consists;
    }

    public function displayModel()
    {
        return $this -> model;
    }

    public  function displayConsisists()
    {
        return $this -> consists;
    }

    public function changeModel($model)
    {
        if(is_string($model))
        {
            $this -> model = $model;
        }else{
            die("Model bee whose is string");
        }
    }

    public function changeConsists($consists)
    {
        $this -> consists = $consists;
    }

    public function sit()
    {

    }

    public function up()
    {

    }


}
$My_stool = new stool('lite', 'setka');

//$My_stool -> model = 'big';
//$My_stool -> consists = 'metal';

//echo $My_stool -> model;
//echo $My_stool -> consists;

$My_stool -> changeModel('BIGBOSS');
$My_stool -> changeConsists('trapka');

//echo $My_stool -> displayModel();
//echo $My_stool -> displayConsisists();



$My_stool -> sit();
$My_stool -> up();







abstract class Animal
{
    protected $name;

    public abstract function makeSound();

    public function jump()
    {

    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Meow";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Gav-Gav";
    }
}


class animalOwner
{
    public function Vote(Animal $animal)
    {
        return $animal -> makeSound();
    }
}

$Cat = new Cat;
$Dog = new Dog;

$animalOwner = new animalOwner();

$animalOwner -> Vote($Cat);
$animalOwner -> Vote($Dog);

//$Animal = new Animal;
echo "<pre>";
var_dump($animalOwner);




abstract class notification
{
    protected $NumOrder;
    protected $textMessage;

    public abstract function notify();
}

class SMS extends notification
{
    public function notify()
    {
        echo "SMS";
    }
}

class Mail extends notification
{
    public function notify()
    {
        echo "Mail";
    }
}

class AdminPanel extends notification
{
    public function notify()
    {
        echo "AdminPanel";
    }
}



class Alert
{
    public function SendNotify(notification $notification)
    {
        return $notification -> notify();
    }
}



$SMS = new SMS();
$Mail = new Mail();

$AdminPanel = new AdminPanel();

$Alert = new Alert();

$Alert -> SendNotify($SMS);
$Alert -> SendNotify($Mail);
$Alert -> SendNotify($AdminPanel);

echo "<pre>";
var_dump($Alert);




abstract class Purse
{
    protected $color;
    protected $size;

    public abstract function Put();
}

class tjkMoney extends Purse
{
    public function Put()
    {
        echo "Somonis";
    }
}

class rusMoney extends Purse
{
    public function Put()
    {
        echo "Rubls";
    }
}

class usaMoney extends Purse
{
    public function Put()
    {
        echo "Dollars";
    }
}


class Give
{
    public function Take(Purse $Purse)
    {
        return $Purse -> Put();
    }
}


$tjkMoney = new tjkMoney();
$rusMoney = new rusMoney();
$usaMoney = new usaMoney();

$Give = new Give();

$Give -> Take($tjkMoney);
$Give -> Take($rusMoney);
$Give -> Take($usaMoney);




abstract class drags
{
    protected $price;
    protected $made;
    protected $weight;

    public abstract function take_medicine();
}

class Amoksiklav extends drags
{
    public function take_medicine()
    {
        echo "to take Amoksiklav 116";
    }
}

class Ciproflaksacine extends drags
{
    public function take_medicine()
    {
        echo "to take Ciproflaksacin 50mg";
    }
}

class Gentomecine extends drags
{
    public function take_medicine()
    {
        echo "to take Gentamecine 1g";
    }
}


class doctor
{
    public function give_drags(drags $drags)
    {
        return $drags -> take_medicine();
    }
}


$Amoksiklav = new Amoksiklav();
$Ciproflaksacine = new Ciproflaksacine();
$Gentomecine = new Gentomecine();

$doctor = new doctor();

echo "<pre>";
$doctor -> give_drags($Amoksiklav);
$doctor -> give_drags($Ciproflaksacine);
$doctor -> give_drags($Gentomecine);



abstract class cigarettes
{
    protected $price;
    protected $lable;

    public abstract function to_smoke();
}

class Wingston extends cigarettes
{
    public function to_smoke()
    {
        echo "Wingston";
    }
}

class Pine extends cigarettes
{
    public function to_smoke()
    {
        echo "Pine";
    }
}


class farz
{
    public function take_cigarettes(cigarettes $cigarettes)
    {
        return  $cigarettes -> to_smoke();
    }
}


$Wingston = new Wingston();
$Pine = new Pine();

$farz = new farz();

echo "<pre>";
$farz -> take_cigarettes($Wingston);
$farz -> take_cigarettes($Pine);




abstract class Candy
{
    protected $made;
    protected $date_ex;

    public abstract function buy();
}

class Chocolate extends Candy
{
    public function buy()
    {
        echo "Eat chocolate";
    }
}

class Lollipop extends Candy
{
    public function buy()
    {
        echo "Eat Lollipop";
    }
}

class kids
{
    public function take(Candy $Candy)
    {
        return $Candy -> buy();
    }
}

$Chocolate = new Chocolate;
$Lollipop = new Lollipop;

$Kids = new Kids;

echo "<pre>";

$Kids -> take($Chocolate);
$Kids -> take($Lollipop);
echo "<pre>";



abstract class cupboard
{
    protected $color;
    protected $size;

    public abstract function open();
}


class left_door extends cupboard
{
    public function open()
    {
        echo "Left door opened";
    }
}

class right_door extends cupboard
{
    public function open()
    {
        echo "Right door opened";
    }
}


class human
{
    public function door_handle(cupboard $cupboard)
    {
        return $cupboard -> open();
    }
}


$left_D = new left_door();
$right_D = new right_door();
$human = new human();

$human -> door_handle($right_D);

echo "<pre>";









abstract class bilding
{
    protected $adress;

    public abstract function bild();

    public function door_open()
    {

    }
    public function door_close()
    {

    }
}

class home extends bilding
{
    public function bild()
    {

    }
    public function door_open()
    {

    }
    public function door_close()
    {

    }
}

class worke extends bilding
{
    public function bild()
    {

    }
    public function door_open()
    {

    }
    public function door_close()
    {

    }
}

$home = new home();

var_dump($home);




abstract class mobile_company
{
    protected $name;

    public abstract function service();

    public function pay()
    {

    }
}

class babilon extends mobile_company
{
    public function service()
    {

    }
}

class megafone extends mobile_company
{
    public function service()
    {

    }
}

$Babilon = new babilon();
$Megafon = new megafone();

var_dump($Megafon);





trait all_data
{
    public function sayHi()
    {
        echo "HI";
    }
}

class Data
{
    use all_data;
}

$Data_class = new Data();
var_dump($Data_class);




















class shopingCard
{

}

$Person = new shopingCard();

echo "<pre>";
var_dump($Person instanceof shopingCard);
var_dump($Person instanceof Card);




class user
{
    public $name = "Name";
    public $password = "pass";
    public $email = "mail";
    public $city = "City";

    public function Hello()
    {
        echo "Hello {$this -> name}";
    }

    function getInfo()
    {
        return "{$this -> name}"." "."{$this -> surname}";
    }
}

$admin = new user();

$admin -> name = "Alex";
$admin -> surname = "Ivanov";

$admin -> Hello();
echo "<br/>";
echo "USER:".$admin -> getInfo();


//$user1 = new user();
//echo $admin -> name = "ObiOneKinobi";
//echo "<br/>";
//echo $user1 -> name = "DarkWader";
//echo "<br/>";
//echo $user1 -> surname = "Ivanov";



class user1
{
    public $name;
    public $password;
    public $email;
    public $city;

    public function __construct($name,$password,$email,$city)
    {
        $this -> name = $name;
        $this -> password = $password;
        $this -> email = $email;
        $this -> city = $city;
    }

    public function getInfo()
    {
        return "{$this -> name}.{$this -> password}.{$this -> email}.{$this -> city}";
    }

    public function __destruct()
    {
        //echo "destr".$this -> name;
    }
}

$admin1 = new user1("Petro", "123456", "PP@mail.ru", "Ykrane");
//var_dump($admin1);

//echo $admin1 -> getInfo();
echo "<br>";




class construktor
{
    public $name;

    public function __construct($name)
    {
        $this -> name = $name;
        print "konstructor";
    }

    public function __destruct()
    {
        //echo "deleKonst".$this->name;
    }
}

//$const = new construktor("chubaka");
//echo $const -> name;


class mays
{
    public $made;

    public function getInfo()
    {
        echo $this -> made;
        $this -> test();
    }

    public function test()
    {
        echo "TEST";
    }
}

echo "<br/>";
$mays = new mays();
$mays -> made = "Obama";
$mays -> getInfo();


echo "<br/>";
$mays1 = new mays();
$mays1 -> made = "Trump";
$mays1 -> getInfo();





class klava
{
    public $name;

    public function getInfo()
    {
        echo $this -> name;
        $this -> press();
    }

    public function press()
    {
        echo "press";
    }
}

echo "<br/>";
$klava = new klava();
$klava -> name = "jeniys ";
$klava -> getInfo();



class monik
{
    public $name;

    public function getInfo()
    {
        echo $this -> name;
        $this -> echoText();
    }

    public function echoText()
    {
        echo " lenovo zopa";
    }
}

echo "<br/>";

$monik = new monik();
$monik -> name = "xrenovo";
$monik -> getInfo();









class pan{
    public $setings;

    public function getInfo()
    {
        echo $this -> setings;
        $this -> echoText();
    }

    public function echoText()
    {
        echo "text from function echoText";
    }
}
echo "<br>";
$pan = new pan();
$pan -> setings = "metals";
$pan -> getInfo();





class humans{
    public $color;

    public function getInfo(){
        echo $this -> color;
        $this -> text();
    }

    public function text(){
        echo "wary many humans";
    }
}
echo "<br>";
$humans = new humans();
$humans -> color = "colorise ";
$humans -> getInfo();




class workers
{
    private static $name;

    public static function setName($name1)
    {
        self::$name = $name1;
    }

    public static function getName()
    {
        return self::$name;
    }
}
echo "<br/>";
workers::setName('slaves');
echo workers::getName();






class drivers
{
    private static $car;

    public static function setCar($car1)
    {
        self::$car = $car1;
    }

    public static function getCar()
    {
        return self::$car;
    }
}
echo "<br/>";
drivers::setCar('Toyota');
echo drivers::getCar();






class students
{
    private static $school;

    public static function setSchool($school1)
    {
        self::$school = $school1;
    }

    public static function getSchool()
    {
        return self::$school;
    }
}

echo "<br/>";
students::setSchool('SOY21');
echo students::getSchool();



class handfone
{
    private static $color;

    public static function setColor($color1)
    {
        self::$color = $color1;
    }

    public static function getColor()
    {
        return self::$color;
    }
}

echo "<br/>";
handfone::setColor('white');
echo handfone::getColor();




class brouser{
    public static $name;

    public static function setName($name1){
        self:: $name = $name1;
    }

    public static function getName(){
        return self::$name;
    }
}

echo "<br>";
brouser::setName("Yandex");
echo brouser::getName();


class zaebal{

    public static $name;

    public static function setName ($name1)
    {
        self:: $name = $name1;
    }

    public static function getName()
    {
        return self::$name;
    }

}
echo "<br>";
zaebal::setName("shapa");
echo zaebal::getName();


class suka{

    public static $name;

    public static function setName($name1)
    {
        self:: $name = $name1;
    }

    public static function getName()
    {
        return self::$name;
    }
}
echo "<br>";
suka::setName("PIDOR");
echo suka::getName();


class pizdabol{

    public static $name;

    public static function setName($name1)
    {
        self::$name=$name1;
    }

    public static function getName()
    {
        return self::$name;
    }

}
echo "<br>";
pizdabol::setName("yrka");
echo pizdabol::getName();



class debil{
    public static $nums;

    public static function setName($nums1)
    {
        self::$nums=$nums1;
    }

    public static function getName()
    {
        return self::$nums;
    }
}
echo "<br>";
debil::setName("5");
echo debil::getName();

































/*
class user2
{
    public $name;
    public $password;
    public $email;
    public $city;

    public function __construct($name,$password,$email,$city)
    {
        $this -> name = $name;
        $this -> password = $password;
        $this -> email = $email;
        $this -> city = $city;
    }

    public function getInfo()
    {
        $information = "{$this -> name}.{$this -> password}.{$this -> email}.{$this -> city}";
        return $information;
    }

}

$user2 = new user2("Petro", "123456", "PP@mail.ru", "Ykrane");
//var_dump(user2);

//echo $user2 -> getInfo();
echo "<br>";


class moderator extends user2
{
    public $info;
    public $rights;


    function __construct($name, $password, $email, $city, $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);
        $this -> info = $info;
        $this -> rights = $rights;
    }

    function getInfo()
    {
        $information = parent::getInfo();
        $information .="{$this->info}"."{$this->rights}";

        return $information;
    }
}

$moder = new moderator("Sasha", "654321", "sasha@gmail.com", "USSA", "PoRN", "true");
echo $moder -> getInfo();
*/



class user3{

    public $name;
    public $pass;

    public function __construct($name, $pass)
    {
      $this->name=$name;
      $this->pass=$pass;
    }

    public function getInfo()
    {
        $information = "{$this->name}"."{$this->pass}";
        return $information;
    }
}
echo "<br>";
$user3=new user3("Alex ", "123456 ");
echo $user3->getInfo();



class moderator extends user3{
    public $info;
    public $rights;

    public function __construct($name, $pass, $info, $rights)
    {
        parent::__construct($name, $pass);
        $this->info=$info;
        $this->rights=$rights;
    }

    public function getInfo()
    {
        $information = parent::getInfo();
        $information .= "{$this->info}"."{$this->rights}";

        return $information;
    }
}
echo "</br>";
$moderator = new moderator("Selena ","654321 ", "superStar ", "True ");
echo $moderator->getInfo();



class roditeli{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    public function getInfo()
    {
        $information = "{$this->name}"."{$this->age}";
        return $information;
    }
}

echo "<br>";
$roditeli = new roditeli("PAPA ", "33 ");
echo $roditeli->getInfo();



class deti extends roditeli{
    public $pol;
    public $uvlichenie;

    public function __construct($name, $age, $pol, $uvlichenie)
    {
        parent:: __construct($name, $age);
        $this->pol=$pol;
        $this->uvlichenie=$uvlichenie;
    }

    public function getInfo()
    {
        $information = parent::getInfo();
        $information .= "{$this->pol}"."{$this->uvlichenie}";

        return $information;

    }
}

$deti = new deti("Sin ", "3 ", "muz ", "boobooki ");
echo $deti->getInfo();




class dip{
    public $sotrudniki;
    public $kol;

    public function __construct($sotrudniki, $kol)
    {
        $this->sotrudniki=$sotrudniki;
        $this->kol=$kol;
    }

    public function getInfo()
    {
        $inform = "{$this->sotrudniki}". "{$this->kol}";
        return $inform;
    }
}
echo "<br>";
$dip = new dip("VSE ", "9 ");
echo $dip->getInfo();






class otd extends dip{
    public $name;
    public $pos;

    public function __construct($sotrudniki, $kol, $name, $pos)
    {
        parent::__construct($sotrudniki,$kol);
        $this->name=$name;
        $this->pos=$pos;
    }

    public function getInfo()
    {
        $inform = parent::getInfo();
        $inform .= "{$this->name}"."{$this->pos}";
        return $inform;
    }
}

echo "</br>";
$otd = new otd("analitiki ", "2 ", "A/J ", "podval ");
echo $otd->getInfo();




class test{
    protected $info;
}



class test2 extends test{
    public function setInfo()
    {
        $this->info="information";
        echo $this->info;
    }
}

$test2 = new test2();
//$test2->info="information";
echo $test2->setInfo();




class obshOtd{

    public static $name;

    public static function info()
    {
        echo "HELLO ";
        return self::$name;
    }

}

echo "<br>";
obshOtd::$name="Alex";
//echo obshOtd::$name;

echo obshOtd::info();



class kompany{
    public static $structure;

    public static function getInfo()
    {
        echo "Privet ";
        return self::$structure="shema";
    }
}

//kompany::$structure="zepa";
echo "<br>";
echo kompany::getInfo();





class attraction{
    const P_VALUE = "9.80665m/s2";
}
echo "<br>";
echo attraction::P_VALUE;



class zhena{
    const OBZIVATELSTVO = suka;
}

echo "<br>";
echo zhena::OBZIVATELSTVO;




abstract class country{
    public $name;
    public $array;

    abstract public function getInfo();
}


class town extends country{

    public function getInfo()
    {
        echo "Dushanbe";
    }

}

echo "<br>";
$town = new town;
$town->getInfo();




interface zena {
    public function getInfo();
}

interface chika {
    public function getSkill();
}


class babi implements zena, chika
{
    public $name = "ebanashka ";
    public $skill = "suck ";

    public function getInfo()
    {
        echo $this->name;
    }

    public function getSkill()
    {
        echo $this->skill;
    }
}
echo "<br>";
$babi = new babi;
$babi -> getInfo();
$babi -> getSkill();


class base
{
    public function sayHello()
    {
        echo "Hello ";
    }
}


trait sayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo "World!!!";
    }
}


class sayHelloWorld extends base
{
    use sayWorld;
}

echo "<br>";
$sayHelloWorld = new sayHelloWorld();
$sayHelloWorld->sayHello();










trait Hello
{
    public function Hello()
    {
        echo "Hello ";
    }
}

trait World
{
    public function World()
    {
        echo "World!!!! from multi Trait";
    }
}


class HelloWorld
{
    use Hello, World;
}

echo "<br>";
$HelloWorld = new HelloWorld();
$HelloWorld->Hello();
$HelloWorld->World();


class clon
{
    public function __clone()
    {
        echo "cloned";
    }
}
echo "<br>";
$clone = new clon();
$clone2 = clone $clone;







class polzovatel{
    public $name;
    public $city;
    public $id;

    public function __construct($name,$city)
    {
        $this->name=$name;
        $this->city=$city;
    }

    public function setID($id)
    {
        $this->id=$id;
    }

    public function __clone()
    {
        $this->id=0;
    }
}


$polz = new polzovatel("Ales", "Dush");
$polz->setID(123456789);
var_dump($polz);

$polz2 = clone $polz;
var_dump($polz2);



class GetSet{
    private $number = 1;

    public function __get($name)
    {
        echo "You get {$name}";
    }
    public function __set($name, $val)
    {
        echo "You set {$name} to ";
    }
}

echo "<br>";
$GetSet = new GetSet();
echo $GetSet->number;
echo $GetSet->number = 12312;



$file = "namespace.php";

try{

    if(!file_exists($file)){
       throw new Exception('File not found');
    }

}catch(Exeption $e){

    echo $e->getMessage();

}





?>

