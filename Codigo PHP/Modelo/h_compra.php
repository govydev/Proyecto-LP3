<?php

class HCompra{
    private $id_compra;
    private $precio_compra;
    private $fecha_compra;
    private $cantidad_compra;
    private $total_compra;
    private $id_producto;
    private $id_distribuidor;

    public function setId_compra($id_compra){
        $this->id_compra=$id_compra;
    } 

    public function getId_compra(){
        return $this->id_compra;
    }
    public function setPrecio_compra($precio_compra){
        $this->precio_compra=$precio_compra;
    } 

    public function getPrecio_compra(){
        return $this->precio_compra;
    }
    public function setFecha_compra($fecha_compra){
        $this->fecha_compra=$fecha_compra;
    } 

    public function getFecha_compra(){
        return $this->fecha_compra;
    }
    public function setCantidad_compra($cantidad_compra){
        $this->cantidad_compra=$cantidad_compra;
    } 

    public function getCantidad_compra(){
        return $this->cantidad_compra;
    }
    public function setTotal_compra($total_compra){
        $this->total_compra=$total_compra;
    } 

    public function getTotal_compra(){
        return $this->total_compra;
    }
    public function setId_producto($id_producto){
        $this->id_producto=$id_producto;
    } 

    public function getId_producto(){
        return $this->id_producto;
    }
    public function setId_distribuidor($id_distribuidor){
        $this->id_distribuidor=$id_distribuidor;
    } 

    public function getId_distribuidor(){
        return $this->id_distribuidor;
    }
}