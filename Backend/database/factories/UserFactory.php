<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\JobPosition;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'lastName' => $this->faker->name(),
            'userName' => $this->faker->name(),
            'num_tlf' => $this->faker->randomDigit(),
            'isAdmin' => $this->faker->randomDigit(),
            'password' => static::$password ??= Hash::make('password'),
            'photo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'group_id' => Group::get('id') -> random(),
            'jobposition_id' => JobPosition::get('id') -> random(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    
}
