<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 6-2-2019
 * Time: 10:50
 */
<?php

class klant{

    public $auto;
    public $naam;
    public $email;

public function  __constructor($auto,$naam,$email){
    $this->auto=$auto;
    $this->naam=$naam;
    $this->email=$email;

}}
class auto{

    public $model;
    public $merk;
    public $bouwjaar;
    public $kenteken;

    public function  __constructor($model , $merk , $bouwjaar , $kenteken){
        $this->model=$model;
        $this->merk=$merk;
        $this->bouwjaar=$bouwjaar;
        $this->kenteken=$kenteken;

    }

}
