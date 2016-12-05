<?php
include 'Tienda.php';
class Usuario{
	
	private $id;
	private $nombre;
	private $email;
	private $pass;
	private $rut;
	private $activo;
	private $tipo;
	private $tienda;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getPass() {
		return $this->pass;
	}
	public function setPass($pass) {
		$this->pass = $pass;
	}
	public function getRut() {
		return $this->rut;
	}
	public function setRut($rut) {
		$this->rut = $rut;
	}
	public function getActivo() {
		return $this->activo;
	}
	public function setActivo($activo) {
		$this->activo = $activo;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	public function getTienda() {
		return $this->tienda;
	}
	public function setTienda(Tienda $tienda) {
		$this->tienda = $tienda;
	}
	public function __toString(){
		return 'Usuario [id="'.$this->id.'", nombre="'.$this->nombre.'", email="'.$this->email.'", 
		pass="'.$this->pass.'", rut="'.$this->rut.'", activo="'.$this->activo.'", 
		tipo="'.$this->tipo.'", '.$this->tienda.']';
	}
}
?>