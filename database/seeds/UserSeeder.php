<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
        $role = Role::where('name','admin')->first();
        $user = User::create([
            'login' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@test.ex',
            'password' => Hash::make('password')
        ]);

        $user->roles()->attach($role);
    }
}
