<?php

namespace Tests\Feature;

use App\Models\Product\CategoryProduct;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class CategoryProductTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'product_id' => '',
		'category_id' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_categoryproduct()
    {
        $response = $this->postJson('api/v1/categoryproduct/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_categoryproduct()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/categoryproduct/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_categoryproduct()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/categoryproduct/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_categoryproduct()
    {
        $response = $this->postJson('api/v1/categoryproduct/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_categoryproduct()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/categoryproduct/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_categoryproduct()
    {
        $new_data = CategoryProduct::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/categoryproduct/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_categoryproducts()
    {
        $response = $this->postJson('api/v1/categoryproduct',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_categoryproducts()
    {
        $new_data = CategoryProduct::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/categoryproduct',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_categoryproduct()
    {
        $response = $this->postJson('api/v1/categoryproduct/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_categoryproduct()
    {
        $new_data = CategoryProduct::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/categoryproduct/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_categoryproduct()
    {
        $response = $this->postJson('api/v1/categoryproduct/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_CategoryProduct()
    {
        $new_data = CategoryProduct::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/categoryproduct/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
