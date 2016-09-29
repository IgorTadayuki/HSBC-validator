<?php
/**
 * Created by PhpStorm.
 * User: Gabriel braga e Igor Tadaiuki
 * Date: 21/09/2016
 * Time: 17:36
 */
declare (strict_types=1);
use Bancos;

$test = new AllBank("0416" , "01208" , 1);
echo $test->getAgencia() . "<BR>";
echo 'Valor Resultado do Resto da Soma das Multiplicaçoes:  ' . $test->SomaHSBC() . '<BR>';
$test->Verificacao(1);

function __autoload ($class){
    $class = str_replace('\\','/',$class).'.php';
    require_once ($class);
}
