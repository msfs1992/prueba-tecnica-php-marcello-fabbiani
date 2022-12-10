<?php
namespace Users;
class User{
	private $fullName;
	private $age;
	private $email;
	private $phone;
	private $address;
	private $description;
	public function __construct($fullname, $email) {
		$this->fullName = $fullname;
		$this->email = $email;
	}
	public function setName($name) {
		$this->fullName = $name;
	}
	public function getName() {
		return $this->fullName;
	}
	public function setAge($age) {
		$this->age = $age;
	}
	public function getAge() {
		return $this->age;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setPhone($phone) {
		$this->phone = $phone;
	}
	public function getPhone() {
		return $this->phone;
	}
	public function setAddress($address) {
		$this->address = $address;
	}
	public function getAddress() {
		return $this->address;
	}
	public function setDescription($description) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
}
?>