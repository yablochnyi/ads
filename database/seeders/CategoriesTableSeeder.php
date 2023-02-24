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
            [
                'title' => 'Ищу работу',
                'parent_id' => 3,
                'slug' => Str::slug('Ищу работу')
            ],
            [
                'title' => 'Ищу сотрудника',
                'parent_id' => 3,
                'slug' => Str::slug('Ищу сотрудника')
            ],
            [
                'title' => 'IT, интернет, телеком',
                'parent_id' => 76,
                'slug' => Str::slug('IT, интернет, телеком')
            ],
            [
                'title' => 'Автомобильный бизнес',
                'parent_id' => 76,
                'slug' => Str::slug('Автомобильный бизнес')
            ],
            [
                'title' => 'Административная работа',
                'parent_id' => 76,
                'slug' => Str::slug('Административная работа')
            ],
            [
                'title' => 'Банки, инвестиции',
                'parent_id' => 76,
                'slug' => Str::slug('Банки, инвестиции')
            ],
            [
                'title' => 'Без опыта',
                'parent_id' => 76,
                'slug' => Str::slug('Без опыта')
            ],
            [
                'title' => 'Бухгалтерия, финансы',
                'parent_id' => 76,
                'slug' => Str::slug('Бухгалтерия, финансы')
            ],
            [
                'title' => 'Высший менеджмент',
                'parent_id' => 76,
                'slug' => Str::slug('Высший менеджмент')
            ],
            [
                'title' => 'Госслужба, НКО',
                'parent_id' => 76,
                'slug' => Str::slug('Госслужба, НКО')
            ],
            [
                'title' => 'Домашний персонал',
                'parent_id' => 76,
                'slug' => Str::slug('Домашний персонал')
            ],
            [
                'title' => 'ЖКХ, эксплуатация',
                'parent_id' => 76,
                'slug' => Str::slug('ЖКХ, эксплуатация')
            ],
            [
                'title' => 'Искусство, развлечения',
                'parent_id' => 76,
                'slug' => Str::slug('Искусство, развлечения')
            ],
            [
                'title' => 'Консультирование',
                'parent_id' => 76,
                'slug' => Str::slug('Консультирование')
            ],
            [
                'title' => 'Курьерская доставка',
                'parent_id' => 76,
                'slug' => Str::slug('Курьерская доставка')
            ],
            [
                'title' => 'Маркетинг, реклама, PR',
                'parent_id' => 76,
                'slug' => Str::slug('Маркетинг, реклама, PR')
            ],
            [
                'title' => 'Медицина, фармацевтика',
                'parent_id' => 76,
                'slug' => Str::slug('Медицина, фармацевтика')
            ],
            [
                'title' => 'Образование, наука',
                'parent_id' => 76,
                'slug' => Str::slug('Образование, наука')
            ],
            [
                'title' => 'Охрана, безопасность',
                'parent_id' => 76,
                'slug' => Str::slug('Охрана, безопасность')
            ],
            [
                'title' => 'Продажи',
                'parent_id' => 76,
                'slug' => Str::slug('Продажи')
            ],
            [
                'title' => 'Производство, сырьё, с/х',
                'parent_id' => 76,
                'slug' => Str::slug('Производство, сырьё, с/х')
            ],
            [
                'title' => 'Страхование',
                'parent_id' => 76,
                'slug' => Str::slug('Страхование')
            ],
            [
                'title' => 'Строительство',
                'parent_id' => 76,
                'slug' => Str::slug('Строительство')
            ],
            [
                'title' => 'Такси',
                'parent_id' => 76,
                'slug' => Str::slug('Такси')
            ],
            [
                'title' => 'Транспорт, логистика',
                'parent_id' => 76,
                'slug' => Str::slug('Транспорт, логистика')
            ],
            [
                'title' => 'Туризм, рестораны',
                'parent_id' => 76,
                'slug' => Str::slug('Туризм, рестораны')
            ],
            [
                'title' => 'Управление персоналом',
                'parent_id' => 76,
                'slug' => Str::slug('Управление персоналом')
            ],
            [
                'title' => 'Фитнес, салоны красоты',
                'parent_id' => 76,
                'slug' => Str::slug('Фитнес, салоны красоты')
            ],
            [
                'title' => 'Юриспруденция',
                'parent_id' => 76,
                'slug' => Str::slug('Юриспруденция')
            ],
            [
                'title' => 'IT, интернет, телеком',
                'parent_id' => 77,
                'slug' => Str::slug('IT, интернет, телеком')
            ],
            [
                'title' => 'Автомобильный бизнес',
                'parent_id' => 77,
                'slug' => Str::slug('Автомобильный бизнес')
            ],
            [
                'title' => 'Административная работа',
                'parent_id' => 77,
                'slug' => Str::slug('Административная работа')
            ],
            [
                'title' => 'Банки, инвестиции',
                'parent_id' => 77,
                'slug' => Str::slug('Банки, инвестиции')
            ],
            [
                'title' => 'Без опыта, студенты',
                'parent_id' => 77,
                'slug' => Str::slug('Без опыта, студенты')
            ],
            [
                'title' => 'Бухгалтерия, финансы',
                'parent_id' => 77,
                'slug' => Str::slug('Бухгалтерия, финансы')
            ],
            [
                'title' => 'Высший менеджмент',
                'parent_id' => 77,
                'slug' => Str::slug('Высший менеджмент')
            ],
            [
                'title' => 'Госслужба, НКО',
                'parent_id' => 77,
                'slug' => Str::slug('Госслужба, НКО')
            ],
            [
                'title' => 'Домашний персонал',
                'parent_id' => 77,
                'slug' => Str::slug('Домашний персонал')
            ],
            [
                'title' => 'ЖКХ, эксплуатация',
                'parent_id' => 77,
                'slug' => Str::slug('ЖКХ, эксплуатация')
            ],
            [
                'title' => 'Искусство, развлечения',
                'parent_id' => 77,
                'slug' => Str::slug('Искусство, развлечения')
            ],
            [
                'title' => 'Консультирование',
                'parent_id' => 77,
                'slug' => Str::slug('Консультирование')
            ],
            [
                'title' => 'Курьерская доставка',
                'parent_id' => 77,
                'slug' => Str::slug('Курьерская доставка')
            ],
            [
                'title' => 'Маркетинг, реклама, PR',
                'parent_id' => 77,
                'slug' => Str::slug('Маркетинг, реклама, PR')
            ],
            [
                'title' => 'Медицина, фармацевтика',
                'parent_id' => 77,
                'slug' => Str::slug('Медицина, фармацевтика')
            ],
            [
                'title' => 'Образование, наука',
                'parent_id' => 77,
                'slug' => Str::slug('Образование, наука')
            ],
            [
                'title' => 'Охрана, безопасность',
                'parent_id' => 77,
                'slug' => Str::slug('Охрана, безопасность')
            ],
            [
                'title' => 'Продажи',
                'parent_id' => 77,
                'slug' => Str::slug('Продажи')
            ],
            [
                'title' => 'Производство, сырьё, с/х',
                'parent_id' => 77,
                'slug' => Str::slug('Производство, сырьё, с/х')
            ],
            [
                'title' => 'Страхование',
                'parent_id' => 77,
                'slug' => Str::slug('Страхование')
            ],
            [
                'title' => 'Строительство',
                'parent_id' => 77,
                'slug' => Str::slug('Строительство')
            ],
            [
                'title' => 'Такси',
                'parent_id' => 77,
                'slug' => Str::slug('Такси')
            ],
            [
                'title' => 'Транспорт, логистика',
                'parent_id' => 77,
                'slug' => Str::slug('Транспорт, логистика')
            ],
            [
                'title' => 'Туризм, рестораны',
                'parent_id' => 77,
                'slug' => Str::slug('Туризм, рестораны')
            ],
            [
                'title' => 'Юриспруденция',
                'parent_id' => 77,
                'slug' => Str::slug('Юриспруденция')
            ],
            [
                'title' => 'Управление персоналом',
                'parent_id' => 77,
                'slug' => Str::slug('Управление персоналом')
            ],
            [
                'title' => 'Фитнес, салоны красоты',
                'parent_id' => 77,
                'slug' => Str::slug('Фитнес, салоны красоты')
            ],
            [
                'title' => 'Транспорт, перевозки',
                'parent_id' => 4,
                'slug' => Str::slug('Транспорт, перевозки')
            ],
            [
                'title' => 'Красота, здоровье',
                'parent_id' => 4,
                'slug' => Str::slug('Красота, здоровье')
            ],
            [
                'title' => 'Деловые услуги',
                'parent_id' => 4,
                'slug' => Str::slug('Деловые услуги')
            ],
            [
                'title' => 'Бытовые услуги',
                'parent_id' => 4,
                'slug' => Str::slug('Бытовые услуги')
            ],
            [
                'title' => 'Ремонт и отделка',
                'parent_id' => 4,
                'slug' => Str::slug('Ремонт и отделка')
            ],
            [
                'title' => 'Ремонт и обслуживание техники',
                'parent_id' => 4,
                'slug' => Str::slug('Ремонт и обслуживание техники')
            ],
            [
                'title' => 'IT, интернет, телеком',
                'parent_id' => 4,
                'slug' => Str::slug('IT, интернет, телеком')
            ],
            [
                'title' => 'Строительство',
                'parent_id' => 4,
                'slug' => Str::slug('Строительство')
            ],
            [
                'title' => 'Установка техники',
                'parent_id' => 4,
                'slug' => Str::slug('Установка техники')
            ],
            [
                'title' => 'Реклама, полиграфия',
                'parent_id' => 4,
                'slug' => Str::slug('Реклама, полиграфия')
            ],
            [
                'title' => 'Уборка',
                'parent_id' => 4,
                'slug' => Str::slug('Уборка')
            ],
            [
                'title' => 'Мастер на час',
                'parent_id' => 4,
                'slug' => Str::slug('Мастер на час')
            ],
            [
                'title' => 'Оборудование, производство',
                'parent_id' => 4,
                'slug' => Str::slug('Оборудование, производство')
            ],
            [
                'title' => 'Сад, благоустройство',
                'parent_id' => 4,
                'slug' => Str::slug('Сад, благоустройство')
            ],
            [
                'title' => 'Обучение, курсы',
                'parent_id' => 4,
                'slug' => Str::slug('Обучение, курсы')
            ],
            [
                'title' => 'Праздники, мероприятия',
                'parent_id' => 4,
                'slug' => Str::slug('Праздники, мероприятия')
            ],
            [
                'title' => 'Доставка еды и продуктов',
                'parent_id' => 4,
                'slug' => Str::slug('Доставка еды и продуктов')
            ],
            [
                'title' => 'Фото- и видеосъёмка',
                'parent_id' => 4,
                'slug' => Str::slug('Фото- и видеосъёмка')
            ],
            [
                'title' => 'Няни, сиделки',
                'parent_id' => 4,
                'slug' => Str::slug('Няни, сиделки')
            ],
            [
                'title' => 'Уход за животными',
                'parent_id' => 4,
                'slug' => Str::slug('Уход за животными')
            ],
            [
                'title' => 'Искусство',
                'parent_id' => 4,
                'slug' => Str::slug('Искусство')
            ],
            [
                'title' => 'Охрана, безопасность',
                'parent_id' => 4,
                'slug' => Str::slug('Охрана, безопасность')
            ],
            [
                'title' => 'Доставка, курьеры',
                'parent_id' => 4,
                'slug' => Str::slug('Доставка, курьеры')
            ],
            [
                'title' => 'Другое',
                'parent_id' => 4,
                'slug' => Str::slug('Другое')
            ],
            [
                'title' => 'Автосервис',
                'parent_id' => 132,
                'slug' => Str::slug('Автосервис')
            ],
            [
                'title' => 'Аренда авто',
                'parent_id' => 132,
                'slug' => Str::slug('Аренда авто')
            ],
            [
                'title' => 'Коммерческие перевозки',
                'parent_id' => 132,
                'slug' => Str::slug('Коммерческие перевозки')
            ],
            [
                'title' => 'Грузчики',
                'parent_id' => 132,
                'slug' => Str::slug('Грузчики')
            ],
            [
                'title' => 'Переезды',
                'parent_id' => 132,
                'slug' => Str::slug('Переезды')
            ],
            [
                'title' => 'Спецтехника',
                'parent_id' => 132,
                'slug' => Str::slug('Спецтехника')
            ],
            [
                'title' => 'Ремонт квартир и домов под ключ',
                'parent_id' => 136,
                'slug' => Str::slug('Ремонт квартир и домов под ключ')
            ],
            [
                'title' => 'Сантехника',
                'parent_id' => 136,
                'slug' => Str::slug('Сантехника')
            ],
            [
                'title' => 'Электрика',
                'parent_id' => 136,
                'slug' => Str::slug('Электрика')
            ],
            [
                'title' => 'Сборка и ремонт мебели',
                'parent_id' => 136,
                'slug' => Str::slug('Сборка и ремонт мебели')
            ],
            [
                'title' => 'Остекление балконов',
                'parent_id' => 136,
                'slug' => Str::slug('Остекление балконов')
            ],
            [
                'title' => 'Поклейка обоев и малярные работы',
                'parent_id' => 136,
                'slug' => Str::slug('Поклейка обоев и малярные работы')
            ],
            [
                'title' => 'Потолки',
                'parent_id' => 136,
                'slug' => Str::slug('Потолки')
            ],
            [
                'title' => 'Полы и напольные покрытия',
                'parent_id' => 136,
                'slug' => Str::slug('Полы и напольные покрытия')
            ],
            [
                'title' => 'Штукатурные работы',
                'parent_id' => 136,
                'slug' => Str::slug('Штукатурные работы')
            ],
            [
                'title' => 'Двери',
                'parent_id' => 136,
                'slug' => Str::slug('Двери')
            ],
            [
                'title' => 'Плиточные работы',
                'parent_id' => 136,
                'slug' => Str::slug('Плиточные работы')
            ],
            [
                'title' => 'Столярные и плотницкие работы',
                'parent_id' => 136,
                'slug' => Str::slug('Столярные и плотницкие работы')
            ],
            [
                'title' => 'Гипсокартонные работы',
                'parent_id' => 136,
                'slug' => Str::slug('Гипсокартонные работы')
            ],
            [
                'title' => 'Высотные работы',
                'parent_id' => 136,
                'slug' => Str::slug('Высотные работы')
            ],
            [
                'title' => 'Металлоконструкции и кованые изделия',
                'parent_id' => 136,
                'slug' => Str::slug('Металлоконструкции и кованые изделия')
            ],
            [
                'title' => 'Изоляция',
                'parent_id' => 136,
                'slug' => Str::slug('Изоляция')
            ],
            [
                'title' => 'Ремонт офиса',
                'parent_id' => 136,
                'slug' => Str::slug('Ремонт офиса')
            ],
            [
                'title' => 'Вентиляция',
                'parent_id' => 136,
                'slug' => Str::slug('Вентиляция')
            ],
            [
                'title' => 'Другое',
                'parent_id' => 136,
                'slug' => Str::slug('Другое')
            ],
            [
                'title' => 'Строительство бань, саун',
                'parent_id' => 139,
                'slug' => Str::slug('Строительство бань, саун')
            ],
            [
                'title' => 'Строительство домов, коттеджей',
                'parent_id' => 139,
                'slug' => Str::slug('Строительство домов, коттеджей')
            ],
            [
                'title' => 'Отделка деревянных домов, бань, саун',
                'parent_id' => 139,
                'slug' => Str::slug('Отделка деревянных домов, бань, саун')
            ],
            [
                'title' => 'Cкважины, колодцы',
                'parent_id' => 145,
                'slug' => Str::slug('Cкважины, колодцы')
            ],
            [
                'title' => 'Водоёмы и фонтаны',
                'parent_id' => 145,
                'slug' => Str::slug('Водоёмы и фонтаны')
            ],
            [
                'title' => 'Дорожное строительство',
                'parent_id' => 145,
                'slug' => Str::slug('Дорожное строительство')
            ],
            [
                'title' => 'Заборы, ограждения, навесы',
                'parent_id' => 145,
                'slug' => Str::slug('Заборы, ограждения, навесы')
            ],
            [
                'title' => 'Земляные работы',
                'parent_id' => 145,
                'slug' => Str::slug('Земляные работы')
            ],
            [
                'title' => 'Озеленение, уход за садом и огородом',
                'parent_id' => 145,
                'slug' => Str::slug('Озеленение, уход за садом и огородом')
            ],
            [
                'title' => 'Рольставни и ворота',
                'parent_id' => 145,
                'slug' => Str::slug('Рольставни и ворота')
            ],
            [
                'title' => 'Другое',
                'parent_id' => 145,
                'slug' => Str::slug('Другое')
            ],
            [
                'title' => 'Услуги парикмахера',
                'parent_id' => 133,
                'slug' => Str::slug('Услуги парикмахера')
            ],
            [
                'title' => 'Маникюр, педикюр',
                'parent_id' => 133,
                'slug' => Str::slug('Маникюр, педикюр')
            ],
            [
                'title' => 'Макияж',
                'parent_id' => 133,
                'slug' => Str::slug('Макияж')
            ],
            [
                'title' => 'Косметология, эпиляция',
                'parent_id' => 133,
                'slug' => Str::slug('Косметология, эпиляция')
            ],
            [
                'title' => 'СПА-услуги, здоровье',
                'parent_id' => 133,
                'slug' => Str::slug('СПА-услуги, здоровье')
            ],
            [
                'title' => 'Тату, пирсинг',
                'parent_id' => 133,
                'slug' => Str::slug('Тату, пирсинг')
            ],
            [
                'title' => 'Другое',
                'parent_id' => 133,
                'slug' => Str::slug('Другое')
            ],
            [
                'title' => 'Телевизоры',
                'parent_id' => 137,
                'slug' => Str::slug('Телевизоры')
            ],
            [
                'title' => 'Мобильные устройства',
                'parent_id' => 137,
                'slug' => Str::slug('Мобильные устройства')
            ],
            [
                'title' => 'Мелкая бытовая техника',
                'parent_id' => 137,
                'slug' => Str::slug('Мелкая бытовая техника')
            ],
            [
                'title' => 'Фото-, аудио-, видеотехника',
                'parent_id' => 137,
                'slug' => Str::slug('Фото-, аудио-, видеотехника')
            ],
            [
                'title' => 'Компьютерная техника',
                'parent_id' => 137,
                'slug' => Str::slug('Компьютерная техника')
            ],
            [
                'title' => 'Игровые приставки',
                'parent_id' => 137,
                'slug' => Str::slug('Игровые приставки')
            ],
            [
                'title' => 'Крупная бытовая техника',
                'parent_id' => 137,
                'slug' => Str::slug('Крупная бытовая техника')
            ],
            [
                'title' => 'Аренда оборудования',
                'parent_id' => 144,
                'slug' => Str::slug('Аренда оборудования')
            ],
            [
                'title' => 'Монтаж и обслуживание оборудования',
                'parent_id' => 144,
                'slug' => Str::slug('Монтаж и обслуживание оборудования')
            ],
            [
                'title' => 'Производство, обработка',
                'parent_id' => 144,
                'slug' => Str::slug('Производство, обработка')
            ],
            [
                'title' => 'Предметы школы и ВУЗа',
                'parent_id' => 146,
                'slug' => Str::slug('Предметы школы и ВУЗа')
            ],
            [
                'title' => 'Иностранные языки',
                'parent_id' => 146,
                'slug' => Str::slug('Иностранные языки')
            ],
            [
                'title' => 'Вождение',
                'parent_id' => 146,
                'slug' => Str::slug('Вождение')
            ],
            [
                'title' => 'Музыка, театр',
                'parent_id' => 146,
                'slug' => Str::slug('Музыка, театр')
            ],
            [
                'title' => 'Спорт, танцы',
                'parent_id' => 146,
                'slug' => Str::slug('Спорт, танцы')
            ],
            [
                'title' => 'Рисование, дизайн, рукоделие',
                'parent_id' => 146,
                'slug' => Str::slug('Рисование, дизайн, рукоделие')
            ],
            [
                'title' => 'Профессиональная подготовка',
                'parent_id' => 146,
                'slug' => Str::slug('Профессиональная подготовка')
            ],
            [
                'title' => 'Детское развитие, логопеды',
                'parent_id' => 146,
                'slug' => Str::slug('Детское развитие, логопеды')
            ],
            [
                'title' => 'Другое',
                'parent_id' => 146,
                'slug' => Str::slug('Другое')
            ],
            [
                'title' => 'Бухгалтерия, финансы',
                'parent_id' => 134,
                'slug' => Str::slug('Бухгалтерия, финансы')
            ],
            [
                'title' => 'Консультирование',
                'parent_id' => 134,
                'slug' => Str::slug('Консультирование')
            ],
            [
                'title' => 'Набор и коррекция текста',
                'parent_id' => 134,
                'slug' => Str::slug('Набор и коррекция текста')
            ],
            [
                'title' => 'Перевод',
                'parent_id' => 134,
                'slug' => Str::slug('Перевод')
            ],
            [
                'title' => 'Юридические услуги',
                'parent_id' => 134,
                'slug' => Str::slug('Юридические услуги')
            ],
            [
                'title' => 'Страхование',
                'parent_id' => 134,
                'slug' => Str::slug('Страхование')
            ],
            [
                'title' => 'Cоздание и продвижение сайтов',
                'parent_id' => 138,
                'slug' => Str::slug('Cоздание и продвижение сайтов')
            ],
            [
                'title' => 'Установка и настройка ПО',
                'parent_id' => 138,
                'slug' => Str::slug('Установка и настройка ПО')
            ],
            [
                'title' => 'Настройка интернета и сетей',
                'parent_id' => 138,
                'slug' => Str::slug('Настройка интернета и сетей')
            ],
            [
                'title' => 'Мастер на все случаи',
                'parent_id' => 138,
                'slug' => Str::slug('Мастер на все случаи')
            ],
            [
                'title' => 'Маркетинг, реклама, PR',
                'parent_id' => 141,
                'slug' => Str::slug('Маркетинг, реклама, PR')
            ],
            [
                'title' => 'Полиграфия, дизайн',
                'parent_id' => 141,
                'slug' => Str::slug('Полиграфия, дизайн')
            ],
            [
                'title' => 'Вывоз мусора',
                'parent_id' => 142,
                'slug' => Str::slug('Вывоз мусора')
            ],
            [
                'title' => 'Генеральная уборка',
                'parent_id' => 142,
                'slug' => Str::slug('Генеральная уборка')
            ],
            [
                'title' => 'Глажка белья',
                'parent_id' => 142,
                'slug' => Str::slug('Глажка белья')
            ],
            [
                'title' => 'Мойка окон',
                'parent_id' => 142,
                'slug' => Str::slug('Мойка окон')
            ],
            [
                'title' => 'Простая уборка',
                'parent_id' => 142,
                'slug' => Str::slug('Простая уборка')
            ],
            [
                'title' => 'Уборка после ремонта',
                'parent_id' => 142,
                'slug' => Str::slug('Уборка после ремонта')
            ],
            [
                'title' => 'Чистка ковров',
                'parent_id' => 142,
                'slug' => Str::slug('Чистка ковров')
            ],
            [
                'title' => 'Чистка мягкой мебели',
                'parent_id' => 142,
                'slug' => Str::slug('Чистка мягкой мебели')
            ],
            [
                'title' => 'Изготовление ключей',
                'parent_id' => 135,
                'slug' => Str::slug('Изготовление ключей')
            ],
            [
                'title' => 'Пошив и ремонт одежды',
                'parent_id' => 135,
                'slug' => Str::slug('Пошив и ремонт одежды')
            ],
            [
                'title' => 'Ремонт часов',
                'parent_id' => 135,
                'slug' => Str::slug('Ремонт часов')
            ],
            [
                'title' => 'Химчистка, стирка',
                'parent_id' => 135,
                'slug' => Str::slug('Химчистка, стирка')
            ],
            [
                'title' => 'Ювелирные услуги',
                'parent_id' => 135,
                'slug' => Str::slug('Ювелирные услуги')
            ],




        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
