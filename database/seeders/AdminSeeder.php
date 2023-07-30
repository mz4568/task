<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data=['id'=>1,'vendor_id'=>0,'name'=>'SuperAdmin','email'=>'admin@gmail.com','password'=>'$2a$12$42A9Cuj6XuOYXMQBKP4IRejizYy4VGXiGLWgmugtxFYfeKjcUuqwu','type'=>'SuperAdmin','status'=>1,'image'=>''];
         $data=['id'=>2,'vendor_id'=>1,'name'=>'khm','email'=>'vendor@gmail.com','password'=>'$2a$12$2G/DI0CgrGztLkG1IKsLnOFQVCHPSQD9mhVKWrpQS/dfNsZwDSW2e','type'=>'vendor','status'=>0,'image'=>''];
        Admin::insert($data);
    }
}
