<?php
class aula extends espacio
{
    private String $numero;
    private $proyector;
    private $pizarraDigital;
    private $pantallaTactil;
    
    public function __construct(String $numero, $proyector, $pizarraDigital, $pantallaTactil){
        $this->numero = $numero;
        $this->proyector = $proyector;
        $this->pizarraDigital = $pizarraDigital;
        $this->pantallaTactil = $pantallaTactil;
    }
    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return mixed
     */
    public function getProyector()
    {
        return $this->proyector;
    }

    /**
     * @return mixed
     */
    public function getPizarraDigital()
    {
        return $this->pizarraDigital;
    }

    /**
     * @return mixed
     */
    public function getPantallaTactil()
    {
        return $this->pantallaTactil;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @param mixed $proyector
     */
    public function setProyector($proyector)
    {
        $this->proyector = $proyector;
    }

    /**
     * @param mixed $pizarraDigital
     */
    public function setPizarraDigital($pizarraDigital)
    {
        $this->pizarraDigital = $pizarraDigital;
    }

    /**
     * @param mixed $pantallaTactil
     */
    public function setPantallaTactil($pantallaTactil)
    {
        $this->pantallaTactil = $pantallaTactil;
    }

    
}
?>