<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        $data = ['Транспорт',
//            'Недвижимость',
//            'Работа',
//            'Услуги',
//            'Личные вещи',
//            'Для дома и дачи',
//            'Запчасти и аксессуары',
//            'Электроника',
//            'Хобби и отдых',
//            'Животные',
//            'Бизнес и оборудование'
//        ];
        $categories = [
            [
                'title' => 'Транспорт',
                'parent_id' => null,
                'slug' => Str::slug('Транспорт')
            ],
            [
                'title' => 'Недвижимость',
                'parent_id' => null,
                'slug' => Str::slug('Недвижимость')
            ],
            [
                'title' => 'Работа',
                'parent_id' => null,
                'slug' => Str::slug('Работа')
            ],
            [
                'title' => 'Услуги',
                'parent_id' => null,
                'slug' => Str::slug('Услуги')
            ],
            [
                'title' => 'Личные вещи',
                'parent_id' => null,
                'slug' => Str::slug('Личные вещи')
            ],
            [
                'title' => 'Для дома и дачи',
                'parent_id' => null,
                'slug' => Str::slug('Для дома и дачи')
            ],
            [
                'title' => 'Запчасти и аксессуары',
                'parent_id' => null,
                'slug' => Str::slug('Запчасти и аксессуары')
            ],
            [
                'title' => 'Электроника',
                'parent_id' => null,
                'slug' => Str::slug('Электроника')
            ],
            [
                'title' => 'Хобби и отдых',
                'parent_id' => null,
                'slug' => Str::slug('Хобби и отдых')
            ],
            [
                'title' => 'Животные',
                'parent_id' => null,
                'slug' => Str::slug('Животные')
            ],
            [
                'title' => 'Бизнес и оборудование',
                'parent_id' => null,
                'slug' => Str::slug('Бизнес и оборудование')
            ],
            [
                'title' => 'Автомобили',
                'parent_id' => 1,
                'slug' => Str::slug('Автомобили')
            ],
            [
                'title' => 'Грузовики и спецтехника',
                'parent_id' => 1,
                'slug' => Str::slug('Грузовики и спецтехника')
            ],
            [
                'title' => 'Водный транспорт',
                'parent_id' => 1,
                'slug' => Str::slug('Водный транспорт')
            ],
            [
                'title' => 'Запчасти и аксессуары',
                'parent_id' => 1,
                'slug' => Str::slug('Запчасти и аксессуары')
            ],
            [
                'title' => 'Мотоциклы и мототехника',
                'parent_id' => 1,
                'slug' => Str::slug('Мотоциклы и мототехника')
            ],
            [
                'title' => 'Автобусы',
                'parent_id' => 13,
                'slug' => Str::slug('Автобусы')
            ],
            [
                'title' => 'Автодома',
                'parent_id' => 13,
                'slug' => Str::slug('Автодома')
            ],
            [
                'title' => 'Автокраны',
                'parent_id' => 13,
                'slug' => Str::slug('Автокраны')
            ],
            [
                'title' => 'Бульдозеры',
                'parent_id' => 13,
                'slug' => Str::slug('Бульдозеры')
            ],
            [
                'title' => 'Грузовики',
                'parent_id' => 13,
                'slug' => Str::slug('Грузовики')
            ],
            [
                'title' => 'Коммунальная техника',
                'parent_id' => 13,
                'slug' => Str::slug('Коммунальная техника')
            ],
            [
                'title' => 'Лёгкий коммерческий транспорт',
                'parent_id' => 13,
                'slug' => Str::slug('Лёгкий коммерческий транспорт')
            ],
            [
                'title' => 'Навесное оборудование',
                'parent_id' => 13,
                'slug' => Str::slug('Навесное оборудование')
            ],
            [
                'title' => 'Погрузчики',
                'parent_id' => 13,
                'slug' => Str::slug('Погрузчики')
            ],
            [
                'title' => 'Прицепы',
                'parent_id' => 13,
                'slug' => Str::slug('Прицепы')
            ],
            [
                'title' => 'Сельхозтехника',
                'parent_id' => 13,
                'slug' => Str::slug('Сельхозтехника')
            ],
            [
                'title' => 'Строительная техника',
                'parent_id' => 13,
                'slug' => Str::slug('Строительная техника')
            ],
            [
                'title' => 'Техника для лесозаготовки',
                'parent_id' => 13,
                'slug' => Str::slug('Техника для лесозаготовки')
            ],
            [
                'title' => 'Тягачи',
                'parent_id' => 13,
                'slug' => Str::slug('Тягачи')
            ],
            [
                'title' => 'Экскаваторы',
                'parent_id' => 13,
                'slug' => Str::slug('Экскаваторы')
            ],
            [
                'title' => 'Другое',
                'parent_id' => 13,
                'slug' => Str::slug('Другое')
            ],
            [
                'title' => 'Вёсельные лодки',
                'parent_id' => 14,
                'slug' => Str::slug('Вёсельные лодки')
            ],
            [
                'title' => 'Гидроциклы',
                'parent_id' => 14,
                'slug' => Str::slug('Гидроциклы')
            ],
            [
                'title' => 'Катера и яхты',
                'parent_id' => 14,
                'slug' => Str::slug('Катера и яхты')
            ],
            [
                'title' => 'Моторные лодки и моторы',
                'parent_id' => 14,
                'slug' => Str::slug('Моторные лодки и моторы')
            ],
            [
                'title' => 'Запчасти',
                'parent_id' => 15,
                'slug' => Str::slug('Запчасти')
            ],
            [
                'title' => 'Шины, диски и колёса',
                'parent_id' => 15,
                'slug' => Str::slug('Шины, диски и колёса')
            ],
            [
                'title' => 'Аудио- и видеотехника',
                'parent_id' => 15,
                'slug' => Str::slug('Аудио- и видеотехника')
            ],
            [
                'title' => 'Аксессуары',
                'parent_id' => 15,
                'slug' => Str::slug('Аксессуары')
            ],
            [
                'title' => 'Тюнинг',
                'parent_id' => 15,
                'slug' => Str::slug('Тюнинг')
            ],
            [
                'title' => 'Багажники и фаркопы',
                'parent_id' => 15,
                'slug' => Str::slug('Багажники и фаркопы')
            ],
            [
                'title' => 'Инструменты',
                'parent_id' => 15,
                'slug' => Str::slug('Инструменты')
            ],
            [
                'title' => 'Прицепы',
                'parent_id' => 15,
                'slug' => Str::slug('Прицепы')
            ],
            [
                'title' => 'Экипировка',
                'parent_id' => 15,
                'slug' => Str::slug('Экипировка')
            ],
            [
                'title' => 'Масла и автохимия',
                'parent_id' => 15,
                'slug' => Str::slug('Масла и автохимия')
            ],
            [
                'title' => 'Противоугонные устройства',
                'parent_id' => 15,
                'slug' => Str::slug('Противоугонные устройства')
            ],
            [
                'title' => 'GPS-навигаторы',
                'parent_id' => 15,
                'slug' => Str::slug('GPS-навигаторы')
            ],
            [
                'title' => 'Вездеходы',
                'parent_id' => 16,
                'slug' => Str::slug('Вездеходы')
            ],
            [
                'title' => 'Картинг',
                'parent_id' => 16,
                'slug' => Str::slug('Картинг')
            ],
            [
                'title' => 'Квадроциклы и багги',
                'parent_id' => 16,
                'slug' => Str::slug('Квадроциклы и багги')
            ],
            [
                'title' => 'Мопеды и скутеры',
                'parent_id' => 16,
                'slug' => Str::slug('Мопеды и скутеры')
            ],
            [
                'title' => 'Мотоциклы',
                'parent_id' => 16,
                'slug' => Str::slug('Мотоциклы')
            ],
            [
                'title' => 'Снегоходы',
                'parent_id' => 16,
                'slug' => Str::slug('Снегоходы')
            ],
            [
                'title' => 'Купить жилье',
                'parent_id' => 2,
                'slug' => Str::slug('Куить жилье')
            ],
            [
                'title' => 'Снять посуточно',
                'parent_id' => 2,
                'slug' => Str::slug('Снять посуточно')
            ],
            [
                'title' => 'Снять долгосрочно',
                'parent_id' => 2,
                'slug' => Str::slug('Снять долгосрочно')
            ],
            [
                'title' => 'Другие категории',
                'parent_id' => 2,
                'slug' => Str::slug('Другие категории')
            ],
            [
                'title' => 'Коммерческая недвижимость',
                'parent_id' => 2,
                'slug' => Str::slug('Коммерческая недвижимость')
            ],
            [
                'title' => 'Все квартиры',
                'parent_id' => 55,
                'slug' => Str::slug('Все квартиры')
            ],
            [
                'title' => 'Вторичка',
                'parent_id' => 55,
                'slug' => Str::slug('Вторичка')
            ],
            [
                'title' => 'Новостройки',
                'parent_id' => 55,
                'slug' => Str::slug('Новостройки')
            ],
            [
                'title' => 'Дома, дачи, коттеджи',
                'parent_id' => 55,
                'slug' => Str::slug('Дома, дачи, коттеджи')
            ],
            [
                'title' => 'Комнаты',
                'parent_id' => 55,
                'slug' => Str::slug('Комнаты')
            ],
            [
                'title' => 'Квартиры',
                'parent_id' => 56,
                'slug' => Str::slug('Квартиры')
            ],
            [
                'title' => 'Дома, дачи и коттеджи',
                'parent_id' => 56,
                'slug' => Str::slug('Дома, дачи и коттеджи')
            ],
            [
                'title' => 'Комнаты и койко-места',
                'parent_id' => 56,
                'slug' => Str::slug('Комнаты и койко-места')
            ],
            [
                'title' => 'Квартиры',
                'parent_id' => 57,
                'slug' => Str::slug('Квартиры')
            ],
            [
                'title' => 'Дома, дачи и коттеджи',
                'parent_id' => 57,
                'slug' => Str::slug('Дома, дачи и коттеджи')
            ],
            [
                'title' => 'Комнаты и койко-места',
                'parent_id' => 57,
                'slug' => Str::slug('Комнаты и койко-места')
            ],
            [
                'title' => 'Земельные участки',
                'parent_id' => 58,
                'slug' => Str::slug('Земельные участки')
            ],
            [
                'title' => 'Гаражи и машиноместа',
                'parent_id' => 58,
                'slug' => Str::slug('Гаражи и машиноместа')
            ],
            [
                'title' => 'Зарубежная недвижимость',
                'parent_id' => 58,
                'slug' => Str::slug('Зарубежная недвижимость')
            ],
            [
                'title' => 'Купить',
                'parent_id' => 59,
                'slug' => Str::slug('Гаражи и машиноместа')
            ],
            [
                'title' => 'Снять',
                'parent_id' => 59,
                'slug' => Str::slug('Зарубежная недвижимость')
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
