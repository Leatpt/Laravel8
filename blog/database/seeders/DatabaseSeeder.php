<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Excerpt for my post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia culpa velit, id assumenda obcaecati repudiandae repellendus distinctio maiores sint perferendis nisi fugit corporis maxime eaque, excepturi dolore odit dolorum praesentium. Aut tempore laborum corporis quae ullam ex, sunt qui, suscipit rerum asperiores neque magnam fugit totam. Dolorem tenetur amet harum, dolore maiores facere dolores, sapiente eaque vero quo voluptates, veritatis sint debitis minus commodi magni asperiores possimus nemo dolor soluta perspiciatis! Iure doloremque, aperiam, itaque architecto doloribus quibusdam voluptatum in sint dicta alias eum ab dolorem aut culpa tempore! Obcaecati officiis, error vero hic consectetur mollitia. Inventore qui iste sequi illum dolorum enim voluptatem dolorem doloribus ab voluptas. Iste ipsum rerum dolor a. Ratione quis odio minus ex nam itaque, debitis distinctio sunt cum quos hic mollitia similique libero quo dicta sapiente voluptatem quaerat tempora. Omnis quasi commodi est fuga reiciendis, quos, ad nisi, corporis rerum aperiam aliquid. Nesciunt, pariatur.
            </p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'excerpt' => '<p>Excerpt for my post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia culpa velit, id assumenda obcaecati repudiandae repellendus distinctio maiores sint perferendis nisi fugit corporis maxime eaque, excepturi dolore odit dolorum praesentium. Aut tempore laborum corporis quae ullam ex, sunt qui, suscipit rerum asperiores neque magnam fugit totam. Dolorem tenetur amet harum, dolore maiores facere dolores, sapiente eaque vero quo voluptates, veritatis sint debitis minus commodi magni asperiores possimus nemo dolor soluta perspiciatis! Iure doloremque, aperiam, itaque architecto doloribus quibusdam voluptatum in sint dicta alias eum ab dolorem aut culpa tempore! Obcaecati officiis, error vero hic consectetur mollitia. Inventore qui iste sequi illum dolorum enim voluptatem dolorem doloribus ab voluptas. Iste ipsum rerum dolor a. Ratione quis odio minus ex nam itaque, debitis distinctio sunt cum quos hic mollitia similique libero quo dicta sapiente voluptatem quaerat tempora. Omnis quasi commodi est fuga reiciendis, quos, ad nisi, corporis rerum aperiam aliquid. Nesciunt, pariatur.
            </p>',
        ]);
    }
}
