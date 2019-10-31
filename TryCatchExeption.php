<?php
class First_MY_Exception extends Exception {};
class Second_MY_Exception extends Exception{};

class Accounts{
    private $balance = 0;

    public function withdraw($amount){
        if($this->balance==0){
            throw new First_MY_Exception("Пополните баланс");
        }
        if($this->balance==5){
            throw new Second_MY_Exception("Если балан 5 нельзя снимать");
        }

    }

}

try{
    $bankAccount = new Accounts();
    $bankAccount->withdraw(123);

    }catch (First_MY_Exception $exception){
    //    echo "какая то ошибка";
        echo $exception->getMessage();

    }catch (Second_MY_Exception $exception){
    //    echo "какая то ошибка";
        echo $exception->getMessage();
    }