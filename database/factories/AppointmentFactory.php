<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id'           => $this->faker->numberBetween(1, 20),
            'title'                 => $this->faker->words(4, true),
            'description'           => $this->faker->sentences(5, true),
            'appointment_date'      => $this->faker->dateTimeBetween('now' ,'+1 year'),
            'location'              => $this->faker->randomElement(['Bij Klant', 'Op kantoor', 'Online', 'Van der Valk']),
            'attendees'             => implode(', ', [$this->faker->unique()->name, $this->faker->unique()->name, $this->faker->unique()->name])
        ];
    }
}
