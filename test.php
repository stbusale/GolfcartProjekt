<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testCorrectLogin()
    {
        // Simuliere einen POST-Request mit den richtigen Anmeldedaten
        $_POST['username'] = 'admin';
        $_POST['password'] = 'Leumas5002';

        // Führe die Login-Überprüfung durch
        require 'login.php';

        // Überprüfe, ob eine Session gestartet wurde
        $this->assertArrayHasKey('username', $_SESSION);
        $this->assertArrayHasKey('password', $_SESSION);
        $this->assertEquals('admin', $_SESSION['username']);
        $this->assertEquals('Leumas5002', $_SESSION['password']);
    }

    public function testIncorrectLogin()
    {
        // Simuliere einen POST-Request mit falschen Anmeldedaten
        $_POST['username'] = 'fake_user';
        $_POST['password'] = 'fake_password';

        // Führe die Login-Überprüfung durch
        require 'login.php';

        // Überprüfe, ob ein Fehler aufgetreten ist
        $this->assertStringContainsString('Falscher Benutzername oder Passwort.', $error);
    }
}
?>
