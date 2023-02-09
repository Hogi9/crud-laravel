<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'M Darojatun Hogi',
            'email'=>'hogi.pt@gmail.com',
            'password'=>bcrypt('password'),
        ]);

        Post::create([
            'title'=>'Judul Pertama',
            'user_id'=>1,
            'category_id'=>1,
            'slug' => 'judul-pertama',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos est dignissimos voluptatibus, ratione vero natus eveniet dicta dolore adipisci',
            'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos est dignissimos voluptatibus, ratione vero natus eveniet dicta dolore adipisci, minus tempore, dolorem officia repudiandae ducimus non deserunt temporibus. Sequi optio magni nobis fugit possimus, eum laboriosam provident cupiditate nemo, quas officiis. Consectetur quo error, id tempore reiciendis odit minima debitis pariatur dignissimos laudantium sapiente sed qui eaque at illo <p></p>maiores dolor! Blanditiis, ab error. Ducimus mollitia asperiores error atque voluptatem dolore repellat tempora sequi quidem saepe nam obcaecati corporis cum ipsa magnam ad est soluta alias, delectus rerum itaque. Aperiam perspiciatis temporibus quaerat consequuntur culpa fugit iusto sint expedita, obcaecati tenetur adipisci aut veniam minima ut, fugiat consectetur! Error esse ipsa ullam molestias harum dolorem consequatur facilis corporis nisi temporibus impedit dolore voluptate blanditiis<p></p> quos ex veritatis eum provident aspernatur sapiente asperiores odit soluta, deleniti cum? Soluta recusandae optio id exercitationem blanditiis hic? Nihil laboriosam inventore, aliquam delectus incidunt natus a provident minima accusamus, dignissimos veritatis alias fuga quidem corrupti est voluptas accusantium et impedit iure magni neque numquam cumque. Id modi quam dolor, deserunt porro similique. Sit at inventore perferendis obcaecati nam neque dolor earum incidunt facere eius, quis cupiditate ratione, provident ullam dolores dolorum itaque voluptate debitis reprehenderit.</p>'
        ]);
        
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);
    }
}
