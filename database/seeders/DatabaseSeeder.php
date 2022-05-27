<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();

         Listing::factory(6)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

//        Listing::create([
//            'title'       => 'Laravel Senior Developer',
//            'tags'        => 'laravel, javascript',
//            'company'     => 'Acme Corp',
//            'location'    => 'Dublin, Ireland',
//            'email'       => 'email1@eamil.com',
//            'website'     => 'https://www.acme.com',
//            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
//                              Lorem Ipsum has been the industry standard dummy text ever since the 1500s,
//                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
//                              It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
//                              It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
//                              and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
//        ]);
//
//        Listing::create([
//            'title'       => 'Full-Stack Engineer',
//            'tags'        => 'laravel, backend, api',
//            'company'     => 'Spark Industries',
//            'location'    => 'New York, NY',
//            'email'       => 'email2@eamil.com',
//            'website'     => 'https://starkindustries.com',
//            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
//                              Lorem Ipsum has been the industry standard dummy text ever since the 1500s,
//                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
//                              It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
//                              It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
//                              and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
//        ]);
    }
}
