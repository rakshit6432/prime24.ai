<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['id' => 1, 'language' => 'Afrikaans (South Africa)', 'language_code' => 'af-ZA', 'language_flag' => '/img/flags/za.svg'],
            ['id' => 2, 'language' => 'Arabic', 'language_code' => 'ar-XA', 'language_flag' => '/img/flags/ae.svg'],
            ['id' => 3, 'language' => 'Arabic (Egypt)', 'language_code' => 'ar-EG', 'language_flag' => '/img/flags/eg.svg'],
            ['id' => 4, 'language' => 'Arabic (Saudi Arabia)', 'language_code' => 'ar-SA', 'language_flag' => '/img/flags/sa.svg'],
            ['id' => 5, 'language' => 'Bengali (India)', 'language_code' => 'bn-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 6, 'language' => 'Bulgarian (Bulgaria)', 'language_code' => 'bg-BG', 'language_flag' => '/img/flags/bg.svg'],
            ['id' => 7, 'language' => 'Catalan (Spain)', 'language_code' => 'ca-ES', 'language_flag' => '/img/flags/es.svg'],
            ['id' => 8, 'language' => 'Chinese (Cantonese)', 'language_code' => 'zh-HK', 'language_flag' => '/img/flags/cn.svg'],
            ['id' => 9, 'language' => 'Chinese (Mandarin)', 'language_code' => 'cmn-CN', 'language_flag' => '/img/flags/cn.svg'],
            ['id' => 10, 'language' => 'Chinese (M. Simplified)', 'language_code' => 'zh-CN', 'language_flag' => '/img/flags/cn.svg'],
            ['id' => 11, 'language' => 'Chinese (Hong Kong)', 'language_code' => 'yue-HK', 'language_flag' => '/img/flags/hk.svg'],
            ['id' => 12, 'language' => 'Chinese (Taiwanese M.)', 'language_code' => 'zh-TW', 'language_flag' => '/img/flags/cn.svg'],
            ['id' => 13, 'language' => 'Croatian (Croatia)', 'language_code' => 'hr-HR', 'language_flag' => '/img/flags/hr.svg'],
            ['id' => 14, 'language' => 'Czech (Czech Republic)', 'language_code' => 'cs-CZ', 'language_flag' => '/img/flags/cz.svg'],
            ['id' => 15, 'language' => 'Danish (Denmark)', 'language_code' => 'da-DK', 'language_flag' => '/img/flags/dk.svg'],
            ['id' => 16, 'language' => 'Dutch (Belgium)', 'language_code' => 'nl-BE', 'language_flag' => '/img/flags/be.svg'],
            ['id' => 17, 'language' => 'Dutch (Netherlands)', 'language_code' => 'nl-NL', 'language_flag' => '/img/flags/nl.svg'],
            ['id' => 18, 'language' => 'English (Australia)', 'language_code' => 'en-AU', 'language_flag' => '/img/flags/au.svg'],
            ['id' => 19, 'language' => 'English (Canada)', 'language_code' => 'en-CA', 'language_flag' => '/img/flags/ca.svg'],
            ['id' => 20, 'language' => 'English (Hongkong)', 'language_code' => 'en-HK', 'language_flag' => '/img/flags/hk.svg'],            
            ['id' => 21, 'language' => 'English (India)', 'language_code' => 'en-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 22, 'language' => 'English (Ireland)', 'language_code' => 'en-IE', 'language_flag' => '/img/flags/ie.svg'],
            ['id' => 23, 'language' => 'English (New Zealand)', 'language_code' => 'en-NZ', 'language_flag' => '/img/flags/nz.svg'],
            ['id' => 24, 'language' => 'English (Philippines)', 'language_code' => 'en-PH', 'language_flag' => '/img/flags/ph.svg'],
            ['id' => 25, 'language' => 'English (Singapore)', 'language_code' => 'en-SG', 'language_flag' => '/img/flags/sg.svg'],
            ['id' => 26, 'language' => 'English (South Africa)', 'language_code' => 'en-ZA', 'language_flag' => '/img/flags/za.svg'],
            ['id' => 27, 'language' => 'English (UK)', 'language_code' => 'en-GB', 'language_flag' => '/img/flags/gb.svg'],
            ['id' => 28, 'language' => 'English (USA)', 'language_code' => 'en-US', 'language_flag' => '/img/flags/us.svg'],
            ['id' => 29, 'language' => 'English (Wales)', 'language_code' => 'en-GB-WLS', 'language_flag' => '/img/flags/gb-wls.svg'],
            ['id' => 30, 'language' => 'Estonian (Estonia)', 'language_code' => 'et-EE', 'language_flag' => '/img/flags/ee.svg'],
            ['id' => 31, 'language' => 'Filipino (Philippines)', 'language_code' => 'fil-PH', 'language_flag' => '/img/flags/ph.svg'],
            ['id' => 32, 'language' => 'Finnish (Finland)', 'language_code' => 'fi-FI', 'language_flag' => '/img/flags/fi.svg'],
            ['id' => 33, 'language' => 'French (Belgium)', 'language_code' => 'fr-BE', 'language_flag' => '/img/flags/be.svg'],
            ['id' => 34, 'language' => 'French (France)', 'language_code' => 'fr-FR', 'language_flag' => '/img/flags/fr.svg'],
            ['id' => 35, 'language' => 'French (Canada)', 'language_code' => 'fr-CA', 'language_flag' => '/img/flags/ca.svg'],
            ['id' => 36, 'language' => 'French (Switzerland)', 'language_code' => 'fr-CH', 'language_flag' => '/img/flags/ch.svg'],
            ['id' => 37, 'language' => 'German (Austria)', 'language_code' => 'de-AT', 'language_flag' => '/img/flags/at.svg'],
            ['id' => 38, 'language' => 'German (Germany)', 'language_code' => 'de-DE', 'language_flag' => '/img/flags/de.svg'],
            ['id' => 39, 'language' => 'German (Switzerland)', 'language_code' => 'de-CH', 'language_flag' => '/img/flags/ch.svg'],
            ['id' => 40, 'language' => 'Greek (Greece)', 'language_code' => 'el-GR', 'language_flag' => '/img/flags/gr.svg'],
            ['id' => 41, 'language' => 'Gujarati (India)', 'language_code' => 'gu-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 42, 'language' => 'Hebrew (Israel)', 'language_code' => 'he-IL', 'language_flag' => '/img/flags/il.svg'],
            ['id' => 43, 'language' => 'Hindi (India)', 'language_code' => 'hi-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 44, 'language' => 'Hungarian (Hungary)', 'language_code' => 'hu-HU', 'language_flag' => '/img/flags/hu.svg'],
            ['id' => 45, 'language' => 'Icelandic (Iceland)', 'language_code' => 'is-IS', 'language_flag' => '/img/flags/is.svg'],
            ['id' => 46, 'language' => 'Indonesian (Indonesia)', 'language_code' => 'id-ID', 'language_flag' => '/img/flags/id.svg'],
            ['id' => 47, 'language' => 'Irish (Ireland)', 'language_code' => 'ga-IE', 'language_flag' => '/img/flags/ie.svg'],
            ['id' => 48, 'language' => 'Italian (Italy)', 'language_code' => 'it-IT', 'language_flag' => '/img/flags/it.svg'],
            ['id' => 49, 'language' => 'Japanese (Japan)', 'language_code' => 'ja-JP', 'language_flag' => '/img/flags/jp.svg'],
            ['id' => 50, 'language' => 'Kannada (India)', 'language_code' => 'kn-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 51, 'language' => 'Korean (South Korea)', 'language_code' => 'ko-KR', 'language_flag' => '/img/flags/kr.svg'],
            ['id' => 52, 'language' => 'Latvian (Latvia)', 'language_code' => 'lv-LV', 'language_flag' => '/img/flags/lv.svg'],
            ['id' => 53, 'language' => 'Lithuanian (Lithuania)', 'language_code' => 'lt-LT', 'language_flag' => '/img/flags/lt.svg'],
            ['id' => 54, 'language' => 'Malayalam (India)', 'language_code' => 'ml-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 55, 'language' => 'Malay (Malaysia)', 'language_code' => 'ms-MY', 'language_flag' => '/img/flags/my.svg'],
            ['id' => 56, 'language' => 'Maltese (Malta)', 'language_code' => 'mt-MT', 'language_flag' => '/img/flags/mt.svg'],
            ['id' => 57, 'language' => 'Marathi (India)', 'language_code' => 'mr-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 58, 'language' => 'Norwegian (Norway)', 'language_code' => 'nb-NO', 'language_flag' => '/img/flags/no.svg'],
            ['id' => 59, 'language' => 'Polish (Poland)', 'language_code' => 'pl-PL', 'language_flag' => '/img/flags/pl.svg'],
            ['id' => 60, 'language' => 'Portuguese (Brazil)', 'language_code' => 'pt-BR', 'language_flag' => '/img/flags/br.svg'],
            ['id' => 61, 'language' => 'Portuguese (Portugal)', 'language_code' => 'pt-PT', 'language_flag' => '/img/flags/pt.svg'],
            ['id' => 62, 'language' => 'Romanian (Romania)', 'language_code' => 'ro-RO', 'language_flag' => '/img/flags/ro.svg'],
            ['id' => 63, 'language' => 'Russian (Russia)', 'language_code' => 'ru-RU', 'language_flag' => '/img/flags/ru.svg'],
            ['id' => 64, 'language' => 'Serbian (Serbia)', 'language_code' => 'sr-RS', 'language_flag' => '/img/flags/rs.svg'],
            ['id' => 65, 'language' => 'Slovak (Slovakia)', 'language_code' => 'sk-SK', 'language_flag' => '/img/flags/sk.svg'],
            ['id' => 66, 'language' => 'Slovenian (Slovenia)', 'language_code' => 'sl-SI', 'language_flag' => '/img/flags/si.svg'],
            ['id' => 67, 'language' => 'Spanish (Argentina)', 'language_code' => 'es-AR', 'language_flag' => '/img/flags/ar.svg'],
            ['id' => 68, 'language' => 'Spanish (Colombia)', 'language_code' => 'es-CO', 'language_flag' => '/img/flags/co.svg'],
            ['id' => 69, 'language' => 'Spanish (Spain)', 'language_code' => 'es-ES', 'language_flag' => '/img/flags/es.svg'],
            ['id' => 70, 'language' => 'Spanish (Mexico)', 'language_code' => 'es-MX', 'language_flag' => '/img/flags/mx.svg'],
            ['id' => 71, 'language' => 'Spanish (USA)', 'language_code' => 'es-US', 'language_flag' => '/img/flags/us.svg'],
            ['id' => 72, 'language' => 'Swahili (Kenya)', 'language_code' => 'sw-KE', 'language_flag' => '/img/flags/ke.svg'],
            ['id' => 73, 'language' => 'Swedish (Sweden)', 'language_code' => 'sv-SE', 'language_flag' => '/img/flags/se.svg'],
            ['id' => 74, 'language' => 'Tamil (India)', 'language_code' => 'ta-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 75, 'language' => 'Telugu (India)', 'language_code' => 'te-IN', 'language_flag' => '/img/flags/in.svg'],
            ['id' => 76, 'language' => 'Thai (Thailand)', 'language_code' => 'th-TH', 'language_flag' => '/img/flags/th.svg'],
            ['id' => 77, 'language' => 'Turkish (Turkey)', 'language_code' => 'tr-TR', 'language_flag' => '/img/flags/tr.svg'],
            ['id' => 78, 'language' => 'Ukrainian (Ukraine)', 'language_code' => 'uk-UA', 'language_flag' => '/img/flags/ua.svg'],
            ['id' => 79, 'language' => 'Urdu (Pakistan)', 'language_code' => 'ur-PK', 'language_flag' => '/img/flags/pk.svg'],
            ['id' => 80, 'language' => 'Vietnamese (Vietnam)', 'language_code' => 'vi-VN', 'language_flag' => '/img/flags/vn.svg'],
            ['id' => 81, 'language' => 'Welsh (Wales)', 'language_code' => 'cy-GB', 'language_flag' => '/img/flags/gb-wls.svg'],
        ];


        foreach ($languages as $language) {
            Language::updateOrCreate(['id' => $language['id']], $language);
        }
    }
}
