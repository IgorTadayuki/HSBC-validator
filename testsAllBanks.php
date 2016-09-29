<?php
/**
 * Created by PhpStorm.
 * User: GABIJU
 * Date: 27/09/2016
 * Time: 20:08
 */

namespace tests;
use Bancos\AllBank;



class AllBanksTest extends \PHPUnit_Framework_TestCase
{
    public $Obj1;

    public function testConstructor() {

        $this->Obj1 = new AllBank ('0146', '012542', 21;
        $this->assertEquals($this->Obj1->getAgencia(), '0146');
    }

    public function testDigitoFinal (){

        $this->Obj1= new AllBank ('0146' , '012542' , 1);
        $this->assertEquals($this->Obj1->Verificacao(2) , 2);

    }

    public function testNconta (){

        $this->Obj1= new AllBank ('0146' , '012542' , 1);
        $this->assertEquals($this->Obj1->getNconta() , '012542');

    }

    public function testAgencia (){

        $this->Obj1= new AllBank ('0146' , '012542' , 1);
        $this->assertEquals($this->Obj1->getAgencia() , '0146');

    }

}
