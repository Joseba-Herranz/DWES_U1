<?php
class variado extends espacio
{
    private String $tipo;
    
    public function __construct(String $tipo){
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}

?>