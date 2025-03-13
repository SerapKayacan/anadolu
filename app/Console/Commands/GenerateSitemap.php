<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:refresh';

    protected $description = 'Generate Regenerate the sitemap.xml file';

    public function handle()
    {
        // The Crawler
        SitemapGenerator::create('https://anadolutadilat.com/')
            ->hasCrawled(function (Url $url) {
                // Some logic here
                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));
    }
}
