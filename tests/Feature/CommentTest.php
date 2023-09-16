<?php

namespace Tests\Feature;

use App\Models\Product\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'user_id' => '',
		'product_id' => '',
		'text' => '',
		'star' => '',
		'parent_id' => '',
		'is_owner' => '',
		'status' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_comment()
    {
        $response = $this->postJson('api/v1/comment/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_comment()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/comment/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_comment()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/comment/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_comment()
    {
        $response = $this->postJson('api/v1/comment/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_comment()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/comment/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_comment()
    {
        $new_data = Comment::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/comment/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_comments()
    {
        $response = $this->postJson('api/v1/comment',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_comments()
    {
        $new_data = Comment::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/comment',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_comment()
    {
        $response = $this->postJson('api/v1/comment/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_comment()
    {
        $new_data = Comment::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/comment/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_comment()
    {
        $response = $this->postJson('api/v1/comment/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_Comment()
    {
        $new_data = Comment::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/comment/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
