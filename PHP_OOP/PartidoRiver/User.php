<?php



abstract class Usuario
{
    protected $username;
    protected $email;
    protected $password;
    protected $usuariosSeguidos = [];

    public function __construct($username, $email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    protected function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getUsuariosSeguidos()
    {
        return $this->usuariosSeguidos;
    }

    public function setUsuariosSeguidos($usuario)
    {
        $this->usuariosSeguidos[] = $usuario;
    }

    abstract public function seguir ($usuario);


}