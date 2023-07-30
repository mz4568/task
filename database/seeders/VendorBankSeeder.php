<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorBankDetails;
class VendorBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data=['id'=>1,'vendor_id'=>1,'account_owner_name'=>'khm','bank_name'=>'BDBank','account_name'=>'khm007'];
            // ['id'=>2,'vendor_id'=>1,'name'=>'Vendor','email'=>'vendor@gmail.com','password'=>54321,'type'=>'Vendor','status'=>0]
        VendorBankDetails::insert($data);
    }
}
