<?php

namespace Database\Seeders;

use App\Models\RecentWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecentWork::create([
            'title' => 'Tiles Shop Management',
            'types' => 'Web development',
            'thumbnail' => 'images/portfolio/thumbnail/tiles-thumbnail.png',
            'cover_image' => 'images/portfolio/cover-image/tiles-cover-image.png',
            'sub_image' => 'images/portfolio/sub-image/tiles-sub-image.png',
            'duration' => '3 Month',
            'completion_date' => '25-12-2022',
            'description' => 'Introducing our Tiles Shop Management Software – the ultimate solution to streamline and enhance your tile retail business operations. This innovative software is meticulously designed to empower tile shop owners and managers with the tools they need to efficiently manage every aspect of their business, from inventory control to customer interactions.
            
            Our Tiles Shop Management Software offers a comprehensive suite of features tailored specifically for the tile industry:
                
            1. Inventory Management
            2. Sales and Point of Sale
            3. Customer Relationship Management (CRM)
            4. Supplier Management
            5. Reporting and Analytics
            6. Barcode and Label Printing
            7. Employee Management
            8. Multi-Location Support
            9. User-Friendly Interface
            10. Cloud-Based Accessibility
            Incorporating cutting-edge technology, our Tiles Shop Management Software ensures that you can devote more time to growing your business and providing excellent customer service.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        RecentWork::create([
            'title' => 'Dailyblogram',
            'types' => 'Web development/Blog',
            'thumbnail' => 'images/portfolio/thumbnail/blog-thumbnail.png',
            'cover_image' => 'images/portfolio/cover-image/blog-cover-image.png',
            'sub_image' => 'images/portfolio/sub-image/blog-sub-image.png',
            'duration' => '2 Month',
            'completion_date' => '07-09-2023',
            'description' => 'Welcome to Dailyblogram, your ultimate destination for insightful and engaging content across a wide range of topics. As a premier blogging website, Dailyblogram serves as a virtual haven for both writers and readers, where knowledge, inspiration, and perspectives converge.

            Explore a diverse collection of well-crafted articles, thought-provoking essays, and entertaining stories that cover everything from lifestyle, technology, health, travel, fashion, finance, culture, and much more. Our platform is designed to cater to the interests of a global audience, making it a melting pot of ideas and opinions from all walks of life.

            Key Features of Dailyblogram:

            1. Rich and Varied Content
            2. Thought Leadership
            3. Interactive Community
            4. User-Friendly Interface
            5. Personalization
            6. Fresh and Regular Updates
            7. Guest Contributions
            8. Stay Informed and Inspired
            Experience the joy of reading and writing on Dailyblogram, where each visit promises a journey of discovery and enlightenment.',
        ]);
    }
}
