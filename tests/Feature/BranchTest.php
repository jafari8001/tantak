<?php

namespace Tests\Feature;

use App\Models\Product\Branch;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class BranchTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'user_id' => '',
		'country_division_id' => '',
		'name' => '',
		'branch_code' => '',
		'lat' => '',
		'long' => '',
		'address' => '',
		'is_main_branch' => '',
		'status' => '',
		'sell_type' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_branch()
    {
        $response = $this->postJson('api/v1/branch/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_branch()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/branch/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_branch()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/branch/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_branch()
    {
        $response = $this->postJson('api/v1/branch/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_branch()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/branch/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_branch()
    {
        $new_data = Branch::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/branch/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_branchs()
    {
        $response = $this->postJson('api/v1/branch',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_branchs()
    {
        $new_data = Branch::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/branch',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_branch()
    {
        $response = $this->postJson('api/v1/branch/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_branch()
    {
        $new_data = Branch::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/branch/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_branch()
    {
        $response = $this->postJson('api/v1/branch/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_Branch()
    {
        $new_data = Branch::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/branch/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
