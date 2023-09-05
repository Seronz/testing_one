<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(5)->create();
         Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'Irza Syahrie Zakaria',
            'username'=>'Seronz',
            'email'=>'irza.zakaria@gmail.com',
            'password'=> 'admin123'
        ]);

        // User::create([
        //     'name'=> 'Aji Putra Pratama',
        //     'email'=>'AjiPratama@example.com',
        //     'password'=> bcrypt('12345')
        // ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, maxime adipisci placeat, culpa eveniet explicabo incidunt totam possimus provident quod deleniti repellendus quam. Soluta quaerat similique voluptates consequatur a consequuntur sequi doloribus odit? Officiis animi nemo voluptates deserunt adipisci, aliquid, asperiores similique vitae aperiam ullam blanditiis impedit? Maxime, nulla beatae.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas modi repellendus repellat quidem nulla, odio veritatis ea commodi accusantium amet nesciunt unde, qui natus culpa in repudiandae aperiam quis officia consequuntur? Excepturi nihil deleniti, odit perspiciatis nostrum sapiente, explicabo tempora dicta vero eius fuga assumenda minus, et odio incidunt a modi repellendus eos error nam corporis ipsa? Fugiat, pariatur. Ullam, quidem consectetur vero ratione recusandae debitis, quis beatae reiciendis iusto, asperiores quia? Cum omnis neque quibusdam nobis ea obcaecati, veniam velit doloremque fuga libero! Deleniti repellendus a maxime voluptatibus fugiat. Laudantium animi nulla aspernatur quam, ducimus ab, ipsum veniam vero fugit sit modi harum asperiores voluptatum maiores alias dignissimos mollitia eius veritatis error voluptas sunt assumenda quia fugiat? Omnis saepe iste nesciunt optio. Nisi velit repellat, officia dicta ipsum tenetur, modi illum voluptas voluptatibus asperiores earum vitae alias necessitatibus, qui fugit saepe. Temporibus officiis saepe architecto autem mollitia laudantium ducimus perferendis quod id omnis ratione, incidunt dolore ullam deleniti quisquam fuga veniam amet impedit ut at, laboriosam, minus culpa eveniet aliquam. Assumenda dolore reiciendis fugit laudantium, esse iste minus atque pariatur laborum quasi corrupti doloremque officia obcaecati. Debitis, adipisci minus repellendus quia, nesciunt aliquam nisi ipsa iusto sed, odio maiores.',
        //     'category_id'=>1,
        //     'user_id'=>1,
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, maxime adipisci placeat, culpa eveniet explicabo incidunt totam possimus provident quod deleniti repellendus quam. Soluta quaerat similique voluptates consequatur a consequuntur sequi doloribus odit? Officiis animi nemo voluptates deserunt adipisci, aliquid, asperiores similique vitae aperiam ullam blanditiis impedit? Maxime, nulla beatae.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas modi repellendus repellat quidem nulla, odio veritatis ea commodi accusantium amet nesciunt unde, qui natus culpa in repudiandae aperiam quis officia consequuntur? Excepturi nihil deleniti, odit perspiciatis nostrum sapiente, explicabo tempora dicta vero eius fuga assumenda minus, et odio incidunt a modi repellendus eos error nam corporis ipsa? Fugiat, pariatur. Ullam, quidem consectetur vero ratione recusandae debitis, quis beatae reiciendis iusto, asperiores quia? Cum omnis neque quibusdam nobis ea obcaecati, veniam velit doloremque fuga libero! Deleniti repellendus a maxime voluptatibus fugiat. Laudantium animi nulla aspernatur quam, ducimus ab, ipsum veniam vero fugit sit modi harum asperiores voluptatum maiores alias dignissimos mollitia eius veritatis error voluptas sunt assumenda quia fugiat? Omnis saepe iste nesciunt optio. Nisi velit repellat, officia dicta ipsum tenetur, modi illum voluptas voluptatibus asperiores earum vitae alias necessitatibus, qui fugit saepe. Temporibus officiis saepe architecto autem mollitia laudantium ducimus perferendis quod id omnis ratione, incidunt dolore ullam deleniti quisquam fuga veniam amet impedit ut at, laboriosam, minus culpa eveniet aliquam. Assumenda dolore reiciendis fugit laudantium, esse iste minus atque pariatur laborum quasi corrupti doloremque officia obcaecati. Debitis, adipisci minus repellendus quia, nesciunt aliquam nisi ipsa iusto sed, odio maiores.',
        //     'category_id'=>2,
        //     'user_id'=>1,
        // ]);

        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, maxime adipisci placeat, culpa eveniet explicabo incidunt totam possimus provident quod deleniti repellendus quam. Soluta quaerat similique voluptates consequatur a consequuntur sequi doloribus odit? Officiis animi nemo voluptates deserunt adipisci, aliquid, asperiores similique vitae aperiam ullam blanditiis impedit? Maxime, nulla beatae.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas modi repellendus repellat quidem nulla, odio veritatis ea commodi accusantium amet nesciunt unde, qui natus culpa in repudiandae aperiam quis officia consequuntur? Excepturi nihil deleniti, odit perspiciatis nostrum sapiente, explicabo tempora dicta vero eius fuga assumenda minus, et odio incidunt a modi repellendus eos error nam corporis ipsa? Fugiat, pariatur. Ullam, quidem consectetur vero ratione recusandae debitis, quis beatae reiciendis iusto, asperiores quia? Cum omnis neque quibusdam nobis ea obcaecati, veniam velit doloremque fuga libero! Deleniti repellendus a maxime voluptatibus fugiat. Laudantium animi nulla aspernatur quam, ducimus ab, ipsum veniam vero fugit sit modi harum asperiores voluptatum maiores alias dignissimos mollitia eius veritatis error voluptas sunt assumenda quia fugiat? Omnis saepe iste nesciunt optio. Nisi velit repellat, officia dicta ipsum tenetur, modi illum voluptas voluptatibus asperiores earum vitae alias necessitatibus, qui fugit saepe. Temporibus officiis saepe architecto autem mollitia laudantium ducimus perferendis quod id omnis ratione, incidunt dolore ullam deleniti quisquam fuga veniam amet impedit ut at, laboriosam, minus culpa eveniet aliquam. Assumenda dolore reiciendis fugit laudantium, esse iste minus atque pariatur laborum quasi corrupti doloremque officia obcaecati. Debitis, adipisci minus repellendus quia, nesciunt aliquam nisi ipsa iusto sed, odio maiores.',
        //     'category_id'=>1,
        //     'user_id'=>2,
        // ]);
    }
}
