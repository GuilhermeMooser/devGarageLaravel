<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        // Buscar ou criar o papel padrão (por exemplo, "User")
        $defaultRole = Role::firstOrCreate(['name' => 'User']);

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // senha padrão para testes
            'remember_token' => Str::random(10),
            'role_id' => $defaultRole->id,
        ];
    }

    /**
     * Estado de fábrica para usuários com e-mails não verificados
     */
    public function unverified()
    {
        return $this->state(fn() => ['email_verified_at' => null]);
    }
}
