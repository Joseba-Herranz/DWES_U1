<?php
    class CentroFp
    {
        private $cod;
        private $nombre;
        
        public function consturctor($cod, $nombre){
            $this->cod = $cod;
            $this->nombre = $nombre;
        }
        public function get_cod(){
            return $this->cod;
        }
        public function get_nombre(){
            return $this->nombre;
        }
        public function set_nombre($nombre) {
            $this->nombre = $nombre;
        }
        public function set_cod($cod){
            $this->cod = $cod;   
        }
    }
?>