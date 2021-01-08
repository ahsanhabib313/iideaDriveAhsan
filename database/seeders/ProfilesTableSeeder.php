<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('profiles')->delete();
        DB::table('profiles')->insert([
			[
				'id' => 1,
				'name' => 'Super',
				'description' => 'Super Admin',
			],
			[
				'id' => 2,
				'name' => 'Admin',
				'description' => 'Admin',
			],
			[
				'id' => 3,
				'name' => 'Till',
				'description' => 'Cash register',
			],
			[
				'id' => 4,
				'name' => 'Totem',
				'description' => 'Totem for taking orders',
			]
		]
		);
    }
}
