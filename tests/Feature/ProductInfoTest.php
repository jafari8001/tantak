<?php

namespace Tests\Feature;

use App\Models\Product\ProductInfo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProductInfoTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'product_id' => '',
		'type' => '',
		'ability' => '',
		'description' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_productinfo()
    {
        $response = $this->postJson('api/v1/productinfo/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_productinfo()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/productinfo/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_productinfo()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/productinfo/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_productinfo()
    {
        $response = $this->postJson('api/v1/productinfo/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_productinfo()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/productinfo/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_productinfo()
    {
        $new_data = ProductInfo::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/productinfo/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_productinfos()
    {
        $response = $this->postJson('api/v1/productinfo',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_productinfos()
    {
        $new_data = ProductInfo::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productinfo',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_productinfo()
    {
        $response = $this->postJson('api/v1/productinfo/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_productinfo()
    {
        $new_data = ProductInfo::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productinfo/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_productinfo()
    {
        $response = $this->postJson('api/v1/productinfo/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_ProductInfo()
    {
        $new_data = ProductInfo::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productinfo/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
