<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->admin();
    }

    private function admin(){
        $role = new Role();
        $role->name=('admin');
        $role->save();
    }

}
