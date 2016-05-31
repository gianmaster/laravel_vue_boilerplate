<?php

use Illuminate\Database\Seeder;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //roles
        $rol_admin = Role::create([
            'name' => 'ROOT'
        ]);
        Role::create([
            'name' => 'OPER'
        ]);
        Role::create([
            'name' => 'TEACHER'
        ]);

        //admin user
        factory(\App\User::class)->create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin'),
            'id_role'   => 1
        ]);


        //docentes
        factory(\App\User::class, 30)->create();
    }
}
