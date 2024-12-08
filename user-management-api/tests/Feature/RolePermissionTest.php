<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class RolePermissionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_role_can_be_assigned_to_a_user()
    {
        $user = User::factory()->create();
        $role = Role::factory()->create();

        $user->roles()->attach($role);

        $this->assertTrue($user->roles->contains($role));
    }

    /** @test */
    public function a_permission_can_be_assigned_to_a_role()
    {
        $role = Role::factory()->create();
        $permission = Permission::factory()->create();

        $role->permissions()->attach($permission);

        $this->assertTrue($role->permissions->contains($permission));
    }

    /** @test */
    public function a_permission_can_be_assigned_to_a_user()
    {
        $user = User::factory()->create();
        $permission = Permission::factory()->create();

        $user->permissions()->attach($permission);

        $this->assertTrue($user->permissions->contains($permission));
    }
}