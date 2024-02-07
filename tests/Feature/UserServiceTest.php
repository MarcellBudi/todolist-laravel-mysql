<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\UserService;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserService $userService;

    protected function setUp():void
    {
        parent::setUp();
        
        DB::delete("delete from users");

        $this->userService = $this->app->make(UserService::class);
    }

    // public function testSample() {
    //     self::assertTrue(true);
    // }

    public function testLoginSuccess()
    {
        $this->seed(UserSeeder::class);
        self::assertTrue($this->userService->login("eko@localhost", "rahasia"));
    }

    public function testLoginUserNotFound()
    {
        self::assertFalse($this->userService->login("cell", "cell"));
    }

    public function testLoginWrongPassword()
    {
        self::assertFalse($this->userService->login("budi", "salah"));
    }
}
