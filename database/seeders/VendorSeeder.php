<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['id'=>1,'name'=>'khm','address'=>'Dhaka','city'=>'Dhaka','country'=>'BD','email'=>'admin@gmail.com','pincode'=>'1234','mobile'=>'019','status'=>0,];
            // ['id'=>2,'vendor_id'=>1,'name'=>'Vendor','email'=>'vendor@gmail.com','password'=>54321,'type'=>'Vendor','status'=>0]
        Vendor::insert($data);
    }
}
