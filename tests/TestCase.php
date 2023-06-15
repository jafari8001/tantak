<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

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

    protected function sendAdminAuthenticatedPost($url , $data)
    {
        return $response = $this
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $this->admin_token
                ])
                ->postJson($url,$data);
    }
}
