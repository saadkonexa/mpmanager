<?php

namespace App\Services;

use App\Entities\UserEntity;

interface IUserService
{
    public function create(array $userData);

    public function update($user, $data);

    public function resetPassword(string $email);

    public function list($relations);
}
