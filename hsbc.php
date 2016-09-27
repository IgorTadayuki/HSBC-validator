<?php
/**
 * Created by PhpStorm.
 * User: gabriel braga
 * Date: 21/09/2016
 * Time: 17:44
 */

declare (strict_types=1);

namespace bancos;

class AllBank
{
    protected $ValueMultHSBC = "8923456789";

    protected $soma = 0;
    protected $Digito = 0;
    protected $valor;
    protected $i;

    protected $nbanco;
    protected $nconta;
    protected $odigito;


    public function __construct (string $agencia ,string $conta ,int $digito)
    {
        $this->nbanco = $agencia;
        $this->nconta = $conta;
        $this->odigito = $digito;

    }

    public function getAgencia(){
        return $this->nconta;
    }


    public function SomaHSBC()
    {

        $this->Digito = $this->soma % 11;
    }

    public function Verificar(int $digito)
    {
        $this->SomaHSBC($this->soma);

        if ($this->Digito == $digito) {
            return true;
        } else {
            return false;
        }
    }
}
