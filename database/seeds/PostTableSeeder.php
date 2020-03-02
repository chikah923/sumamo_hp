<?php
use App\user;
use App\Tag;
use App\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $author1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('password'),
        ]);
        $author2 = User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@smith.com',
            'password' => Hash::make('password'),
        ]);
        $author3 = User::create([
            'name' => 'Mary Anne',
            'email' => 'mary@anne.com',
            'password' => Hash::make('password'),
        ]);

        $category1 = Category::create([ 'name' => 'Company News' ]);
        $category2 = Category::create([ 'name' => 'Updates' ]);
        $category3 = Category::create([ 'name' => 'Design' ]);
        $category4 = Category::create([ 'name' => 'Marketing' ]);
        $category5 = Category::create([ 'name' => 'Publishing' ]);
        $category6 = Category::create([ 'name' => 'Product' ]);
        $category7 = Category::create([ 'name' => 'Partnership' ]);
        $category8 = Category::create([ 'name' => 'Hiring' ]);
        $category9 = Category::create([ 'name' => 'Tech News' ]);
        $category10 = Category::create([ 'name' => 'Management' ]);

        $tag1 = Tag::create([ 'name' => 'Job' ]);
        $tag2 = Tag::create([ 'name' => 'Staff' ]);
        $tag3 = Tag::create([ 'name' => 'Customers' ]);
        $tag4 = Tag::create([ 'name' => 'Record' ]);


        $post1 = $author1->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'company news',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
        ]);


        $post2 = Post::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'company news',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg',
            'user_id' => 2,
        ]);

        $post3 = Post::create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'company news',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg',
            'user_id' => 3,
        ]);

        $post4 = Post::create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'company news',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'category_id' => $category4->id,
            'image' => 'posts/4.jpg',
            'user_id' => 4,
        ]);

        $post5 = Post::create([
            'title' => 'New published books to read by a product designer',
            'description' => 'company news',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'category_id' => $category5->id,
            'image' => 'posts/5.jpg',
            'user_id' => 1,
        ]);

        $post6 = Post::create([
            'title' => 'This is why its time to ditch dress codes at work',
            'description' => 'company news',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'category_id' => $category6->id,
            'image' => 'posts/6.jpg',
            'user_id' => 1,
        ]);


        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag4->id]);
        $post3->tags()->attach([$tag4->id, $tag1->id]);
        $post4->tags()->attach([$tag1->id, $tag2->id, $tag3->id]);
        $post5->tags()->attach([$tag3->id, $tag4->id]);
        $post6->tags()->attach([$tag1->id, $tag4->id]);

    }
}
