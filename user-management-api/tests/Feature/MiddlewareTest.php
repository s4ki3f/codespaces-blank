<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use App\Models\User;
use App\Models\Permission;
use Laravel\Passport\Passport;

class MiddlewareTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Clear caches
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');

        // Register middleware manually
        $this->app['router']->aliasMiddleware('permission', \App\Http\Middleware\CheckPermissions::class);

        // Enable middleware
        $this->withMiddleware();
    }

    /** @test */
    public function it_allows_access_with_proper_permission()
    {
        $user = User::factory()->create();
        $permission = Permission::factory()->create(['name' => 'view-users']);
        $user->permissions()->attach($permission);

        Passport::actingAs($user);

        $response = $this->getJson('/api/users');

        $response->assertStatus(200);
    }

    /** @test */
    public function it_denies_access_without_proper_permission()
    {
        $user = User::factory()->create();

        Passport::actingAs($user);

        $response = $this->getJson('/api/users');

        $response->assertStatus(403);
    }
}