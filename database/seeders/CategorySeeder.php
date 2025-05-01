<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Criminal Laws', 'description' => 'Laws related to crimes and punishments.'],
            ['name' => 'Election Laws', 'description' => 'Regulations governing election procedures.'],
            ['name' => 'Family Laws', 'description' => 'Matters like marriage, divorce, and custody.'],
            ['name' => 'General Health / Medical', 'description' => 'Legal issues related to healthcare.'],
            ['name' => 'International Laws', 'description' => 'Rules between nations and global conduct.'],
            ['name' => 'Labour Laws', 'description' => 'Rights and duties of employers and workers.'],
            ['name' => 'Land and Property', 'description' => 'Ownership, leases, and property disputes.'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
