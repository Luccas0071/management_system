<?php
include_once '../classes/model/Security.php';

class SecurityForm {

    private $login;
    private $password;
 
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function validate($request){

        $user = $request['user'];
        $pasword = $request['password'];

        print_r("login: " . $user);
        print_r("Senha: " . $pasword);

        if($user){
            echo  "<script>alert('Preencha o campo Login !);</script>";

            // javascript:alert('Email enviado com Sucesso!');
            // Log::alert("message");
            // throw new Exception("Login não ");
        }

        if($pasword){
            echo  "<script>alert('Preencha o campo Senha !);</script>";
            throw new Exception("Senha não ");
        }




    }

    public function transferRequestForm($request){
        
        // $this->setShare($request['share']);
        // $this->setId($request['idUser']);
        // $this->setName($request['name']);
        // $this->setEmail($request['email']);
        // $this->setStatus($request['status']);
        // $this->setCreationDate($request['creationDate']);

    }

    public function transferFormModel(){

        // $objUser = new User();

        // $objUser->setShare($this->getShare());
        // $objUser->setId($this->getId());
        // $objUser->setName($this->getName());
        // $objUser->setEmail($this->getEmail());
        // $objUser->setStatus($this->getStatus());
        // $objUser->setCreationDate($this->getCreationDate());

        // return $objUser;
    }

    public function transferModelForm($objUser){

        // $this->setShare($objUser->getShare());
        // $this->setId($objUser->getId());
        // $this->setName($objUser->getName());
        // $this->setEmail($objUser->getEmail());
        // $this->setStatus($objUser->getStatus());
        // $this->setCreationDate($objUser->getCreationDate());
        // $this->setUpdateDate($objUser->getUpdateDate());

        // return $this;
    }

   

     
    
}