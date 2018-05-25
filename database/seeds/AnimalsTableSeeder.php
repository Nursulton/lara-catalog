<?php

use App\Animal;
use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create([
        	'cat_id' => 1,
        	'name' => 'walrus',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nam provident, quaerat reiciendis hic! Consequatur earum quisquam nam repellat neque pariatur distinctio recusandae, suscipit! Necessitatibus quisquam tenetur iusto, earum architecto.',
        	'image' => '1.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 3,
        	'name' => 'monkey',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora necessitatibus excepturi, repudiandae animi nostrum adipisci repellat quasi voluptate eveniet, magnam iusto itaque eaque numquam! Doloremque quas aliquid accusamus! Sint quasi incidunt quis, aliquid quisquam animi omnis aperiam nesciunt inventore nam? Quam sunt tenetur eius quisquam odio suscipit repellat ullam officia?',
        	'image' => '2.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 3,
        	'name' => 'lion',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quos unde nulla, hic explicabo sunt deleniti asperiores delectus quisquam architecto. Recusandae eum ipsum voluptatem veritatis molestias! Quidem accusamus omnis consequuntur consequatur a cum nihil, necessitatibus vitae atque voluptas, perferendis dolor!',
        	'image' => '3.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 1,
        	'name' => 'medusa',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nam provident, quaerat reiciendis hic! Consequatur earum quisquam nam repellat neque pariatur distinctio recusandae, suscipit! Necessitatibus quisquam tenetur iusto, earum architecto.',
        	'image' => '4.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 3,
        	'name' => 'dog',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora necessitatibus excepturi, repudiandae animi nostrum adipisci repellat quasi voluptate eveniet, magnam iusto itaque eaque numquam! Doloremque quas aliquid accusamus! Sint quasi incidunt quis, aliquid quisquam animi omnis aperiam nesciunt inventore nam? Quam sunt tenetur eius quisquam odio suscipit repellat ullam officia?',
        	'image' => '5.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 2,
        	'name' => 'vulture',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quos unde nulla, hic explicabo sunt deleniti asperiores delectus quisquam architecto. Recusandae eum ipsum voluptatem veritatis molestias! Quidem accusamus omnis consequuntur consequatur a cum nihil, necessitatibus vitae atque voluptas, perferendis dolor!',
        	'image' => '5.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 3,
        	'name' => 'bear',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nam provident, quaerat reiciendis hic! Consequatur earum quisquam nam repellat neque pariatur distinctio recusandae, suscipit! Necessitatibus quisquam tenetur iusto, earum architecto.',
        	'image' => '7.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 3,
        	'name' => 'deer',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora necessitatibus excepturi, repudiandae animi nostrum adipisci repellat quasi voluptate eveniet, magnam iusto itaque eaque numquam! Doloremque quas aliquid accusamus! Sint quasi incidunt quis, aliquid quisquam animi omnis aperiam nesciunt inventore nam? Quam sunt tenetur eius quisquam odio suscipit repellat ullam officia?',
        	'image' => '8.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 3,
        	'name' => 'ox',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quos unde nulla, hic explicabo sunt deleniti asperiores delectus quisquam architecto. Recusandae eum ipsum voluptatem veritatis molestias! Quidem accusamus omnis consequuntur consequatur a cum nihil, necessitatibus vitae atque voluptas, perferendis dolor!',
        	'image' => '9.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 1,
        	'name' => 'medusa2',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nam provident, quaerat reiciendis hic! Consequatur earum quisquam nam repellat neque pariatur distinctio recusandae, suscipit! Necessitatibus quisquam tenetur iusto, earum architecto.',
        	'image' => '10.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 3,
        	'name' => 'dog2',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora necessitatibus excepturi, repudiandae animi nostrum adipisci repellat quasi voluptate eveniet, magnam iusto itaque eaque numquam! Doloremque quas aliquid accusamus! Sint quasi incidunt quis, aliquid quisquam animi omnis aperiam nesciunt inventore nam? Quam sunt tenetur eius quisquam odio suscipit repellat ullam officia?',
        	'image' => '11.jpeg'
        ]);
        Animal::create([
        	'cat_id' => 3,
        	'name' => 'deer2',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quos unde nulla, hic explicabo sunt deleniti asperiores delectus quisquam architecto. Recusandae eum ipsum voluptatem veritatis molestias! Quidem accusamus omnis consequuntur consequatur a cum nihil, necessitatibus vitae atque voluptas, perferendis dolor!',
        	'image' => '12.jpeg'
        ]);
    }
}
