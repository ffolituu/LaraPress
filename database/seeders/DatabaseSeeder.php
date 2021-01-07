<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Categories
        DB::table('categories')->insert([
            'name' => 'Web',
            'slug' => 'web',
        ]);
        
        DB::table('categories')->insert([
            'name' => 'SEO',
            'slug' => 'seo',
        ]);

        DB::table('categories')->insert([
            'name' => 'Graphisme',
            'slug' => 'graphisme',
        ]);

        // Roles
        DB::table('roles')->insert([
            'name' => 'Super Admin',
            'slug' => 'super-admin',
        ]);
        
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'Editeur',
            'slug' => 'editeur',
        ]);

        DB::table('roles')->insert([
            'name' => 'Internaute',
            'slug' => 'internaute',
        ]);
        

        User::factory(10)->create();
        Page::factory(4)->create();
        Post::factory(15)->create();
    }
}
