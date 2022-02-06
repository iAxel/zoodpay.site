<?php

namespace Database\Seeders;

use App\Models\Category;

use App\Models\Subcategory;

use Illuminate\Database\Seeder;

final class CategorySeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $categories = [
            [
                'slug' => 'fashion',
                'title_ru' => 'Мода',
                'title_uz' => 'Moda',

                'subcategories' => [
                    [
                        'slug' => 'womans_clothes',
                        'title_ru' => 'Женская одежда',
                        'title_uz' => 'Ayollar kiyimi',
                    ],
                    [
                        'slug' => 'mens_clothes',
                        'title_ru' => 'Мужская одежда',
                        'title_uz' => 'Erkaklar kiyimi',
                    ],
                    [
                        'slug' => 'underwear',
                        'title_ru' => 'Нижнее белье',
                        'title_uz' => 'Ichki kiyimlar',
                    ],
                    [
                        'slug' => 'shoes',
                        'title_ru' => 'Обувь',
                        'title_uz' => 'Oyoq kiyimlar',
                    ],
                    [
                        'slug' => 'hats',
                        'title_ru' => 'Головные уборы',
                        'title_uz' => 'Bosh kiyimlar',
                    ],
                    [
                        'slug' => 'socks',
                        'title_ru' => 'Носочно-чулочные изделия',
                        'title_uz' => 'Paypoq mahsulotlari',
                    ],
                ],
            ],
            [
                'slug' => 'accessories',
                'title_ru' => 'Аксессуары',
                'title_uz' => 'Aksessuarlar',

                'subcategories' => [
                    [
                        'slug' => 'bags',
                        'title_ru' => 'Кожгалантерея',
                        'title_uz' => 'Charm mahsulotlari',
                    ],
                    [
                        'slug' => 'glasses',
                        'title_ru' => 'Очки',
                        'title_uz' => 'Koʻzoynaklar',
                    ],
                    [
                        'slug' => 'mobile_accessories',
                        'title_ru' => 'Мобильные аксессуары',
                        'title_uz' => 'Mobil aksessuarlar',
                    ],
                ],
            ],
            [
                'slug' => 'kids_goods',
                'title_ru' => 'Детские товары',
                'title_uz' => 'Bolalar uchun mahsulotlar',

                'subcategories' => [
                    [
                        'slug' => 'clothes',
                        'title_ru' => 'Одежда',
                        'title_uz' => 'Kiyim',
                    ],
                    [
                        'slug' => 'shoes',
                        'title_ru' => 'Обувь',
                        'title_uz' => 'Oyoq kiyimlar',
                    ],
                    [
                        'slug' => 'toys',
                        'title_ru' => 'Игрушки',
                        'title_uz' => 'Oʻyinchoqlar',
                    ],
                    [
                        'slug' => 'strollers',
                        'title_ru' => 'Коляски',
                        'title_uz' => 'Aravachalar',
                    ],
                    [
                        'slug' => 'kids_nutrition',
                        'title_ru' => 'Детское питание',
                        'title_uz' => 'Bolalar oziq-ovqati',
                    ],
                ],
            ],
            [
                'slug' => 'sports_outdoors',
                'title_ru' => 'Спорт и активный отдых',
                'title_uz' => 'Sport va faol dam olish',

                'subcategories' => [
                    [
                        'slug' => 'clothes',
                        'title_ru' => 'Одежда',
                        'title_uz' => 'Kiyim',
                    ],
                    [
                        'slug' => 'shoes',
                        'title_ru' => 'Обувь',
                        'title_uz' => 'Oyoq kiyimlar',
                    ],
                    [
                        'slug' => 'equipment',
                        'title_ru' => 'Спортивный инвентарь',
                        'title_uz' => 'Sport jihozlari',
                    ],
                    [
                        'slug' => 'sport_nutrition',
                        'title_ru' => 'Спортивное питание',
                        'title_uz' => 'Sport oziq-ovqati',
                    ],
                ],
            ],
            [
                'slug' => 'home_garden',
                'title_ru' => 'Товары для дома',
                'title_uz' => 'Uy-roʻzgʻor buyumlari',

                'subcategories' => [
                    [
                        'slug' => 'home_textile',
                        'title_ru' => 'Домашний текстиль',
                        'title_uz' => 'Uy toʻqimachilik',
                    ],
                    [
                        'slug' => 'dishes',
                        'title_ru' => 'Посуда',
                        'title_uz' => 'Idishlar',
                    ],
                    [
                        'slug' => 'furniture',
                        'title_ru' => 'Мебель',
                        'title_uz' => 'Mebel',
                    ],
                    [
                        'slug' => 'construction',
                        'title_ru' => 'Строительные материалы',
                        'title_uz' => 'Qurilish mollari',
                    ],
                    [
                        'slug' => 'decor_interior',
                        'title_ru' => 'Декор и интерьер',
                        'title_uz' => 'Dekor va interyer',
                    ],
                    [
                        'slug' => 'lightning',
                        'title_ru' => 'Освещение',
                        'title_uz' => 'Yorugʻlik',
                    ],
                ],
            ],
            [
                'slug' => 'beauty_health',
                'title_ru' => 'Красота и здоровье',
                'title_uz' => 'Goʻzallik va salomatlik',

                'subcategories' => [
                    [
                        'slug' => 'cosmetics',
                        'title_ru' => 'Косметика',
                        'title_uz' => 'Kosmetika',
                    ],
                    [
                        'slug' => 'perfume',
                        'title_ru' => 'Парфюм',
                        'title_uz' => 'Parfyum',
                    ],
                    [
                        'slug' => 'beauty_salon',
                        'title_ru' => 'Салон красоты',
                        'title_uz' => 'Goʻzallik saloni',
                    ],
                    [
                        'slug' => 'gym',
                        'title_ru' => 'Тренажерный залы',
                        'title_uz' => 'Sport zallari',
                    ],
                    [
                        'slug' => 'household_chemistry',
                        'title_ru' => 'Бытовая химия',
                        'title_uz' => 'Maishiy kimyo',
                    ],
                    [
                        'slug' => 'dentistry',
                        'title_ru' => 'Стоматологии',
                        'title_uz' => 'Stomatologiyalar',
                    ],
                    [
                        'slug' => 'pharmacies',
                        'title_ru' => 'Аптеки',
                        'title_uz' => 'Dorixonalar',
                    ],
                    [
                        'slug' => 'screening_centres',
                        'title_ru' => 'Лаборатории',
                        'title_uz' => 'Laboratoriyalar',
                    ],
                    [
                        'slug' => 'medical_centres',
                        'title_ru' => 'Медицинские центры',
                        'title_uz' => 'Tibbiyot markazlari',
                    ],
                ],
            ],
            [
                'slug' => 'auto',
                'title_ru' => 'Авто',
                'title_uz' => 'Avto',

                'subcategories' => [
                    [
                        'slug' => 'tires',
                        'title_ru' => 'Шины',
                        'title_uz' => 'Shinalar',
                    ],
                    [
                        'slug' => 'auto_electronics',
                        'title_ru' => 'Автоэлектроника',
                        'title_uz' => 'Avtoelektronika',
                    ],
                    [
                        'slug' => 'auto_parts',
                        'title_ru' => 'Автозапчасти',
                        'title_uz' => 'Avto ehtiyot qismlar',
                    ],
                    [
                        'slug' => 'accessories',
                        'title_ru' => 'Аксессуары',
                        'title_uz' => 'Aksessuarlar',
                    ],
                    [
                        'slug' => 'auto_services',
                        'title_ru' => 'Автосервисы',
                        'title_uz' => 'Avto xizmatlar',
                    ],
                    [
                        'slug' => 'accumulators',
                        'title_ru' => 'Аккумуляторы',
                        'title_uz' => 'Akumulatorlar',
                    ],
                    [
                        'slug' => 'motor_oil',
                        'title_ru' => 'Пункты замены масла',
                        'title_uz' => 'Yogʻ almashtirish nuqtalari',
                    ],
                ],
            ],
            [
                'slug' => 'jewelry_watches',
                'title_ru' => 'Ювелирные изделия и Часы',
                'title_uz' => 'Zargarlik buyumlari va soatlar',

                'subcategories' => [
                    [
                        'slug' => 'silver',
                        'title_ru' => 'Серебро',
                        'title_uz' => 'Kumush',
                    ],
                    [
                        'slug' => 'bijouterie',
                        'title_ru' => 'Бижутерия',
                        'title_uz' => 'Bijuteriya',
                    ],
                    [
                        'slug' => 'watches',
                        'title_ru' => 'Часы',
                        'title_uz' => 'Soatlar',
                    ],
                    [
                        'slug' => 'gold',
                        'title_ru' => 'Золото',
                        'title_uz' => 'Oltin',
                    ],
                ],
            ],
            [
                'slug' => 'other',
                'title_ru' => 'Другое',
                'title_uz' => 'Boshqa',

                'subcategories' => [
                    [
                        'slug' => 'books',
                        'title_ru' => 'Книги',
                        'title_uz' => 'Kitoblar',
                    ],
                    [
                        'slug' => 'stationery',
                        'title_ru' => 'Канцелярские товары',
                        'title_uz' => 'Kantselyariya mahsulotlari',
                    ],
                    [
                        'slug' => 'table_games',
                        'title_ru' => 'Настольные игры',
                        'title_uz' => 'Stol oʻyinlari',
                    ],
                    [
                        'slug' => 'smoke_devises',
                        'title_ru' => 'Курительные устройства',
                        'title_uz' => 'Chekish uchun qurilmalar',
                    ],
                    [
                        'slug' => 'flowers',
                        'title_ru' => 'Цветы',
                        'title_uz' => 'Gullar',
                    ],
                    [
                        'slug' => 'gifts',
                        'title_ru' => 'Подарки',
                        'title_uz' => 'Sovgʻalar',
                    ],
                ],
            ],
            [
                'slug' => 'food',
                'title_ru' => 'Товары повседневного спроса',
                'title_uz' => 'Isteʻmol mahsulotlari',

                'subcategories' => [
                    [
                        'slug' => 'supermarkets',
                        'title_ru' => 'Супермаркеты',
                        'title_uz' => 'Supermarketlar',
                    ],
                    [
                        'slug' => 'grocery_stores',
                        'title_ru' => 'Продуктовые магазины',
                        'title_uz' => 'Oziq-ovqat doʻkonlari',
                    ],
                    [
                        'slug' => 'alcohol_stores',
                        'title_ru' => 'Алкогольные магазины',
                        'title_uz' => 'Spirtli ichimliklar doʻkonlari',
                    ],
                    [
                        'slug' => 'bakery',
                        'title_ru' => 'Пекарни',
                        'title_uz' => 'Nonvoyxonalar',
                    ],
                ],
            ],
            [
                'slug' => 'cafe_restaurants',
                'title_ru' => 'Кафе и рестораны',
                'title_uz' => 'Kafe va restoranlar',

                'subcategories' => [
                    [
                        'slug' => 'hotels',
                        'title_ru' => 'Гостиницы',
                        'title_uz' => 'Mehmonxonalar',
                    ],
                    [
                        'slug' => 'restaurants',
                        'title_ru' => 'Рестораны',
                        'title_uz' => 'Restoranlar',
                    ],
                    [
                        'slug' => 'cafe',
                        'title_ru' => 'Кафе',
                        'title_uz' => 'Kafe',
                    ],
                    [
                        'slug' => 'night_clubs',
                        'title_ru' => 'Ночные клубы',
                        'title_uz' => 'Tungi klublar',
                    ],
                    [
                        'slug' => 'bars_pubs',
                        'title_ru' => 'Бары и пабы',
                        'title_uz' => 'Barlar va pablar',
                    ],
                    [
                        'slug' => 'karaoke',
                        'title_ru' => 'Караоке',
                        'title_uz' => 'Karaoke',
                    ],
                    [
                        'slug' => 'canteens',
                        'title_ru' => 'Столовые',
                        'title_uz' => 'Oshxonalar',
                    ],
                    [
                        'slug' => 'fast_food',
                        'title_ru' => 'Фаст-фуд',
                        'title_uz' => 'Fastfud',
                    ],
                    [
                        'slug' => 'health_food',
                        'title_ru' => 'Здоровое питание',
                        'title_uz' => 'Sog‘lom oziq-ovqat',
                    ],
                ],
            ],
            [
                'slug' => 'Entertainment',
                'title_ru' => 'Развлечения',
                'title_uz' => 'O‘yin-kulgi',

                'subcategories' => [
                    [
                        'slug' => 'kids_play_zone',
                        'title_ru' => 'Детская игровая зона',
                        'title_uz' => 'Bolalar o‘yingohi',
                    ],
                    [
                        'slug' => 'bowling',
                        'title_ru' => 'Боулинг',
                        'title_uz' => 'Bouling',
                    ],
                    [
                        'slug' => 'ice_rink',
                        'title_ru' => 'Ледовый каток',
                        'title_uz' => 'Muz yaxmalak',
                    ],
                    [
                        'slug' => 'rest_zone',
                        'title_ru' => 'Зона отдыха',
                        'title_uz' => 'Dam olish maydoni',
                    ],
                    [
                        'slug' => 'cinema',
                        'title_ru' => 'Кинотеатры',
                        'title_uz' => 'Kinoteatrlar',
                    ],
                    [
                        'slug' => 'swimming_pools',
                        'title_ru' => 'Бассейны',
                        'title_uz' => 'Hovuzlar',
                    ],
                ],
            ],
            [
                'slug' => 'tourism',
                'title_ru' => 'Туризм',
                'title_uz' => 'Turizm',

                'subcategories' => [
                    [
                        'slug' => 'tour_agencies',
                        'title_ru' => 'Туристические агентства',
                        'title_uz' => 'Turizm agentliklari',
                    ],
                ],
            ],
            [
                'slug' => 'education',
                'title_ru' => 'Образование',
                'title_uz' => 'Ta‘lim',

                'subcategories' => [
                    [
                        'slug' => 'education_centres',
                        'title_ru' => 'Образовательные центры',
                        'title_uz' => 'Ta‘lim markazlari',
                    ],
                ],
            ],
            [
                'slug' => 'electronics',
                'title_ru' => 'Электроника',
                'title_uz' => 'Elektronika',

                'subcategories' => [
                    [
                        'slug' => 'smartphones',
                        'title_ru' => 'Смартфоны',
                        'title_uz' => 'Smartfonlar',
                    ],
                    [
                        'slug' => 'consumer_electronics',
                        'title_ru' => 'Гаджеты',
                        'title_uz' => 'Gadjetlar',
                    ],
                    [
                        'slug' => 'computers_laptops',
                        'title_ru' => 'Компьютеры и Ноутбуки',
                        'title_uz' => 'Kompyuterlar va Noutbuklar',
                    ],
                    [
                        'slug' => 'home_appliances',
                        'title_ru' => 'Бытовая техника',
                        'title_uz' => 'Maishiy texnika',
                    ],
                ],
            ],
        ];

        foreach ($categories as $category) {
            $parent = Category::create([
                'slug' => $category['slug'],
                'title_ru' => $category['title_ru'],
                'title_uz' => $category['title_uz'],
            ]);

            foreach ($category['subcategories'] as $subcategory) {
                Subcategory::create([
                    'slug' => $subcategory['slug'],
                    'title_ru' => $subcategory['title_ru'],
                    'title_uz' => $subcategory['title_uz'],
                    'parent_id' => $parent->id,
                ]);
            }
        }
    }
}
