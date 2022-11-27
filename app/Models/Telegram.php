<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class Telegram extends Model
{
    use HasFactory;
    private const chat_id = -1001652658852;

    public function sendMessage($number)
    {
        $date = date('Y-m-d');
        $hour = date('H:i');
        $text = " Date: <b>$date</b>\n Hour: <b>$hour</b>\n Number: <b>$number</b>";
        return Http::post('https://api.telegram.org/bot' . env('TELEGRAM_TOKEN'). '/sendMessage',
            ['chat_id' => self::chat_id, 'text' => $text, 'parse_mode' => 'html']
        );
    }
}
