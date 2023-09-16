<?php

namespace Tests\Feature;

use App\Models\Product\Address;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class AddressTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'user_id' => '',
		'postal_code' => '',
		'address' => '',
		'country_division_id' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_address()
    {
        $response = $this->postJson('api/v1/address/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_address()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/address/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_address()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/address/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_address()
    {
        $response = $this->postJson('api/v1/address/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_address()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/address/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_address()
    {
        $new_data = Address::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/address/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_addresss()
    {
        $response = $this->postJson('api/v1/address',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_addresss()
    {
        $new_data = Address::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/address',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_address()
    {
        $response = $this->postJson('api/v1/address/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_address()
    {
        $new_data = Address::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/address/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_address()
    {
        $response = $this->postJson('api/v1/address/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_Address()
    {
        $new_data = Address::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/address/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
