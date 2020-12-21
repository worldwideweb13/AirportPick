<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order_table;

class Order_tableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_table::insert([
            [
                'onum' => '1',
                'tensu' => '1',
                'otime' => '2020-12-20 18:30:00',
                'item_total' => '40000',
                'dprice' => '0',
                'uid' => '1',
                'uname' => 'いしい',
                'pid' => '1',
                'comp' => '1',
                'place' => '空港',
                'timelimit' => '2020-12-24 14:00:00',
                'cold' => '常温',
                'portdate' => '2020-12-24',
                
                'delitime' => '15時',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            // [
            //     'onum' => '2',
            //     'tensu' => '4',
            //     'otime' => '2020-12-20 20:00:00',
            //     'item_total' => '28000',
            //     'dprice' => '0',
            //     'uid' => '2',
            //     'uname' => 'にしやま',
            //     'pid' => '2',
            //     'comp' => '1',
            //     'place' => '宅配',
            //     'timelimit' => '2020-12-21 17:00:00',
            //     'cold' => '冷凍',
                
            //     'delidate' => '2020-12-24',
            //     'delitime' => '午前中',
            //     'paid' => '1',
            //     'ported' => '0',
            //     'sent' => '1',
            // ],
            // [
            //     'onum' => '3',
            //     'tensu' => '10',
            //     'otime' => '2020-12-20 20:17:00',
            //     'item_total' => '8000',
            //     'dprice' => '0',
            //     'uid' => '3',
            //     'uname' => 'みむら',
            //     'pid' => '3',
            //     'comp' => '1',
            //     'place' => '宅配',
            //     'timelimit' => '2020-12-21 17:00:00',
            //     'cold' => '常温',
                
            //     'delidate' => '2020-12-24',
            //     'delitime' => '午前中',
            //     'paid' => '1',
            //     'ported' => '0',
            //     'sent' => '0',
            // ],
            // [
            //     'onum' => '4',
            //     'tensu' => '4',
            //     'otime' => '2020-12-20 20:30:00',
            //     'item_total' => '12800',
            //     'dprice' => '0',
            //     'uid' => '1',
            //     'uname' => 'いしい',
            //     'pid' => '4',
            //     'comp' => '0',
            //     'place' => '宅配',
            //     'timelimit' => '2020-12-24 17:00:00',
            //     'cold' => '冷蔵',
                
            //     'delidate' => '2020-12-27',
            //     'delitime' => '15-18時',
            //     'paid' => '1',
            //     'ported' => '0',
            //     'sent' => '0',
            // ],
            // [
            //     'onum' => '5',
            //     'tensu' => '3',
            //     'otime' => '2020-12-20 20:40:00',
            //     'item_total' => '6000',
            //     'dprice' => '0',
            //     'uid' => '4',
            //     'uname' => 'しょうじ',
            //     'pid' => '4',
            //     'comp' => '0',
            //     'place' => '宅配',
            //     'timelimit' => '2020-12-22 17:00:00',
            //     'cold' => '常温',
                
            //     'delidate' => '2020-12-25',
            //     'delitime' => '指定なし',
            //     'paid' => '1',
            //     'ported' => '0',
            //     'sent' => '0',
            // ],
            // [
            //     'onum' => '6',
            //     'tensu' => '5',
            //     'otime' => '2020-12-20 20:45:00',
            //     'item_total' => '6200',
            //     'dprice' => '0',
            //     'uid' => '5',
            //     'uname' => 'ごろうまる',
            //     'pid' => '1',
            //     'comp' => '0',
            //     'place' => '宅配',
            //     'timelimit' => '2020-12-21 17:00:00',
            //     'cold' => '冷蔵',
                
            //     'delidate' => '2020-12-24',
            //     'delitime' => '午前中',
            //     'paid' => '1',
            //     'ported' => '0',
            //     'sent' => '0',
            // ],
            // [
            //     'onum' => '7',
            //     'tensu' => '3',
            //     'otime' => '2020-12-20 21:00:00',
            //     'item_total' => '31000',
            //     'dprice' => '0',
            //     'uid' => '2',
            //     'uname' => 'にしやま',
            //     'pid' => '0',
            //     'comp' => '0',
            //     'place' => '宅配',
            //     'timelimit' => '2020-12-25 17:00:00',
            //     'cold' => '冷凍',
                
            //     'delidate' => '2020-12-28',
            //     'delitime' => '午前中',
            //     'paid' => '1',
            //     'ported' => '0',
            //     'sent' => '0',
            // ],
            [
                'onum' => '8',
                'tensu' => '3',
                'otime' => '2020-12-20 21:30:00',
                'item_total' => '9600',
                'dprice' => '0',
                'uid' => '3',
                'uname' => 'みむら',
                'pid' => '3',
                'comp' => '0',
                'place' => '空港',
                'timelimit' => '2020-12-30 19:00:00',
                'cold' => '常温',
                'portdate' => '2020-12-30',
                
                'delitime' => '20時',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '9',
                'tensu' => '5',
                'otime' => '2020-12-20 21:40:00',
                'item_total' => '5000',
                'dprice' => '0',
                'uid' => '6',
                'uname' => 'むつごろう',
                'pid' => '0',
                'comp' => '1',
                'place' => '空港',
                'timelimit' => '2020-12-22 16:00:00',
                'cold' => '常温',
                'portdate' => '2020-12-22',
                
                'delitime' => '17時',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            ]);
    }
}
