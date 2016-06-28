<?php

use Illuminate\Database\Seeder;

class allTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('addresses')->insert(array(
            array('quarter'=>'wasat','street'=>'ebn azab','floor_num'=>'4','appartment_num'=>'12','home_num'=>'6','details'=>'b3d el 2esm','zone_location'=>''),
            array('quarter'=>'smoha','street'=>'game3 ali ebn abi taleb','floor_num'=>'5','appartment_num'=>'10','home_num'=>'20','details'=>'abl compu me','zone_location'=>'')
        ));
//
        DB::table('members')->insert(array(
            array('name'=>'fady','address_id'=>'1','email'=>'fady@gmail.com','confession_father'=>'fr.yohana','gender'=>'male','birthdate'=>'1/1/1990','marital_status'=>'single','facebook_link'=>'fady@facebook','batch'=>'10'),
            array('name'=>'marina','address_id'=>'2','email'=>'marina@gmail.com','confession_father'=>'fr.yohana','gender'=>'female','birthdate'=>'20/1/1993','marital_status'=>'married','facebook_link'=>'marina@facebook','batch'=>'13')
        ));

        DB::table('users')->insert(array(
            array('password'=>'123456','member_id'=>'1')
        ));

        DB::table('phone_nums')->insert(array(
            array('type'=>'mobile','member_id'=>'1','number'=>'01234567891'),
            array('type'=>'mobile','member_id'=>'2','number'=>'01235557891'),
        ));

        DB::table('member_user')->insert(array(
            array('member_id'=>'2','user_id'=>'1')
        ));
    }
}
