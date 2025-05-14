<?php

class Nodo {    
public $dato;
public $siguiente;
public function __construct($dato) {
$this->dato = $dato;
$this->siguiente = null;
}
}

class PrimeraLista{
    public $cabeza;
    public function __construct(){
        $this->cabeza = null; 
    }

    public function insertar ($dato){
        $nuevoNodo = new nodo($dato);
        $nuevoNodo->siguiente=$this->cabeza;
        $this->cabeza=$nuevoNodo;
        }

        public function imprimirHTML(){
            $actual = $this->cabeza;
            echo"<ul>";

            while($actual!=null){
            echo "<li>".$actual ->dato."</li>";
            $actual=$actual->siguiente;
            }

            echo"</ul>";

            }
            }
$lista = new PrimeraLista(); 

$lista->insertar("Capibara");
$lista->insertar("Pajaro");
$lista->insertar("Huron");
$lista->imprimirHTML();
?>
