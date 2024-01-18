<?php
namespace Src\Modules\User\Entity;

class User {
    private $id;
    private $email;
    private $password;
    private $tariff_id;
    private $tariff_date_end;
    private $token;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    private function __construct($id, $email, $password, $tariff_id, $tariff_date_end, $token, $created_at, $updated_at, $deleted_at)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->tariff_id = $tariff_id;
        $this->tariff_date_end = $tariff_date_end;
        $this->token = $token;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    public static function create($id, $email, $password, $tariff_id, $tariff_date_end, $token, $created_at, $updated_at, $deleted_at) :self
    {
        return new self($id, $email, $password, $tariff_id, $tariff_date_end, $token, $created_at, $updated_at, $deleted_at);
    }

    public function edit($id, $email, $password, $tariff_id, $tariff_date_end, $token, $created_at, $updated_at, $deleted_at) :void
    {
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setTariffId($tariff_id);
        $this->setTariffDateEnd($tariff_date_end);
        $this->setToken($token);
        $this->setCreatedAt($created_at);
        $this->setUpdatedAt($updated_at);
        $this->setDeletedAt($deleted_at);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getTariffId()
    {
        return $this->tariff_id;
    }

    public function setTariffId($tariff_id)
    {
        $this->tariff_id = $tariff_id;
    }

    public function getTariffDateEnd()
    {
        return $this->tariff_date_end;
    }

    public function setTariffDateEnd($tariff_date_end)
    {
        $this->tariff_date_end = $tariff_date_end;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    public function setDeletedAt($deleted_at)
    {
        $this->deleted_at = $deleted_at;
    }
}
