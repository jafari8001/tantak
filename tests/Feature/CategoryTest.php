<?php

namespace Tests\Feature;

use App\Models\Product\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'name' => '',
		'slug' => '',
		'barcode' => '',
		'parent_id' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_category()
    {
        $response = $this->postJson('api/v1/category/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_category()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/category/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_category()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/category/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_category()
    {
        $response = $this->postJson('api/v1/category/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_category()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/category/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_category()
    {
        $new_data = Category::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/category/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_categorys()
    {
        $response = $this->postJson('api/v1/category',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_categorys()
    {
        $new_data = Category::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/category',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_category()
    {
        $response = $this->postJson('api/v1/category/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_category()
    {
        $new_data = Category::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/category/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_category()
    {
        $response = $this->postJson('api/v1/category/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_Category()
    {
        $new_data = Category::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/category/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
