<?php
namespace Src\Modules\User\Entity;

class User {
    private int $id;
    private string $email;
    private string $password;
    private int $tariff_id;
    private string $tariff_date_end;
    private string $token;
    private string $created_at;
    private string $updated_at;
    private string $deleted_at;

    private function __construct(
        int $id, string $email, string $password, string $tariff_id, string $tariff_date_end,
        string $token, string $created_at, string $updated_at, string $deleted_at)
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

    public static function create(
        int $id, string $email, string $password, string $tariff_id, string $tariff_date_end,
        string $token, string $created_at, string $updated_at, string $deleted_at) :self
    {
        return new self($id, $email, $password, $tariff_id, $tariff_date_end, $token, $created_at, $updated_at, $deleted_at);
    }

    public function edit(
        int $id, string $email, string $password, string $tariff_id, string $tariff_date_end,
        string $token, string $created_at, string $updated_at, string $deleted_at) :void
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

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getTariffId(): int
    {
        return $this->tariff_id;
    }

    public function setTariffId(int $tariff_id): void
    {
        $this->tariff_id = $tariff_id;
    }

    public function getTariffDateEnd(): string
    {
        return $this->tariff_date_end;
    }

    public function setTariffDateEnd(string $tariff_date_end): void
    {
        $this->tariff_date_end = $tariff_date_end;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    public function getDeletedAt(): string
    {
        return $this->deleted_at;
    }

    public function setDeletedAt(string $deleted_at): void
    {
        $this->deleted_at = $deleted_at;
    }
}
