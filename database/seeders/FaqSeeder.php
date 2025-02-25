<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'question' => 'How can you print a document from your laptop at HZ?',
                'answer' => '<li> Go to the <a href="https://www.hz.nl" target="_blank">HZ website</a> and log in with your username and password.</li>
                             <li> Click on "Choose File" and select the file you want to print. Repeat this step if you need to add more documents.</li>
                             <li> Tick the "Advanced" option to choose whether you want double-sided or black & white printing.</li>
                             <li> Choose the printer (either the "HZ printer" or "HZ plotter").</li>
                             <li> Register using your HZ pass on the TouchID next to the multifunctional printer and select "Print."</li>
                             <li> In the menu, select the printer where you requested the print.</li>
                             <li> The print will be completed only if there is enough credit on your printing account.</li>
                             <li> Once finished, press "Stop" on the TouchID, and finally, press "Logout."</li>',
                'link' => 'https://www.hz.nl',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.hz.nl',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'How can you scan a document and send it to your laptop at HZ?',
                'answer' => '<li>Scanning is FREE, but you must have at least €0.07 credit on your HZ pass to proceed.</li>
                             <li>Register using your HZ pass on the TouchID next to the multifunctional printer.</li>
                             <li>In the TouchID menu, select the option "Scanning - Scan".</li>
                             <li>Lay the original sheet on the feeder or glass plate.</li>
                             <li>Press "Scan and Send" -> "Scan to me" -> "Yes" -> "Start button".</li>
                             <li>Once this is ready, choose "Start Sending".</li>
                             <li>When everything is completed, press "Stop" on the TouchID, and lastly - "Logout."</li>',
                'link' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?',
                'answer' => '<li>Visit the <a href="https://webshop.hz.nl" target="_blank">HZ webshop</a>.</li>
                             <li>Pick your item of choice and place your order.</li>
                             <li>Go to your shopping cart and proceed to checkout!</li>',
                'link' => 'https://webshop.hz.nl',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'How can you book a project space?',
                'answer' => '<li>Visit the <a href="https://selfservice.hz.nl" target="_blank">Selfservice portal</a>.</li>
                             <li>Click on "Make a reservation" -> "Reserve a room".</li>
                             <li>Pick the room you want to book and view the available time slots.</li>',
                'link' => 'https://selfservice.hz.nl',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
                'answer' => '<li>After you scan your HZ pass at the barriers, you can park in the university lot.</li>',
                'link' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        DB::table('faqs')->insert($data);
    }
}
