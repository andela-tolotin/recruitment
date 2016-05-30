<?php

use Illuminate\Database\Seeder;

class UserFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HumanResources\Role::class, 1)->create();
        factory(HumanResources\User::class, 1)->create();
        factory(HumanResources\Skill::class, 5)->create();
        factory(HumanResources\Academic::class, 1)->create();
        factory(HumanResources\OtherInfo::class, 1)->create();
        factory(HumanResources\WorkExperience::class, 1)->create();
    }
}
