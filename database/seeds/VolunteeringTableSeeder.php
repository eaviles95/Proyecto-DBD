<?php

use Illuminate\Database\Seeder;

class VolunteeringTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*name
                commune_id*/
        
        for ($i=0; $i < 10; $i++) { 
            
             DB::table('volunteerings')->insert([
                'type_of_job' => 1,
				'time' =>  rand(0,10),
				'status_volunteering' => rand(0,1),
				'start' => Carbon\Carbon::parse('2000-01-01'),
				'end' => Carbon\Carbon::parse('2000-01-01'),
				'cost' => rand(0,9999999),
				'progress' => rand(0,100),
            ]);
        }        
    }
}
