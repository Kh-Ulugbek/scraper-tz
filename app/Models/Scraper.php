<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scraper extends Model
{
    use HasFactory;

    public static function getNumber()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://aqicn.org/city/uzbekistan/tashkent/us-embassy');
        return $crawler->filter('#aqiwgtvalue')->text();
    }
}
