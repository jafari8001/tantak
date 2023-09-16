<?php

namespace Tests\Feature;

use App\Models\Product\ProductVariationCombination;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProductVariationCombinationTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'variation_1_id' => '',
		'variation_2_id' => '',
		'variation_3_id' => '',
		'sell_type' => '',
		'stock' => '',
		'discount' => '',
		'minimum' => '',
		'maximum' => '',
		'price' => '',
    ];
    protected $updated_test_data = [];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_productvariationcombination()
    {
        $response = $this->postJson('api/v1/productvariationcombination/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_productvariationcombination()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariationcombination/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_productvariationcombination()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariationcombination/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_productvariationcombination()
    {
        $response = $this->postJson('api/v1/productvariationcombination/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_productvariationcombination()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariationcombination/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_productvariationcombination()
    {
        $new_data = ProductVariationCombination::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariationcombination/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_productvariationcombinations()
    {
        $response = $this->postJson('api/v1/productvariationcombination',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_productvariationcombinations()
    {
        $new_data = ProductVariationCombination::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariationcombination',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_productvariationcombination()
    {
        $response = $this->postJson('api/v1/productvariationcombination/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_productvariationcombination()
    {
        $new_data = ProductVariationCombination::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariationcombination/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_productvariationcombination()
    {
        $response = $this->postJson('api/v1/productvariationcombination/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_ProductVariationCombination()
    {
        $new_data = ProductVariationCombination::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/productvariationcombination/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
