<?php

class Usuario {
   private $id;
   private $nombre;
   private $email;
   private $password;
   private $fecha_registro;
   private $activo;
   
   public function __construct($id, $nombre, $email, $password,$fecha_registro, $activo) {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->email = $email;
       $this->password = $password;
       $this->password = $fecha_registro;
       $this->activo = $activo;
   }
   
   public function getId() {
       return $this->id;
   }

   public function getNombre() {
       return $this->nombre;
   }

   public function getEmail() {
       return $this->email;
   }

  public  function getPassword() {
       return $this->password;
   }

   public function getFecha_registro() {
       return $this->fecha_registro;
   }

   public function getActivo() {
       return $this->activo;
   }
   
   
   
   function setId($id) {
       $this->id = $id;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setPassword($password) {
       $this->password = $password;
   } 


   function setActivo($activo) {
       $this->activo = $activo;
   }
   
}
