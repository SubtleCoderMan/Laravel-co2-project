<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bedrijven>
 */
class bedrijvenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bedrijf1 = $this->faker->lastName;
        $bedrijf2 = $this->faker->randomElement($array = array ('BV.','BV.','BV.','BV.','NV.','NV.','NV.','NV.','Inc','Group', 'UA', 'Ltd', 'LLC','Co','Corp','GmbH'));
        
        return [
            //
'bedrijfnaam' => $bedrijf1.' '.$bedrijf2,
'postcode' => $this->faker->numberBetween($min = 1000, $max = 9999),
'branche' => $this->faker->randomElement($array = array ('Advies en consultancy','Agrosector Bouw, installatie en infrastructuur','Cultuur en sport','Delfstoffen','Energie','Financiele dienstverlening','Gezondheidszorg en maatschappelijke dienstverlening','Groothandel en detailhandel','Horeca','ICT, media en communicatie','Industrie','Onderwijs en training','Onroerend goed','Persoonlijke dienstverlening en not-for-profit','Vervoer, post en opslag','Water en afval','Zakelijke dienstverlening','Overige')),
'werknemers' => $this->faker->numberBetween($min = 500, $max = 5000),	
'gebouwen' => $this->faker->numberBetween($min = 10, $max = 50),
'grondoppervlak' => $this->faker->numberBetween($min = 100000, $max = 500000),
'bouwoppervlak' => $this->faker->numberBetween($min = 10000, $max = 50000),
        ];
    }
}
