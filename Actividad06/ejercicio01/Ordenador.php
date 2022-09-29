<?php
class ordenador
{
    private $codhz;
    private int $esSobremesa;
    
    function __construc($codhz, int $esSobremesa){
        $this->codhz = $codhz;
        $this->esSobremesa = $esSobremesa;
    }
    
    public function getCodhz()
    {
        return $this->codhz;
    }

    public function getEsSobremesa()
    {
        return $this->esSobremesa;
    }

    public function setCodhz($codhz)
    {
        $this->codhz = $codhz;
    }

    public function setEsSobremesa($esSobremesa)
    {
        $this->esSobremesa = $esSobremesa;
    }
}
?>