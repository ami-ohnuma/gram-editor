<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GramTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gram_templates')->insert([
            [
                'name' => '直列の単語選択（単純版）',
                'content' => '#JSGF V1.0 MS932;

grammar 直列の単語選択（単純版）;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '直列の単語選択（多要素版）',
                'content' => '#JSGF V1.0 UTF-8;
 
grammar 直列の単語選択（多要素版）;
    
// 発話「やまだ」と「わたべ」または「わたなべ」を、音声認識結果「山田」と「渡部」で返すルールです。
public <name1> = 山田\やまだ;
public <name2> = 渡部\わたべ/わたなべ;
    
    
// 0から99までの数を桁読みで音声認識するルールです。
public <count0_99> = (<0_9> | <10_90> | <10_90> <0_9>);
<0_9> = (0\ぜろ/れい | 1\いち | 2\に/にー | 3\さん | 4\よん | 5\ご/ごー | 6\ろく | 7\なな  | 8\はち | 9\きゅー );
<10_90> = (10\じゅー | 20\にじゅー | 30\さんじゅー | 40\よんじゅー | 50\ごじゅー | 60\ろくじゅー | 70\ななじゅー | 80\はちじゅー | 90\きゅーじゅー );',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '並列の単語選択（単純版）',
                'content' => '#JSGF V1.0 MS932;

grammar 並列の単語選択（単純版）;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '並列の単語選択（多要素版）',
                'content' => '#JSGF V1.0 MS932;

grammar 並列の単語選択（多要素版）;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '省略できる単語選択',
                'content' => '#JSGF V1.0 MS932;

grammar 省略できる単語選択;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '電話番号入力',
                'content' => '#JSGF V1.0 MS932;

grammar 電話番号入力;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '郵便番号入力',
                'content' => '#JSGF V1.0 MS932;

grammar 郵便番号入力;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '0から9999までの数値入力',
                'content' => '#JSGF V1.0 MS932;

grammar 0から9999までの数値入力;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'マイナス99.9から100.0までの数値入力',
                'content' => '#JSGF V1.0 MS932;

grammar マイナス99.9から100.0までの数値入力;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '物品名と数入力',
                'content' => '#JSGF V1.0 MS932;

grammar 物品名と数入力;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '豊島区の地番入力',
                'content' => '#JSGF V1.0 MS932;

grammar 豊島区の地番入力;

public <test> = (おはよーx)

<テスト> = こんにちはテスト;',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
