<?php

use Illuminate\Database\Seeder;
use App\Models\Backend\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $role_employee = new Role();
       $role_employee->name = 'seller';
       $role_employee->description = 'Seller Account User';
       $role_employee->save();

       $role_manager = new Role();
       $role_manager->name = 'admin';
       $role_manager->description = 'Admin User';
       $role_manager->save();
     }
}
