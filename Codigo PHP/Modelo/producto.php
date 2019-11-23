<?php

    class Producto{
        private $id_producto;
        private $nombre;
        private $stock;
        private $f_vencimiento;
        private $p_venta;

        public function setId_producto($id_producto){
            $this->id_producto=$id_producto;
        } 
    
        public function getId_producto(){
            return $this->id_producto;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        } 
    
        public function getNombre(){
            return $this->nombre;
        }
        public function setStock($stock){
            $this->stock=$stock;
        } 
    
        public function getStock(){
            return $this->stock;
        }
        public function setF_vencimiento($f_vencimiento){
            $this->f_vencimiento=$f_vencimiento;
        } 
    
        public function getF_vencimiento(){
            return $this->f_vencimiento;
        }
        public function setP_venta($p_venta){
            $this->p_venta=$p_venta;
        } 
    
        public function getP_venta(){
            return $this->p_venta;
        }
    }
?>