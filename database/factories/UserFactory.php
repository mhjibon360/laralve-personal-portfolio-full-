<?php

namespace Database\Factories;

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
    //  id	name	email	phone	username	image	facebook	twitter	instagram	role	status	
    //  email_verified_at	password	remember_token	created_at	updated_at	
    return [
      'name' => fake()->name(),
      'email' => fake()->unique()->safeEmail(),
      'phone' => fake()->phoneNumber(),
      'username' => fake()->unique()->userName(),
      'role' => fake()->randomElement(['user', 'admin']),
      'status' => fake()->randomElement(['active', 'inactive']),
      'email_verified_at' => now(),
      'password' => static::$password ??= Hash::make('password'),
      'remember_token' => Str::random(10),
    ];
  }

  /**
   * Indicate that the model's email address should be unverified.
   */
  public function unverified(): static
  {
    return $this->state(fn (array $attributes) => [
      'email_verified_at' => null,
    ]);
  }
}
