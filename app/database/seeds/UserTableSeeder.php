<?php

class UserTableSeeder extends Seeder {

	public function run()
	{

		User::create(array(
				'firstname' => 'Admin',
				'lastname' => 'Admin',
				'email' => 'admin@admin.md',
				'password' => Hash::make('admin')
			));
	}
}