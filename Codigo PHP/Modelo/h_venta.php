<?php

class HVenta{
    private $id_venta;
    private $fecha_venta;
    private $cantidad_venta;
    private $total_venta;
    private $id_producto;

    public function setId_venta($id_venta){
        $this->id_venta=$id_venta;
    } 

    public function getId_venta(){
        return $this->id_venta;
    }
    public function setFecha_venta($fecha_venta){
        $this->fecha_venta=$fecha_venta;
    } 

    public function getFecha_venta(){
        return $this->fecha_venta;
    }
    public function setCantidad_venta($cantidad_venta){
        $this->cantidad_venta=$cantidad_venta;
    } 

    public function getCantidad_venta(){
        return $this->cantidad_venta;
    }
    public function setTotal_venta($total_venta){
        $this->total_venta=$total_venta;
    } 

    public function getTotal_venta(){
        return $this->total_venta;
    }
    public function setId_producto($id_producto){
        $this->id_producto=$id_producto;
    } 

    public function getId_producto(){
        return $this->id_producto;
    }
}