<?php

namespace Tests\Feature;

use App\Models\Setting\CountryDivision;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class CountryDivisionTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'name' => 'test',
		'parent_id' => NULL,
		'level' => 'province',
    ];
    protected $updated_test_data = [
        'name' => 'test 2',
		'parent_id' => NULL,
		'level' => 'township',
    ];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_countrydivision()
    {
        $response = $this->postJson('api/v1/country-division/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_countrydivision()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/country-division/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_countrydivision()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/country-division/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_countrydivision()
    {
        $response = $this->postJson('api/v1/country-division/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_countrydivision()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/country-division/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_countrydivision()
    {
        $new_data = CountryDivision::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/country-division/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_can_list_countrydivisions()
    {
        $response = $this->postJson('api/v1/country-division',[]);

        $response->assertJson([
            'status' => 200
        ]);
    }

    public function test_list_countrydivisions()
    {
        $new_data = CountryDivision::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/country-division',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    

    /**
     * show
     */
    
    public function test_anonymus_should_not_show_countrydivision()
    {
        $response = $this->postJson('api/v1/country-division/show',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_show_countrydivision()
    {
        $new_data = CountryDivision::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/country-division/show',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.id',$new_data->id)
                ->etc()
        );
    }
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_countrydivision()
    {
        $response = $this->postJson('api/v1/country-division/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_CountryDivision()
    {
        $new_data = CountryDivision::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/country-division/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
