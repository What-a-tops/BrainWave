<?php
namespace App\Validation;
use App\Models\UserModel;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data) {
        $model = new UserModel();
        $user = $model->where('email', $data['email'])->first();

        if (!$user) return false;
        $hash  = password_hash($user['password'], PASSWORD_BCRYPT);
        return password_verify($data['password'], $hash);
    }
}
