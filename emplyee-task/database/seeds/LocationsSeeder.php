<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Employee;
class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Location::class, 20)
                                    -> create()
                                    -> each(function($location){

            // carica un employee in maniera random
            $employees = Employee::inRandomOrder() -> take(rand(1, 7)) -> get();

            // associa la location a questo employee tramite il metodo attach
            $location -> employees() -> attach($employees);
            $location -> save();

        });
    }
}
