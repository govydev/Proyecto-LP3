<?php

class Distribuidor{
    
    private $id_distribuidor;
    private $nombre;
    private $ruc;

    public function setId_distribuidor($id){
        $this->id=$id;
    } 

    public function getId_distribuidor(){
        return $this->id;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    } 

    public function getNombre(){
        return $this->nombre;
    }
    public function setRuc($ruc){
        $this->ruc=$ruc;
    } 

    public function getRuc(){
        return $this->ruc;
    }
}
    