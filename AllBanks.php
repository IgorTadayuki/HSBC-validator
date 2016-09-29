<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Braga e Igor Tadayuki
 * Date: 21/09/2016
 * Time: 17:36
 */

declare (strict_types=1);

namespace Bancos;

class AllBank
{
    protected $ValueMultHSBC = "8923456789";
    protected $soma = 0;
    protected $Digito = 0;
    protected $valor;
    protected $nbanco;
    protected $nconta;
    protected $odigito;

    public function __construct (string $agencia ,string $conta ,int $digito)
    {
        $this->nbanco = $agencia;
        $this->nconta = $conta;
        $this->odigito = $digito;
    }

    public function SomaHSBC()
    {
        $size = strlen($this->nbanco);
        $cont = 0;
        $cont1 = 0;

        while ($cont1 < $size) {
            $this->soma = $this->soma + (int)$this->ValueMultHSBC[$cont1] * (int)$this->nbanco[$cont1];
           echo (int)$this->ValueMultHSBC[$cont1];
            $cont1 = $cont1 + 1;
        }

        $size = strlen($this->nconta);

        while ($cont1 < $size) {
            $this->soma = $this->soma + (int)$this->ValueMultHSBC[$cont1] * (int)$this->nconta[$cont];
            $cont1 = $cont1 + 1;
            $cont = $cont +1;
        }
        $this->Digito = $this->soma % 11;
        return $this->Digito;
    }

    public function Verificacao ($digito)
    {
        $this->SomaHSBC();
        if ($this->Digito == $digito) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getAgencia():string
    {
        return $this->nconta;
    }

    public function getNconta(): string
    {
        return $this->nconta;
    }
}
