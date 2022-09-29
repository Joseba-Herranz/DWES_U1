<?php
abstract class espacio
{
    private $puntoWifi;
    private int $puntosRed;

    public function __construct($puntoWifi, int $puntosRed){
        $this->puntoWifi = $puntoWifi;
        $this->puntosRed = $puntosRed;
    }
    public function getPuntoWifi()
    {
        return $this->puntoWifi;
    }


    public function getPuntosRed()
    {
        return $this->puntosRed;
    }


    public function setPuntoWifi($puntoWifi)
    {
        $this->puntoWifi = $puntoWifi;
    }


    public function setPuntosRed($puntosRed)
    {
        $this->puntosRed = $puntosRed;
    }

}

?>