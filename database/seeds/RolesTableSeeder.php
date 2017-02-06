<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder {

    public function run() {

        $owner = new Role();
        $owner->name = 'Owner';
        $owner->display_name = 'Product Owner';
        $owner->description = 'Product owner will manage all modules for this project.';

        $owner->save();
        
        $owner = new Role();
        $owner->name = 'Admin';
        $owner->display_name = 'admin';
        $owner->description = 'Admin User will handel all administrative tasks.';

        $owner->save();        
    }

}
