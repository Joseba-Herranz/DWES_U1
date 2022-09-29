<?php 
abstract class persona {
    private string $name;
    private $dni;
    private $email;
    
    public function __construct(string $name, $dni, $email){
        $this->name =$name;
        $this->dni = $dni;
        $this->email = $email;
    }
}
?>