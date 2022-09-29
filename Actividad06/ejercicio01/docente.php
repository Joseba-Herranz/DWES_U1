<?php
class docente extends persona
{
    private $sueldo;
    /**
     * @return mixed
     */
    public function __construct(int $sueldo){
        $this->sueldo = $sueldo;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * @param mixed $sueldo
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }

}