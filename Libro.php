<?php
    class libro {
        public $isbn;
        public $titulo;
        public $autor;
        public $fecha;
        
        public function __construct($isbn, $titulo, $autor, $fecha) {
          $this->ibsn = $isbn;
          $this->titulo = $titulo;
          $this->autor = $autor;
          $this->fecha = $fecha;
        }

        public function getISBN(){
          return $this->ibsn;
        }

        public function getTitulo(){
          return $this->titulo;
        }

        public function getAutor(){
          return $this->autor;
        }

        public function getFecha(){
          return $this->fecha;
        }

        public function setISBN(){
            $this->ibsn = $isbn;
        }
  
          public function setTitulo(){
            $this->titulo = $titulo;
        }
  
          public function setAutor(){
            $this->autor = $autor;
        }
  
          public function setFecha(){
            $this->fecha = $fecha;
        }

    }

?>