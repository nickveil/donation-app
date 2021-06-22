<?php

namespace Database\Factories;

use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campaign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    
    {
        $campaign = ['uniforms', 'helmets', 'team swag','operations','coaches gift','supplies','team equipment','charity'];
        $startDate = ['2021-01-01','2021-03-01','2021-05-01','2021-06-01'];
        $endDate = ['2021-07-01','2021-09-01','2021-11-01','2021-12-01'];
        $campaign = array_rand(array_flip($campaign));
        $startDate = array_rand(array_flip($startDate));
        $endDate = array_rand(array_flip($endDate));

        return [
            'name' => ucwords($campaign),
            'assigned_to' => 1,
            'earmark' => $this->faker->realText(15,2),
            'isActive' => $this->faker->boolean(75),
            'current_donations' => $this->faker->randomFloat(0 ,500, 10000),
            'goal' => $this->faker->randomFloat(0 ,500, 5000),
            'campaign_start' => $startDate,
            'campaign_end' => $endDate,
        ];
    }
}
