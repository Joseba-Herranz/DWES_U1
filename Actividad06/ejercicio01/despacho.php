<?php
class despacho extends espacio
{
    private String $nombre;
    
    public function __construct(String $nombre){
        $this->nombre = $nombre;
    }
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }   
}
?>