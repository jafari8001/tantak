<?php

namespace Tests\Feature;

use App\Models\Product\ProductTag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProductTagTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'product_id' => '',
		'tag_id' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_producttag()
    {
        $response = $this->postJson('api/v1/producttag/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_producttag()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/producttag/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_producttag()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/producttag/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_producttag()
    {
        $response = $this->postJson('api/v1/producttag/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_producttag()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/producttag/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_producttag()
    {
        $new_data = ProductTag::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/producttag/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_producttags()
    {
        $response = $this->postJson('api/v1/producttag',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_producttags()
    {
        $new_data = ProductTag::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/producttag',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_producttag()
    {
        $response = $this->postJson('api/v1/producttag/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_producttag()
    {
        $new_data = ProductTag::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/producttag/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_producttag()
    {
        $response = $this->postJson('api/v1/producttag/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_ProductTag()
    {
        $new_data = ProductTag::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/producttag/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
