<?php

namespace Tests\Feature;

use App\Models\User\AuthToken;
use App\Models\User\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\AssertableJson;
use phpDocumentor\Reflection\Types\Null_;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected $admin_id;

    public function setUp(): void
    {
        parent::setUp();
        
        $response = $this->postJson('api/v1/auth/login',[
            'username' => env('ADMIN_USERNAME'),
            'password' => env('ADMIN_PASSWORD'),
        ]);

        $this->admin_id = $response['data']['user']['id'];
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
        $response = $this->sendAdminAuthenticatedPost('api/v1/user/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_user()
    {
        $data = [
            'sort' => 1,
            'status' => 'active',
            'description' => NULL,
            'last_name' => "test",
            'first_name' => "test",
            'person_type' => "real",
            'username' => "09111234567",
            'birth_date' => "2023-01-01",
            'country_division_id' => NULL,
            'national_code' => "0880888888",
            'password' => Hash::make("123465"),
            'role_id' => [env('ROLE_ADMIN_ID')],
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/user/insert',$data);

        unset($data['password']);
        unset($data['role_id']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_user()
    {
        $response = $this->postJson('api/v1/user/update',[]);
        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_user()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/user/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_user()
    {
        $data = [
            'id' => $this->admin_id,
            'sort' => 1,
            'status' => 'active',
            'description' => NULL,
            'last_name' => "test",
            'first_name' => "test",
            'person_type' => "real",
            'username' => "09111111111",
            'birth_date' => "2023-01-01",
            'country_division_id' => NULL,
            'national_code' => "0880888888",
            'role_id' => [env('ROLE_ADMIN_ID')],
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/user/update',$data);

        unset($data['role_id']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    public function test_update_user_profile()
    {
        $data = [
            'last_name' => "test",
            'first_name' => "test",
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/user/profile',$data);

        unset($data['role_id']);

        $response->assertJson([
            'status' => 200,
            'data' => ['user' => $data]
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_users()
    {
        $response = $this->postJson('api/v1/user',[]);
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_users()
    {
        $data = [
            'filters' => [
                'id' => $this->admin_id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/user',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$this->admin_id)
                ->etc()
        );
    }
    
    public function test_anonymus_should_not_search_by_role()
    {
        $response = $this->postJson('api/v1/user/searchByRole',[]);
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_search_by_role()
    {
        $data = [
            'role_id' => [env('ROLE_ADMIN_ID')]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/user/searchByRole',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->hasAll([
                    'data.model.data.0.roles'
                ])
                ->etc()
        );
    }

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_user()
    {
        $response = $this->postJson('api/v1/user/show',[]);
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_user()
    {
        $data = [
            'id' => $this->admin_id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/user/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$this->admin_id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_user()
    {
        $response = $this->postJson('api/v1/user/delete',[]);
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_user()
    {
        $data = [
            'id' => $this->admin_id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/user/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
