<?php
namespace Users;
include 'User.php';
use Users\User;
class UserRepository extends User{
	private $repositoryPath = __DIR__ .'/../users-repo/';

	public function createRepo() {
		return mkdir($this->repositoryPath.$this->getEmail(), 0777);
	}
	public function updateRepo($current, $new) {
		return rename($this->repositoryPath.$current, $this->repositoryPath.$new);
	}
	public function deleteRepo() {
		return rmdir($this->repositoryPath.$this->getEmail());
	}
}
?>