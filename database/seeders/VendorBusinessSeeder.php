<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorBusinessDetails;
class VendorBusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['id'=>1,'vendor_id'=>1,'shop_name'=>'khm','shop_address'=>'Dhaka','shop_city'=>'Dhaka','shop_country'=>'BD','shop_email'=>'admin@gmail.com','shop_pincode'=>'1234','shop_mobile'=>'019','business_licence'=>'19','shop_website'=>'www'];
            // ['id'=>2,'vendor_id'=>1,'name'=>'Vendor','email'=>'vendor@gmail.com','password'=>54321,'type'=>'Vendor','status'=>0]
        VendorBusinessDetails::insert($data);
    }
}
