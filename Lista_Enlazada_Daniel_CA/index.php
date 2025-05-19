<?php
    class Nodo {
        public $dato;
        public $siguiente;
        
        public function __construct($dato) {
            $this->dato = $dato;
            $this->siguiente = null;
        }
    }

    class primeraLista {

        public $cabeza;
        public function __construct() {
            $this->cabeza = null;
        }

        public function insertar($dato) {
            $nuevoNodo = new Nodo($dato);
            $nuevoNodo->siguiente=$this->cabeza;
            $this->cabeza=$nuevoNodo;
        }
        
        public function imprimirHTML(){
            $actual = $this->cabeza;
            echo "<ul>";

            while($actual!=null) {
            echo "<li>".$actual ->dato."</li>";
            $actual=$actual->siguiente;
            }

            echo "</ul>";
                    
        }
    }

$lista = new primeraLista()

$lista->insertar("Slowdive");
$lista->insertar("Lush");
$lista->insertar("My Bloody Valentine");

$lista->imprimirHTML()

?>
