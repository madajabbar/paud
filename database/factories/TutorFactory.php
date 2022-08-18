<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pendidikan' => 'S1',
            'no_hp' => '0895xxxxx',
            'deskripsi' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique fuga ipsam aliquam fugit facere?',
            'foto' => 'tutor/contoh.png',
            'user_id' => User::factory()->create()->id,
        ];
    }
}
