<?php

use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Starter::create([
            'name' => 'Warm glazed Goats Cheese with beetroot, cherry tomato and red onion salad with caramelised walnuts',
            'children' => false,
        ]);
        \App\Starter::create([
            'name' => 'Broccoli & Stilton Soup',
            'children' => false,
        ]);
        \App\Starter::create([
            'name' => 'Soup of the day (ve)',
            'children' => false,
        ]);
        \App\MainCourse::create([
            'name' => 'Braised blade of beef, with a red wine and shallot jus',
            'children' => false,
        ]);
        \App\MainCourse::create([
            'name' => 'Free range chick breast with a cream and bacon sauce',
            'children' => false,
        ]);
        \App\MainCourse::create([
            'name' => 'Vegetable Wellington (ve)',
            'children' => false,
        ]);
        \App\Dessert::create([
            'name' => 'Sticky toffee pudding, butterscotch sauce and honeycomb ice cream',
            'children' => false,
        ]);
        \App\Dessert::create([
            'name' => 'Glazed Lemon Tart with macerated forest fruits',
            'children' => false,
        ]);
        \App\Dessert::create([
            'name' => 'Chocolate Delice (ve)',
            'children' => false,
        ]);
    }
}
