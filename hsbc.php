<?php
/**
 * Created by PhpStorm.
 * User: Gabriel braga e Igor Tadayuki
 * Date: 19/09/2016
 * Time: 17:44
 */

declare (strict_types=1);

namespace bancos;

/***
 * Class hsbc
 * @package hsbc
 */
class hsbc
{
    protected $pesoagencia = "8923";
    protected $pesoCont = "45689";
    protected $pesoDigt = "9";

    protected $soma =0;
    protected $Digito = 0;
    protected $valor;
    protected $i;

    protected $nbanco;
    protected $nconta;
    protected $odigito;

    public function __construct(string $agencia , string $conta , string $digito)
    {
        $this->nconta = $conta;
        $this->nbanco = $agencia;
        $this->odigito = $digito;
    }

    private function Soma($soma)
    {
        for ($this->i = 0 ; $this->i < 4 ; $this->i++) {
            $soma = $this->pesoagencia[$this->i] * $this->nbanco[$this->i] +  $soma;
        }

        for ($this->i = 0 ; $this->i < 5 ; $this->i++) {
            $soma = $this->pesoCont[$this->i] * $this->nconta[$this->i] +  $soma;
        }
            $soma = $this->pesoDigt * $this->odigito + $soma;

        $this->Digito = $this->soma % 11;
    }

    public function Verificar(int $digito)
    {
        $this->Soma($this->soma);

        if ($this->Digito == $digito) {
            return true;
        } else {
            return false;
        }
    }
}
