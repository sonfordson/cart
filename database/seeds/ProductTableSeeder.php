<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'imagepath' => 'https://books.google.co.ke/books/content?id=zpvysRGsBlwC&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE73HhjH5mH3DBbVaEOYiYYH4a7X3ehd8ONQC0G9lejW8ZM2eT0FL9XhxTdDg0so0smt-egPMLP5bgsHU330G51Ad5Oi11TJ3I6q3AiiFJm7Vn_ZDMaMh0icBHGChgvDiJaz-wRnS',
            'title' => 'Chamber of Secrets',
            'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 70

        ]);
        $product->save();
        $product = new Product([
            'imagepath' => 'https://4.bp.blogspot.com/-Ie6UE9i8HJ4/Vr3_j6CsbRI/AAAAAAAABzY/DFPJrAdYVzU/s400/C%25C3%25A2mara%2BSecreta%2Blivro.jpg',
            'title' => 'Prisoner of Azkaban',
            'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 60

        ]);
        $product->save();
        $product = new Product([
            'imagepath' => 'http://t09.deviantart.net/2gSWw0G_08X9jE9-FKMQjo7W2wQ=/fit-in/700x350/filters:fixed_height(100,100):origin()/pre04/b92f/th/pre/f/2007/037/1/9/hp_and_the_deathly_hallows_by_harry_potter_spain.jpg',
            'title' => 'Half-Blood Prince',
            'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 50

        ]);
        $product->save();
        $product = new Product([
            'imagepath' => 'https://4.bp.blogspot.com/-Ie6UE9i8HJ4/Vr3_j6CsbRI/AAAAAAAABzY/DFPJrAdYVzU/s400/C%25C3%25A2mara%2BSecreta%2Blivro.jpg',
            'title' => 'The Cursed Child',
            'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 78

        ]);
        $product->save();
        $product = new Product([
            'imagepath' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSXraCY6qtEBxgaBTcJ4mglftIE-6Jaz7QKPKIrNfL_dS3NAw0S',
            'title' => ' Order of the Phoenix',
            'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 90

        ]);
        $product->save();
        $product = new Product([
            'imagepath' => 'http://t09.deviantart.net/2gSWw0G_08X9jE9-FKMQjo7W2wQ=/fit-in/700x350/filters:fixed_height(100,100):origin()/pre04/b92f/th/pre/f/2007/037/1/9/hp_and_the_deathly_hallows_by_harry_potter_spain.jpg',
            'title' => 'Harry  Porter',
            'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 43

        ]);
        $product->save();
        $product = new Product([
            'imagepath' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRRD-WYf4U7Z_GXd0Pzpp4glmhziv-CFNLkEURPtlR-SINKsIC6',
            'title' => 'Harry  Porter',
            'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'price' => 65

        ]);
        $product->save();
    }
}
