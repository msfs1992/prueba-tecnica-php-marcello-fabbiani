<?php
include __DIR__ . "/../src/UserRepository.php";
use PHPUnit\Framework\TestCase;
use \Users\User;
use \Users\UserRepository;
final class UserTest extends TestCase
{
    public function testSetName(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $this->assertNull($user->setName('Jhon'));
    }
    public function testGetName(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $user->setName('Jhon');
        $this->assertIsString($user->getName());
    }
    public function testSetAge(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $this->assertNull($user->setAge(20));
    }
    public function testGetAge(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $user->setAge(20);
        $this->assertIsInt($user->getAge());
    }
    public function testSetEmail(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $this->assertNull($user->setEmail('jhon@gmail.com'));
    }
    public function testGetEmail(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $user->setEmail('jhon@gmail.com');
        $this->assertIsString($user->getEmail());
    }
    public function testSetPhone(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $this->assertNull($user->setPhone('+59893850675'));
    }
    public function testGetPhone(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $user->setPhone('+59893850675');
        $this->assertIsString($user->getPhone());
    }
    public function testSetAddress(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $this->assertNull($user->setAddress('Uruguay, Montevideo'));
    }
    public function testGetAddress(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $user->setAddress('Uruguay, Montevideo');
        $this->assertIsString($user->getAddress());
    }
    public function testSetDescription(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $this->assertNull($user->setDescription('Active user'));
    }
    public function testGetDescription(): void
    {
        $user = new User('Jhon Doe', 'jhon@gmail.com');
        $user->setDescription('Active user');
        $this->assertIsString($user->getDescription());
    }
    public function testUserRepositoryCreateRepo() {
        $user = new UserRepository('Jhon Doe', 'jhon@gmail.com');
        $this->assertTrue($user->createRepo());
    }
    public function testUserRepositoryUpdateRepo() {
        $user = new UserRepository('Jhon Doe', 'jhon@gmail.com');
        $this->assertDirectoryExists(__DIR__ . '/../users-repo/'.$user->getEmail());
        $user->updateRepo($user->getEmail(), 'doe@gmail.com');
    }
    public function testUserRepositoryDeleteRepo() {
        $user = new UserRepository('Jhon Doe', 'doe@gmail.com');
        $this->assertDirectoryExists(__DIR__ . '/../users-repo/'.$user->getEmail());
        $user->deleteRepo($user->getEmail());
    }
}