<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book1 = new \App\Book();
        $book1->name= 'Vo dong can khon';
        $book1->category= 'Huyen huyen';
        $book1->author='Thien tam tho dau';
        $book1->save();

        $book2 = new \App\Book();
        $book2->name= 'Dai chua te';
        $book2->category= 'Huyen huyen';
        $book2->author='Thien tam tho dau';
        $book2->save();
    }
}
