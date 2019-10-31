<?php

class car{
    public $color;
    public $model;
    public $year;

    public function __construct($color, $model, $year)
    {
        $this->color=$color;
        $this->model=$model;
        $this->year=$year;
    }


}


$new_car = new car('Red',"BMW",2019);
//$new_car->color="red";

//var_dump($new_car);





class account{
    protected $name;
    protected $balance;
    protected $registration;

    public function getName (){
//        kod
    }

    public function getBalance (){
//        kod
    }

    private function checkBalance(){
//        kod
    }

    public function blockCard(){
//        kod
        $this->checkBalance();
//        kod
    }
}

class card extends account{
    public function __construct($name,$balance,$registration)
    {
        $this->name = $name;
        $this->balance = $balance;
        $this->registration = $registration;
    }
}

$new_card = new card("Сергей", 100, '23.10.2019');
//var_dump($new_card);





trait data
{
    private $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function data()
    {
        return $this->name;
    }
}

class fone {
    use data;
}

$my_fone = new fone('Xiaomi');
//var_dump($my_fone->data());



interface all_engine{
    public function on();

    public function off();
}

class auto{
    private $color;
    private $model;

    private $engine;

    public function __construct($color,$model, all_engine $engine)
    {
        $this->color=$color;
        $this->model=$model;

        $this->engine=$engine;
    }

    public function StartEngine(){
        $this->engine=on();
    }
    public function StopEngine(){
        $this->engine=off();
    }

}

class engineClass implements all_engine {

    public function on(){
//        return $this->on="Engine started";
    }

    public function off(){
//        return "Engine stop";
    }
}

class engineClassNew implements all_engine {

    public function on(){

    }

    public function off(){

    }
}

$engineClassObject = new engineClass();
$engineClassNewObject = new engineClassNew();


$my_Auto = new auto('red','BMW', $engineClassObject);
echo "<pre>";
//var_dump($my_Auto);



interface processings{
    public function insert();
    public function exect();
}

class portfel{
    private $name;
    private $date;

    private $valuta;

    public function __construct($name,$date, processings $valuta)
    {
        $this->name=$name;
        $this->date=$date;

        $this->valuta=$valuta;
    }

    public function add(){
        $this->valuta=insert();
    }

    public function delete(){
        $this->valuta=exect();
    }

}

class processing implements processings{
    public function insert(){

    }

    public function exect(){

    }
}

class processingNew implements processings{
    public function insert(){

    }

    public function exect(){

    }
}


$proccessing = new processing();
$proccessingNew =new processingNew();

$portfel = new portfel('andrey', '08.07.2019', $proccessingNew);
//var_dump($portfel);



interface allDoors{
    public function open();

    public function close();
}


class buss{
    private $windows;
    private $doorAtr;

    public function __construct($windows, allDoors $doorAtr)
    {
        $this->windows=$windows;
        $this->doorAtr=$doorAtr;
    }

    public function openDoor(){
        $this->doorAtr=open();
    }

    public function closeDoor(){
        $this->doorAtr=close();
    }
}


class door implements allDoors {
    public function open(){
        echo "open";
    }

    public function close(){
        echo 'close';
    }
}

class doorB implements allDoors {
    public function open(){
        echo "open";
    }

    public function close(){
        echo 'close';
    }
}

$my_door=new door();
$my_doorB=new doorB();


$my_buss=new buss('big', $my_doorB);
var_dump($my_buss);






interface editFile{
    public function insert();
    public function del_file();
}

class basic{
    private $name;
    private $registration;

    private $file;

    public function __construct($name,$registration, editFile $file)
    {
        $this->name=$name;
        $this->registration=$registration;

        $this->file=$file;
    }

    public function update(){
        $this->file=insert();
    }

    public function delete(){
        $this->file=del_file();
    }
}

trait trait_edit_file{
    private $data;
    private $path;
    private $ip;
}

class parents{
    protected $one;
    protected $two;

    protected function one(){

    }
    protected function two(){

    }
}


class edit_file extends parents implements editFile{
    use trait_edit_file;

    public function insert(){
//        kod....
    }

    public function del_file(){
//        kod....
    }
}


class edit_file_V2 implements editFile{
    use trait_edit_file;

    public function insert(){
//        kod....
    }

    public function del_file(){
//        kod....
    }
}




$my_edit_file = new edit_file();
$my_edit_file_V2 = new edit_file_V2();

$my_basic = new basic('first', '09.07.2019', $my_edit_file_V2);
var_dump($my_basic);




abstract class deposit{
    protected $numb;
    public abstract function check();
}

class plastic_card extends deposit{
    public function check()
    {
        // TODO: Implement check() method.
        echo "номер счета";
    }
}





abstract class animal{
    public abstract function make_sound();
}

class chicken extends animal {
    public function make_sound(){
        echo "kuka-reku";
    }
}
class dog extends animal{
    public function make_sound()
    {
        echo "gav-gav";
    }
}

