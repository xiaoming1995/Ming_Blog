<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();

        User::insert($users->makeVisible(['password','remember'])->toArray());

        $user  = User::find(1);
        $user->name = 'Liuming';
        $user->email = '460667926@qq.com';
        $user->save();
    }
}
