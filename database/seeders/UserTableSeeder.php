<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //  id	name	email	phone	username	image	facebook	twitter	instagram	role	status	
    //  email_verified_at	password	remember_token	created_at	updated_at	
    //  add some demo user/admin/one super admin
    User::insert([
      // super admin
      [
        'name' => 'Mehedi',
        'email' => 'mjjibon115@gmail.com',
        'password' => Hash::make('mjjibon115@gmail.com'),
        'phone' => '01873593399',
        'username' => 'mehedibd360',
        'role' => 'superadmin',
        'status' => 'active',
        'created_at' => Carbon::now(),
      ],
      //  admin
      [
        'name' => 'jibon',
        'email' => 'mjjibon114@gmail.com',
        'password' => Hash::make('mjjibon114@gmail.com'),
        'phone' => '01306110366',
        'username' => 'jibonbd360',
        'role' => 'admin',
        'status' => 'active',
        'created_at' => Carbon::now(),

      ],
      //  user
      [
        'name' => 'Asif',
        'email' => 'asif114@gmail.com',
        'password' => Hash::make('asif114@gmail.com'),
        'phone' => '01806110366',
        'username' => 'asifbd360',
        'role' => 'admin',
        'status' => 'active',
        'created_at' => Carbon::now(),

      ]

    ]);
  }
}
