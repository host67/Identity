<?php
namespace Src\Modules\User\Entity;

class User {
    private int $id;
    private string $email;
    private string $password;
    private int $tariff_id;
    private int $tariff_date_end;
    private string $token;
    private int $created_at;
    private int $updated_at;
    private int $deleted_at;

    private function __construct(
        int $id, string $email, string $password, int $tariff_id, int $tariff_date_end,
        string $token, int $created_at, int $updated_at, int $deleted_at)
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
        int $id,
        string $email,
        string $password,
        int $tariff_id,
        int $tariff_date_end,
        string $token,
        int $created_at,
        int $updated_at,
        int $deleted_at) :self
    {
        return new self(
            id: $id,
            email: $email,
            password: $password,
            tariff_id: $tariff_id,
            tariff_date_end: $tariff_date_end,
            token: $token,
            created_at: $created_at,
            updated_at: $updated_at,
            deleted_at: $deleted_at
        );
    }

    public function edit(
        string $email, string $password, int $tariff_id, int $tariff_date_end,
        string $token, int $created_at, int $updated_at, int $deleted_at) :void
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

    public function getTariffDateEnd(): int
    {
        return $this->tariff_date_end;
    }

    public function setTariffDateEnd(int $tariff_date_end): void
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

    public function getCreatedAt(): int
    {
        return $this->created_at;
    }

    public function setCreatedAt(int $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt(): int
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(int $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    public function getDeletedAt(): int
    {
        return $this->deleted_at;
    }

    public function setDeletedAt(int $deleted_at): void
    {
        $this->deleted_at = $deleted_at;
    }
}