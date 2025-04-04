<?php

namespace Database\Factories;

use App\Models\Recipient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class RecipientFactory extends Factory
{
    protected $model = Recipient::class;

    public function definition()
    {
        return [
            'owner_id' => 1,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'fullName' => $this->faker->name,
            'birthday' => Carbon::today(),
        ];
    }
}
