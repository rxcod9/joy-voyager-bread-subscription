<?php

namespace Joy\VoyagerBreadSubscription\Database\Factories;

use Joy\VoyagerBreadSubscription\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(500),
        ];
    }

    /**
     * Indicate that the model's status should be active.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function active()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Subscription::ACTIVE,
            ];
        });
    }

    /**
     * Indicate that the model's status should be inactive.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function inactive()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Subscription::INACTIVE,
            ];
        });
    }

    /**
     * Indicate that the model's status should be expired.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function expired()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Subscription::EXPIRED,
            ];
        });
    }
}
