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
            array('name'=>'marina','address_id'=>'2','email'=>'marina@gmail.com','confession_father'=>'fr.yohana','gender'=>'female','birthdate'=>'20/1/1993','marital_status'=>'married','facebook_link'=>'marina@facebook','batch'=>'13')
        ));

        DB::table('users')->insert(array(
            array('name'=>'fady','password'=>'123456','address_id'=>'1','type'=>'other','email'=>'fady@gmail.com','confession_father'=>'fr.yohana','gender'=>'male','birthdate'=>'1/1/1990','marital_status'=>'single','facebook_link'=>'fady@facebook','batch'=>'10'),
        ));

        DB::table('users_phone_nums')->insert(array(
            array('type'=>'mobile','user_id'=>'1','number'=>'01234567891'),
            array('type'=>'phone','user_id'=>'1','number'=>'035454821')
        ));

        DB::table('members_phone_nums')->insert(array(
            array('type'=>'mobile','member_id'=>'1','number'=>'0125555891'),
            array('type'=>'phone','member_id'=>'1','number'=>'032654821')
        ));

        DB::table('member_user')->insert(array(
            array('member_id'=>'1','user_id'=>'1')
        ));
    }
}
