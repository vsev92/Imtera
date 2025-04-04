<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RecipientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dt = Carbon::today();

        $recipients = [
            ['id' => 1, 'owner_id' => 1, 'fullName' => 'Иванов А.А.', 'phone' => '89501111111', 'email' => 'ivanovaa@mail.ru', 'birthday' => $dt],
            ['id' => 2, 'owner_id' => 1, 'fullName' => 'Петров А.А.', 'phone' => '89501111112', 'email' => 'petrovaa@mail.ru', 'birthday' => $dt],
            ['id' => 3, 'owner_id' => 1, 'fullName' => 'Сергеев А.А.', 'phone' => '89501111113', 'email' => 'sergeevaa@mail.ru', 'birthday' => $dt],
            ['id' => 4, 'owner_id' => 1, 'fullName' => 'Смирнов А.А.', 'phone' => '89501111114', 'email' => 'smirnovaa@mail.ru', 'birthday' => $dt],
        ];


        DB::table('recipients')->insert($recipients);
    }
}
