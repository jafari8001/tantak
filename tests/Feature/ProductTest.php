<?php

namespace Tests\Feature;

use App\Models\Product\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'name' => '',
		'slug' => '',
		'barcode' => '',
		'base_price' => '',
		'base_wholesale_price' => '',
		'wholesale_unit' => '',
		'main_image' => '',
		'star' => '',
		'like' => '',
		'view' => '',
		'publish_status' => ''
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_product()
    {
        $response = $this->postJson('api/v1/product/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_product()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/product/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_product()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/product/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_product()
    {
        $response = $this->postJson('api/v1/product/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_product()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/product/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_product()
    {
        $new_data = Product::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/product/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_products()
    {
        $response = $this->postJson('api/v1/product',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_products()
    {
        $new_data = Product::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/product',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_product()
    {
        $response = $this->postJson('api/v1/product/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_product()
    {
        $new_data = Product::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/product/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_product()
    {
        $response = $this->postJson('api/v1/product/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_Product()
    {
        $new_data = Product::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/product/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
