<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition()
    {
        return [
            'name' => 'User', // valor padrão, mas pode ser alterado conforme necessário
        ];
    }

    // Método para criar um papel de Admin
    public function admin()
    {
        return $this->state([
            'name' => 'Admin',
        ]);
    }
}
