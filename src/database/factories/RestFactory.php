<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Rest;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rest>
 */
class RestFactory extends Factory
{
    protected $model = Rest::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateTime = new DateTime();
        return [
            'attendance_id' => Attendance::factory(),
            'start_time' => $dateTime->modify('+1hour')->format('Y-m-d H:i'),
            'end_time' => $dateTime->modify('+2hour')->format('Y-m-d H:i')
        ];
    }
}
