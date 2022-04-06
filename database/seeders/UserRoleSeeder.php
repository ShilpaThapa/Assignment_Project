<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            ['search'=>['name'=>'Admin'],'create'=>['guard_name'=>'web']],
            ['search'=>['name'=>'Employer'],'create'=>['guard_name'=>'web']],
            ['search'=>['name'=>'Job Seeker'],'create'=>['guard_name'=>'web']],
        ];
        foreach ($roles as $role) 
        {
            Role::firstOrCreate($role['search'],$role['create']);
        }
        $users=[
            ['search'=>['email'=>'admin@gmail.com'],
            'update'=>['name'=>'Admin','password'=>bcrypt('admin@123') ,'status'=>'1','role_id'=>'1']],
        ];
        foreach ($users as $user) 
        {
            User::updateOrCreate($user['search'],$user['update']);
        }
    }
}
