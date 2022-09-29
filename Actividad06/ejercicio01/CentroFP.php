<?php
    class CentroFp
    {
        private $cod;
        private $nombre;
        
        public function __construct($cod, $nombre){
            $this->cod = $cod;
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getCod()
        {
            return $this->cod;
        }
    
        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }
    
        /**
         * @param mixed $cod
         */
        public function setCod($cod)
        {
            $this->cod = $cod;
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