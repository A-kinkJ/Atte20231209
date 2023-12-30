<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Attendance;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateTime = new DateTime();
        return [
            'user_id' => User::factory(),
            'start_time' => $dateTime->format('Y-m-d H:i'),
            'end_time' => $dateTime->modify('+8hour')->format('Y-m-d H:i'),
            'date' => $dateTime->format('Y-m-d')
        ];
    }
}
