<?php

namespace Tests\Feature;

use App\Models\Product\ProductVariation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProductVariationTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'product_id' => '',
		'variation_type_id' => '',
		'value' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_productvariation()
    {
        $response = $this->postJson('api/v1/productvariation/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_productvariation()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariation/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_productvariation()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariation/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_productvariation()
    {
        $response = $this->postJson('api/v1/productvariation/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_productvariation()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariation/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_productvariation()
    {
        $new_data = ProductVariation::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariation/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_productvariations()
    {
        $response = $this->postJson('api/v1/productvariation',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_productvariations()
    {
        $new_data = ProductVariation::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariation',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_productvariation()
    {
        $response = $this->postJson('api/v1/productvariation/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_productvariation()
    {
        $new_data = ProductVariation::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariation/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_productvariation()
    {
        $response = $this->postJson('api/v1/productvariation/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_ProductVariation()
    {
        $new_data = ProductVariation::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariation/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
