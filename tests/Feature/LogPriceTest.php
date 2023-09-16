<?php

namespace Tests\Feature;

use App\Models\Product\LogPrice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class LogPriceTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'varcomb_id' => '',
		'product_id' => '',
		'price' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_logprice()
    {
        $response = $this->postJson('api/v1/logprice/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_logprice()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/logprice/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_logprice()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/logprice/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_logprice()
    {
        $response = $this->postJson('api/v1/logprice/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_logprice()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/logprice/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_logprice()
    {
        $new_data = LogPrice::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/logprice/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_logprices()
    {
        $response = $this->postJson('api/v1/logprice',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_logprices()
    {
        $new_data = LogPrice::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/logprice',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_logprice()
    {
        $response = $this->postJson('api/v1/logprice/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_logprice()
    {
        $new_data = LogPrice::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/logprice/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_logprice()
    {
        $response = $this->postJson('api/v1/logprice/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_LogPrice()
    {
        $new_data = LogPrice::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/logprice/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