class humen{
    public function query_make_sound(animal $animal){
        return $animal->make_sound();
    }
}


$my_chicken=new chicken();
$my_dog=new dog();

$my_humen=new humen();
$my_humen->query_make_sound($my_dog);


//'insert into users (name, nubeFon) values(john, 5465465)'
//'select * from users where id=1'
//'update users set name=piter and nimbFon=44444'
//'delete from users where id=1'

abstract class button{
    public abstract function result_press_button();
}
class button_A extends button{
     public function result_press_button(){
        echo "<br> button_A";
     }
}
class button_B extends button{
    public function result_press_button()
    {
        echo "<br> button_B";
    }
}
class press{
    public function press_button(button $button){
        return $button->result_press_button();
    }
}

$my_button_A=new button_A();
$my_button_B=new button_B();


$my_press=new press();
$my_press->press_button($my_button_B);





abstract class home{
    public abstract function color();
}

class bild_home_A extends home{
    public function color(){
        echo '<br> строим дом СИНИЙ';
    }
}

class bild_home_B extends home{
    public function color(){
        echo '<br> строим дом Красный';
    }
}

class technology{
    public function bild(home $home){
        return $home->color();
    }
}

$my_A = new bild_home_A();
$my_b = new bild_home_B();

$my_technology=new technology();
$my_technology->bild($my_b);










echo "<pre>";

$mass_assoc = [
            'name'=>"john",
            'age'=>"32",
            'car'=>"MB"
        ];

$mass = ['name','john','age','32','car','MB'];

print_r($mass[1]);

foreach ($mass as $mas){
    echo '<pre>';
    echo $mas;
}


$tovar = ['kola', 'sprite', 'fanta'];

foreach ($tovar as $tov){


    if($tov == 'fanta' || $tov == 'kola'){
        echo '<br>';
        echo $tov;
    }
}


function bludo($gotovit,$ingrideents){
    $mix = $gotovit.'+'.$ingrideents;
    return $mix;
}

$est = bludo('povar','meet, sole');
var_dump($est);


function knife($get, $cut, $put){
    $cut_off = $get.' after '.$cut.' and '.$put;
    return $cut_off;
}

$knife = knife('берем нож', 'режим хлеб', 'раскладываем отрезаные ломтики на поднос');
var_dump($knife);


session_start();
$_SESSION['name']='ALI';        // - (имя_session, значение_session)
var_dump($_SESSION['name']);

setcookie('login','john', '3360');  // - (имя_coockie, значение_coockie, время_жизни_coockie)
var_dump($_COOKIE);


//$pdo= new PDO('mysql:host=192.168.10.10; dbname=oop', 'homestead', 'secret');
//require_once "connect.php";
//$id=1;
//
//$sql='Select * from users where id = 2';
////query
////fetchAll
////PDO::FETCH_ASSOC
//$statement=$pdo->query($sql);
//$users=$statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($users);
//
//foreach ($users as $user){
//    var_dump($user['name']."-".$user['balance']."-".$user['mail']."-".$user['registration']);
//}


//$mail='ivan@mail.ru';
//$sql='insert into users (mail) values (:mail)';
//$stmt=$pdo->prepare($sql);
//$stmt->bindParam(':mail',$mail);
//$stmt->execute();
//
//
//$name = 'ivan';
//$sql = 'insert into users (name) Values (?)';
//$stmt=$pdo->prepare($sql);
//$stmt->bindParam(1,$name);
//$stmt->execute();




//$id=3;
//$sql='SELECT * from users where id=:id';
//$stmt=$pdo->prepare($sql);
//$stmt->bindValue(':id',$id, PDO::PARAM_INT);
//$users=$stmt->execute(array('id'=>$id));

//foreach($users as $user){
////    var_dump($user);
////    print_r($user);
//}
//$pdo = new PDO('mysql:host=192.168.10.10; dbname=oop; charset=utf8','root','secret');
//$DSN = 'mysql:host=192.168.10.10; dbname=oop; charset=utf8';
//$login = 'homestead';
//$pass = 'secret';
//$options = '';
//$pdo = new PDO($DSN, $login, $pass);
//
//$sql = 'Select * from users where id=1';
//$stmt = $pdo->prepare($sql);
//$stmt->execute();
//$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//foreach($users as $user){
//    var_dump($user['name']);
//}


$pdo=new PDO('mysql:host=192.168.10.10; dbname=oop; charset=utf8', 'homestead', 'secret');
$sql='select * from users where id=1';
$stmt=$pdo->prepare($sql);
$stmt->execute();
$users=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user){
    var_dump($user['name']);
}

echo '<pre>';




function factorial($n)
{
    if($n <= 1){return 1;}
    return $n * factorial($n - 1);
}

echo factorial(4);

echo '<br> <br>';

?>

<form action="old.php" method="post">
    <input type="text" name="text">
    <input type=submit  value="submit button">
</form>









