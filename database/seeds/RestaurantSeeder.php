<?php

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Restaurant::class)
            ->create()
            ->each(function ($resto) {
                $resto->dishes()->save(factory(App\Dish::class)->create());
            });
    }
}
