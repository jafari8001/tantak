<?php

namespace Tests\Feature;

use App\Models\Product\ProductImage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProductImageTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'product_variation_id' => '',
		'product_id' => '',
		'alt' => '',
		'height' => '',
		'width' => '',
		'size' => '',
		'path' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_productimage()
    {
        $response = $this->postJson('api/v1/productimage/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_productimage()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/productimage/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_productimage()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/productimage/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_productimage()
    {
        $response = $this->postJson('api/v1/productimage/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_productimage()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/productimage/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_productimage()
    {
        $new_data = ProductImage::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/productimage/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_productimages()
    {
        $response = $this->postJson('api/v1/productimage',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_productimages()
    {
        $new_data = ProductImage::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productimage',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_productimage()
    {
        $response = $this->postJson('api/v1/productimage/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_productimage()
    {
        $new_data = ProductImage::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productimage/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_productimage()
    {
        $response = $this->postJson('api/v1/productimage/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_ProductImage()
    {
        $new_data = ProductImage::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productimage/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
