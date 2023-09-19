<?php

namespace Tests\Feature;

use App\Models\Product\LogStock;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class LogStockTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'warehouse_stock_id' => '',
		'product_id' => '',
		'previous_stock' => '',
		'current_stock' => '',
		'type' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_logstock()
    {
        $response = $this->postJson('api/v1/logstock/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_logstock()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/logstock/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_logstock()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/logstock/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_logstock()
    {
        $response = $this->postJson('api/v1/logstock/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_logstock()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/logstock/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_logstock()
    {
        $new_data = LogStock::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/logstock/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_logstocks()
    {
        $response = $this->postJson('api/v1/logstock',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_logstocks()
    {
        $new_data = LogStock::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/logstock',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_logstock()
    {
        $response = $this->postJson('api/v1/logstock/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_logstock()
    {
        $new_data = LogStock::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/logstock/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_logstock()
    {
        $response = $this->postJson('api/v1/logstock/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_LogStock()
    {
        $new_data = LogStock::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/logstock/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
