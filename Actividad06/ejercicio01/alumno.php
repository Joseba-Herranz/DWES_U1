<?php
class alumno extends persona
{
    private String $codMatricula;
    private String $ciclo;
    /**
     * @return mixed
     */
    
    public function __construct(String $codMatricula, String $ciclo){
        $this->codMatricula = $codMatricula;
        $this->ciclo = $ciclo;
    }
    public function getCodMatricula()
    {
        return $this->codMatricula;
    }

    /**
     * @return mixed
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }

    /**
     * @param mixed $codMatricula
     */
    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;
    }

    /**
     * @param mixed $ciclo
     */
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }

    
}
?>