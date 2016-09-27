<?php
/**
 * Created by PhpStorm.
 * User: Gabriel braga e Igor Tadaiuki
 * Date: 21/09/2016
 * Time: 17:36
 */
declare (strict_types=1);
use bancos\AllBank;

$banco = new AllBank("0416" , "01208" , 2);
echo $banco->getAgencia();
echo "nao da";


function __autoload ($class){
    $class = str_replace('\\','/',$class).'.php';
    require_once ($class);
}
