<?php

namespace Tests\Feature;

use App\Models\Product\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class TagTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'name' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_tag()
    {
        $response = $this->postJson('api/v1/tag/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_tag()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/tag/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_tag()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/tag/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_tag()
    {
        $response = $this->postJson('api/v1/tag/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_tag()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/tag/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_tag()
    {
        $new_data = Tag::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/tag/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_tags()
    {
        $response = $this->postJson('api/v1/tag',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_tags()
    {
        $new_data = Tag::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/tag',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_tag()
    {
        $response = $this->postJson('api/v1/tag/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_tag()
    {
        $new_data = Tag::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/tag/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_tag()
    {
        $response = $this->postJson('api/v1/tag/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_Tag()
    {
        $new_data = Tag::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/tag/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
