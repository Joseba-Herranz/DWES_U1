<?php

class Coche
{
        private $matricula;
        private $color;
        private $marca;
        
        public function __construct($matricula, $color, $marca)
        {
            $this->matricula = $matricula;
            $this->color = $color;
            $this->marca = $marca;
        }
   
        /**
         * @return mixed
         */
        public function getMatricula()
        {
            return $this->matricula;
        }
    
        /**
         * @return mixed
         */
        public function getColor()
        {
            return $this->color;
        }
    
        /**
         * @return mixed
         */
        public function getMarca()
        {
            return $this->marca;
        }
    
        /**
         * @param mixed $matricula
         */
        public function setMatricula($matricula)
        {
            $this->matricula = $matricula;
        }
    
        /**
         * @param mixed $color
         */
        public function setColor($color)
        {
            $this->color = $color;
        }
    
        /**
         * @param mixed $marca
         */
        public function setMarca($marca)
        {
            $this->marca = $marca;
        }
        
        public function printHTML()
        {
            echo '<h2>Datos del coche</h2>';
            echo '<p>Matricula : '.$this->matricula.'</p>';
            echo '<p>Color : '.$this->color.'</p>';
            echo '<p>Marca : '.$this->marca.'</p>';
        }
        
        public function toHTML(){
            return  '<h2>Datos del coche</h2>'.
             '<p>Matricula : '.$this->matricula.'</p>'.
             '<p>Color : '.$this->color.'</p>'.
             '<p>Marca : '.$this->marca.'</p>';
        }
        
        /*
         * serializa un array de coches
         * y guarda en un fichero
         */
        public static function guardarSerializado($nombreFichero, $coches){
            // guardar coches en archivo
            $s = serialize($coches);
            // almacenamos $s en algún lugar en el que page2.php puede encontrarlo.
            file_put_contents($nombreFichero, $s);
        }
        
        /*de un fichero con coches serializados guardado
        devuelve un arrray de coches*/
        public static function getCochesUnselizados($nombreFichero){
            
            $s = file_get_contents($nombreFichero);
            $coches = unserialize($s);
            return $coches;
        }
        
    
}

