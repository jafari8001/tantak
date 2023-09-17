<?php

namespace Tests\Feature;

use App\Models\Product\WarehouseStock;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class WarehouseStockTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'user_id' => '',
		'varcomb_id' => '',
		'stock' => '',
		'saved_stock' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_warehousestock()
    {
        $response = $this->postJson('api/v1/warehousestock/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_warehousestock()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/warehousestock/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_warehousestock()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/warehousestock/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_warehousestock()
    {
        $response = $this->postJson('api/v1/warehousestock/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_warehousestock()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/warehousestock/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_warehousestock()
    {
        $new_data = WarehouseStock::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/warehousestock/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_warehousestocks()
    {
        $response = $this->postJson('api/v1/warehousestock',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_warehousestocks()
    {
        $new_data = WarehouseStock::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/warehousestock',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_warehousestock()
    {
        $response = $this->postJson('api/v1/warehousestock/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_warehousestock()
    {
        $new_data = WarehouseStock::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/warehousestock/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_warehousestock()
    {
        $response = $this->postJson('api/v1/warehousestock/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_WarehouseStock()
    {
        $new_data = WarehouseStock::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/warehousestock/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
