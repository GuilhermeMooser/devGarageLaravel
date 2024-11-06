<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Vehicle;
use App\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class VehicleControllerTest extends TestCase
{
    use RefreshDatabase;
    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        Role::factory()->create(['name' => 'user']);

        $this->user = User::factory()->create(['role_id' => Role::first()->id]);
    }

    public function test_index_returns_vehicles()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'name' => 'Carro Exemplo',
            'model' => 'Modelo X',
            'year' => '2024',
            'mark' => 'Marca Y',
            'photo' => null,
            'characteristics' => 'Algumas características do carro.',
            'type' => Vehicle::TYPE_CAR,
            'price' => 50000,
            'user_id' => $user->id,
        ];

        $response = $this->post(route('vehicle.store'), $data);

        $vehicleId = Vehicle::latest()->first()->id;

        $response->assertRedirect(route('vehicle.show', $vehicleId));

        $this->assertDatabaseHas('vehicles', $data);
    }

    public function test_store_creates_vehicle()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'name' => 'Carro Exemplo',
            'model' => 'Modelo X',
            'year' => '2024',
            'mark' => 'Marca Y',
            'photo' => null,
            'characteristics' => 'Algumas características do carro.',
            'type' => Vehicle::TYPE_CAR,
            'price' => 50000,
            'user_id' => $user->id,
        ];

        $response = $this->post(route('vehicle.store'), $data);

        $vehicleId = Vehicle::latest()->first()->id;

        $response->assertRedirect(route('vehicle.show', $vehicleId));

        $this->assertDatabaseHas('vehicles', $data);
    }


    public function test_show_displays_vehicle()
    {

        $user = User::factory()->create();
        if ($user instanceof \Illuminate\Database\Eloquent\Collection) {
            $user = $user->first();
        }

        $this->actingAs($user);

        $vehicle = Vehicle::factory()->create();

        $response = $this->get(route('vehicle.show', $vehicle->id));

        $response->assertStatus(200);
        $response->assertViewIs('vehicle.show');
        $response->assertViewHas('vehicle', $vehicle);
    }

    public function test_update_vehicle()
    {
        $user = User::factory()->create();
        if ($user instanceof \Illuminate\Database\Eloquent\Collection) {
            $user = $user->first();
        }

        $this->actingAs($user);

        $vehicle = Vehicle::factory()->create();

        $data = [
            'name' => 'Carro Atualizado',
            'model' => 'Modelo Y',
            'year' => '2021',
            'mark' => 'Marca Z',
            'characteristics' => 'Características atualizadas',
            'type' => Vehicle::TYPE_CAR,
            'price' => 25000,
        ];

        $response = $this->put(route('vehicle.update', $vehicle->id), $data);

        $response->assertRedirect(route('vehicle.show', $vehicle->id));
        $this->assertDatabaseHas('vehicles', $data);
    }

    public function test_destroy_vehicle()
    {
        $user = User::factory()->create();
        if ($user instanceof \Illuminate\Database\Eloquent\Collection) {
            $user = $user->first();
        }

        $this->actingAs($user);

        $vehicle = Vehicle::factory()->create();

        $response = $this->delete(route('vehicle.destroy', $vehicle->id));

        $response->assertRedirect(route('vehicle.index'));
        $this->assertDatabaseMissing('vehicles', ['id' => $vehicle->id]);
    }

    public function test_create_returns_view()
    {
        $user = User::factory()->create();

        if ($user instanceof \Illuminate\Database\Eloquent\Collection) {
            $user = $user->first();
        }

        $this->actingAs($user);

        $response = $this->get(route('vehicle.create'));

        $response->assertStatus(200);
        $response->assertViewIs('vehicle.create');
        $response->assertViewHas('userName', $user->name);
    }


    public function test_edit_returns_view()
    {
        $user = User::factory()->create();
        if ($user instanceof \Illuminate\Database\Eloquent\Collection) {
            $user = $user->first();
        }

        $this->actingAs($user);

        $vehicle = Vehicle::factory()->create();

        $response = $this->get(route('vehicle.edit', $vehicle->id));

        $response->assertStatus(200);
        $response->assertViewIs('Vehicle.edit');
        $response->assertViewHas('vehicle', $vehicle);
    }
}
