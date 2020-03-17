<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class CategoryAndProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Pizza'],
            ['name' => 'Pasta'],
            ['name' => 'Desserts'],
            ['name' =>  'Dranken'],
            ['name' =>  'Antipasti'],
            ['name' =>  'Overig']
        ];

        $subCategories = [
            ['Kwaliteits wijnen', 4],
            ['Italiaanse wijnen', 4],
            ['Aperatieven/ likeuren', 4],
            ['Bieren', 4],
            ['Overige dranken', 4],

            ['Pane e olive (Brood en olijven)', 5],
            ['Zuppe', 5],
            ['Fredi (Koude voorgerechten)', 5],
            ['Caldi (Warme voorgerechten)', 5],
            ['Insalata', 5],
            ['Bijgerechten', 5],
        ];

        foreach ($categories AS $c) {
            Category::UpdateOrCreate($c, $c);
        }

        foreach ($subCategories AS $sc) {
            Category::UpdateOrCreate(
                ['name' => $sc[0], 'category_id' => $sc[1]],
                ['name' => $sc[0], 'category_id' => $sc[1]]
            );
        }


        //Array with name, category_id, description, price and image
        $products = [
            ['Salame', 1, 'Tomaten, kaas en salami', 5, '/images/pizza/salami.png'],
            ['Caprese', 1, 'Tomaten, mozzarella, cherry tomaatjes, verse basilicum en verse knoflook', 6.5, '/images/pizza/caprese.png'],
            ['Napolitana', 1, 'Tomaten, kaas, kappertjes en ansjovis', 5.5, '/images/pizza/napolitana.png'],
            ['Prosciutto', 1, 'Tomaten, kaas en ham', 6, '/images/pizza/prosciutto.png'],
            ['Funghi', 1, 'Tomaten, kaas en champignons', 6.45, '/images/pizza/funghi.png'],
            ['Quattro Stagioni', 1, 'Tomaten, kaas, champignons, ham, salami, ansjovis, kappertjes en olijven', 8.0, '/images/pizza/stagioni.png'],
            ['Mista', 1, 'Tomaten, kaas, champignons, ham, salami, garnalen en zalm', 10.0, '/images/pizza/mista.png'],
            ['Tonno', 1, 'Tomaten, kaas, tonijn en uien', 8.5, '/images/pizza/tonno.png'],
            ['Peperoni', 1, 'Tomaten, kaas, champignons, uien, paprika en spaanse pepers', 9.0, '/images/pizza/peperoni.png'],
            ['Capricciosa', 1, 'Tomaten, kaas, garnalen, zalm, salami, paprika en ham', 8.5, '/images/pizza/capricciosa.png'],
            ['Calzone', 1, 'Dubbel geslagen pizza gevuld met tomaten, kaas, ham en salami', 7.5, '/images/pizza/calzone.png'],
            ['Capricciosa Speciale', 1, 'Tomaten, kaas, champignons, ham, salami, garnalen, zalm, olijven, paprika en uien', 10.0, '/images/pizza/capricciosa-speciale.png'],
            ['Francescana', 1, 'Tomaten, kaas, champignons, artisjokken en uien', 8.5, '/images/pizza/francescana.png'],
            ['Stella Marina', 1, 'Tomaten, kaas, garnalen en zalm', 8.5, '/images/pizza/marina.png'],
            ['Adriatica', 1, 'Tomaten, kaas, tonijn, garnalen en ansjovis', 10.0, '/images/pizza/adriatica.png'],

            ['Napolitana', 2, 'Met tomatensaus, parmezaanse kaas en peterselie', 4.5, '/images/pasta/pasta.jpg'],
            ['All\'aglio', 2, 'Met olijfolie, knoflook, peterselie en parmezaanse kaas', 5.5, '/images/pasta/pasta.jpg'],
            ['Bolognese', 2, 'Met rundergehakt in tomatensaus en parmezaanse kaas', 6.0, '/images/pasta/pasta.jpg'],
            ['Carbonara', 2, 'Met ei, peterselie, spek, spaanse peper, room, knoflook, parmezaanse kaas en uien', 7.0, '/images/pasta/pasta.jpg'],
            ['Burinata', 2, 'Met champignons, ham, doperwten, room, parmezaanse kaas en uien', 7.0, '/images/pasta/pasta.jpg'],
            ['Matriciana', 2, 'Met tomatensaus, gerooktspek, uien en parmezaanse kaas (pikant)', 9.0, '/images/pasta/pasta.jpg'],
            ['Vegetariana', 2, 'Met champignons, artisjokken, paprika, uien, kappertjes in tomatensaus en parmezaanse kaas', 9.0, '/images/pasta/pasta.jpg'],
            ['Al Pesto', 2, 'Met groene pesto, pijnboompitjes, room, parmezaanse kaas en verse knoflook', 10.0, '/images/pasta/pasta.jpg'],
            ['Quattro Formaggi', 2, 'Met vier verschillende soorten kaas in roomsaus', 8.0, '/images/pasta/pasta.jpg'],
            ['Pasta al spinacina', 2, 'Met spinazie, mozzarella, room, parmezaanse kaas, verse peterselie en verse knoflook', 10, '/images/pasta/pasta.jpg'],

            ['Tiramisu', 3, 'Heerlijke Italiaans cake dessert, 3.5% alcohol', 5.0, '/images/desserts/dessert.png'],

            ['Frascati', 7, '', 25.0, '/images/drinks/drink.jpg'],
            ['Verdicchio', 7, '', 25.0, '/images/drinks/drink.jpg'],
            ['Barolo', 7, '', 25.0, '/images/drinks/drink.jpg'],
            ['Barbera', 7, '', 25.0, '/images/drinks/drink.jpg'],
            ['Amarone', 7, '', 25.0, '/images/drinks/drink.jpg'],

            ['Vino rossato (rosé)', 8, '', 18.0, '/images/drinks/drink.jpg'],
            ['Vino rosso', 8, '', 18.0, '/images/drinks/drink.jpg'],
            ['Vino bianco', 8, '', 18.0, '/images/drinks/drink.jpg'],
            ['Chianti', 8, '', 19.0, '/images/drinks/drink.jpg'],
            ['Proseco', 8, '', 15.0, '/images/drinks/drink.jpg'],

            ['Rode port', 9, '', 12.50, '/images/drinks/drink.jpg'],
            ['Witte port', 9, '', 13.50, '/images/drinks/drink.jpg'],
            ['Avema', 9, '', 15.0, '/images/drinks/drink.jpg'],
            ['Vecchia Romagna', 9, '', 138.0, '/images/drinks/drink.jpg'],

            ['Flesje Hertog Jan', 10, '', 2.0, '/images/drinks/drink.jpg'],
            ['Flesje Grolsch', 10, '', 2.00, '/images/drinks/drink.jpg'],
            ['Flesje Wickse Witte', 10, '', 2.75, '/images/drinks/drink.jpg'],
            ['Flesje Moretti', 10, '', 3.25, '/images/drinks/drink.jpg'],
            ['Flesje Peroni', 10, '', 3.5, '/images/drinks/drink.jpg'],

            ['Blikje Coca-cola', 11, '', 1.50, '/images/drinks/drink.jpg'],
            ['Fles Coca-cola', 11, '', 2.5, '/images/drinks/drink.jpg'],
            ['Blikje Sprite', 11, '', 1.5, '/images/drinks/drink.jpg'],
            ['Fles Sprite', 11, '', 2.5, '/images/drinks/drink.jpg'],
            ['Blikje Casis', 11, '', 1.5, '/images/drinks/drink.jpg'],
            ['Fles Casis', 11, '', 2.5, '/images/drinks/drink.jpg'],


            ['Pizza Bianca', 12, 'Krokante pizza bianca met knoflook, basilicum en olijfolie', 4.5, '/images/antipasti/antipasti.jpeg'],
            ['Bruschetta', 12, 'In de oven geroosterde broodjes (drie stuks) bedekt met blokjes tomaat, ui, basilicum en olijfolie', 5.0, '/images/antipasti/antipasti.jpeg'],
            ['Brood met kruidenboter', 12, '', 3.5, '/images/antipasti/antipasti.jpeg'],
            ['Brood met pesto', 12, '', 3.5, '/images/antipasti/antipasti.jpeg'],

            ['Zuppa di Pomodoro', 13, '', 3.0, '/images/antipasti/antipasti.jpeg'],
            ['Minestrone', 13, '', 3.0, '/images/antipasti/antipasti.jpeg'],

            ['Carpaccio', 14, 'Klassiek bereide carpaccio van rundvlees met rucola en parmezaanse kaas', 7.95, '/images/antipasti/antipasti.jpeg'],
            ['Antipasto di Terra', 14, 'Proeverij voor 2 personen van diverse soorten Italiaanse vleeswaren, mozzarella en olijven op een bedje van rucola, brood met kruidenboter.', 14.0, '/images/antipasti/antipasti.jpeg'],

            ['Gamberetti all\' aglio', 15, 'Gebakken gamba\'s in kruidige knoflookolie', 8.5, '/images/antipasti/antipasti.jpeg'],
            ['Cozze Pescatore', 15, 'Gebakken mosselen in witte wijnsaus', 7.35, '/images/antipasti/antipasti.jpeg'],

            ['Caprese', 16, 'Tomaten met mozarella en basilicum', 7.95, '/images/antipasti/antipasti.jpeg'],
            ['Insalata Mista', 16, 'Gemengde salade', 5.55, '/images/antipasti/antipasti.jpeg'],
            ['Insalata Mista con Tonno', 16, 'Gemengde salade met tonijn', 8.45, '/images/antipasti/antipasti.jpeg'],

            ['Gefrituurde aardappelschijfjes', 17, '', 3.5, '/images/antipasti/antipasti.jpeg'],
            ['Verdure miste al forno', 17, 'Gebakken seizoensgroenten', 6.45, '/images/antipasti/antipasti.jpeg'],
        ];

        foreach ($products AS $p) {
            Product::UpdateOrCreate(
                ['name' => $p[0]],
                [
                    'name' => $p[0],
                    'category_id' => $p[1],
                    'description' => $p[2],
                    'price' => $p[3],
                    'image_url' => isset($p[4]) ? asset($p[4]) : asset('/images/placeholder.png')
                ]
            );
        }
    }
}
