<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   $user = User::all()->random();
        var_dump($user->current_team_id);
        return [
            'user_id'=> $user->id, //User::factory(),
            'team_id' => $user->current_team_id,
            'category_id'=>$this->faker->numberBetween(1,3), //Category::all()->random()->id, // Category::factory(),
            'excert'=> '<p>'.implode('</p><p>',$this->faker->paragraphs(2)).'</p>',
            'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'body'=>'<p>'.implode('</p><p>',$this->faker->paragraphs(6)).'</p>',
        ];
    }
}
