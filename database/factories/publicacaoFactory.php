<?php

namespace Database\Factories;

use App\Models\publicacao;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class publicacaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = publicacao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->text(),
            'data' => $this->faker->text(),
            'mensagem' => $this->faker->text()
        ];
    }
}
