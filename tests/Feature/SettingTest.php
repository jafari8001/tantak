<?php

namespace Tests\Feature;

use App\Models\Setting\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class SettingTest extends TestCase
{
    use RefreshDatabase;

    protected $test_data = [
        'key' => 'test key',
		'value' => 'test value',
    ];
    protected $updated_test_data = [
        'key' => 'test key 2',
		'value' => 'test value 2',
    ];

    /**
     * insert
     */
    
     public function test_anonymus_should_not_insert_setting()
    {
        $response = $this->postJson('api/v1/setting/insert',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_insert_setting()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/setting/insert',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_insert_setting()
    {
        $data = $this->test_data;

        $response = $this->sendAdminAuthenticatedPost('api/v1/setting/insert',$data);

        // unset($data['some_field']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }

    /**
     * update
     */
    
    public function test_anonymus_should_not_update_setting()
    {
        $response = $this->postJson('api/v1/setting/update',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }
    
    public function test_admin_empty_data_update_setting()
    {
        $response = $this->sendAdminAuthenticatedPost('api/v1/setting/update',[]);

        $response->assertJson([
            'status' => 412
        ]);
    }
    
    public function test_data_update_setting()
    {
        $new_data = Setting::insert((object)$this->test_data);

        $data = $this->updated_test_data;
        $data['id'] = $new_data->id;

        $response = $this->sendAdminAuthenticatedPost('api/v1/setting/update',$data);

        // unset($data['some_fields']);

        $response->assertJson([
            'status' => 200,
            'data' => $data
        ]);
    }
    
    /**
     * lists
     */

    public function test_anonymus_should_not_list_settings()
    {
        $response = $this->postJson('api/v1/setting',[]);

        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_list_settings()
    {
        $new_data = Setting::insert((object)$this->test_data);

        $data = [
            'filters' => [
                'id' => $new_data->id
            ]
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/setting',$data);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('status',200)
                ->where('data.model.data.0.id',$new_data->id)
                ->etc()
        );
    }
    
    
    /**
     * delete
     */
    
    public function test_anonymus_should_not_delete_setting()
    {
        $response = $this->postJson('api/v1/setting/delete',[]);
        
        $response->assertJson([
            'status' => 401
        ]);
    }

    public function test_data_delete_Setting()
    {
        $new_data = Setting::insert((object)$this->test_data);

        $data = [
            'id' => $new_data->id,
        ];

        $response = $this->sendAdminAuthenticatedPost('api/v1/setting/delete',$data);

        $response->assertJson([
            'status' => 200
        ]);
    }
}
