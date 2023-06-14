<?php

namespace Tests\Feature;

use App\Models\User\AuthToken;
use App\Models\User\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected $admin_token;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        
        $response = $this->postJson('api/v1/auth/login',[
            'username' => env('ADMIN_USERNAME'),
            'password' => env('ADMIN_PASSWORD'),
        ]);

        $this->admin_token = $response['data']['Authorization'];
    }

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_user()
    {
        $response = $this->postJson('api/v1/user/insert',[]);
        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_user()
    {
        $response = $this
            ->withHeaders([
                'Authorization' => 'Bearer ' . $this->admin_token
            ])
            ->postJson('api/v1/user/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
}
