<?php
// 17. Практическая задача 2 - вывод данных

// Вы делаете страницу сайта библиотеки. Основные данные в библиотеке - это авторы и книги. Количество авторов и книг не ограничено. 
// Но вы точно знаете, что у каждой книги есть только один автор.

// Дан массив $data, содержащий базу данных авторов и книг этой библиотеки.

// Выведите следующую информацию на сайте:

// 1. Выведи строку: === Авторы ===
// 2. Выведите всех авторов на сайте. Каждый автор должен быть на отдельной строке, при этом формат вывода должен быть следующий:

// Имя автора – его email – его год рождения.

// 3. Выведи строку: === Книги ===
// 4. Выведите все книги на сайте. Каждая книга должна быть на отдельной строке, при этом формат вывода должен быть следующий:

// Название книги – имя автора - год выпуска книги.


// Например:

// === Авторы ===
// Николай Васильевич Гоголь – nikolay_gogol@example.com - 1809
// Александр Сергеевич Пушкин – alexander_pushkin@example.com - 1799

//   === Книги ===
// Мертвые души – Николай Васильевич Гоголь - 1841
// Пиковая дама - Александр Сергеевич Пушкин - 1833


// Внимание!
// Для решении задачи запрещено использовать функции, анонимные функции, преобразование типов, классы, базу данных, другие переменные, кроме $data.

// // Для переноса строки используйте:
// echo '<br>';
// или константу PHP_EOL
// echo PHP_EOL;



// Внимание!Данные и структуру массивов менять запрещено. Не удаляйте комментарий - разделитель в коде.

$data = [
    'authors' => [
        301 => [
            'id' => 301,
            'name' => 'Александр Сергеевич Пушкин',
            'email' => 'alexander_pushkin@example.com',
            'birthYear' => 1799,
        ],
        10 => [
            'id' => 10,
            'name' => 'Николай Васильевич Гоголь',
            'email' => 'nikolay_gogol@example.com',
            'birthYear' => 1809,
        ],
        17 => [
            'id' => 17,
            'name' => 'Михаил Юрьевич Лермонтов',
            'email' => 'mikhail_lermontov@example.com',
            'birthYear' => 1814,
        ],
        80 => [
            'id' => 80,
            'name' => 'Зворыгин Дмитрий Юрьевич',
            'email' => 'dmitry_zvorigin@mail.ru',
            'birthYear' => 1992,
        ],
    ],
    'books' => [
        [
            'title' => 'Евгений Онегин',
            'publishedAt' => '1823—1832',
            'author' => 301,
        ],
        [
            'title' => 'Полтава',
            'publishedAt' => '1828—1829',
            'author' => 301,
        ],
        [
            'title' => 'Мёртвые души',
            'publishedAt' => '1842',
            'author' => 10,
        ],
        [
            'title' => 'Сказка о рыбаке и рыбке',
            'publishedAt' => '1833',
            'author' => 301,

        ],
        [
            'title' => 'Ребро',
            'publishedAt' => '1700',
            'author' => 80,

        ],
    ],
];

/* ===== Ваш код ниже ===== */

echo '=== Авторы ===<br>';
// Ваш код здесь
foreach ($data['authors'] as $id) {
    echo $id['name'] . " - " . $id['email'] . " - " . $id['birthYear'];
    echo "<br/>";
}



echo '=== Книги ===<br>';
// Ваш код здесь
foreach ($data['books'] as $items) {
    $result = ($data['authors'][$items['author']]);
    echo $items['title'] . " - " . $result['name'] . " - " . $items['publishedAt'];
    echo "<br/>";
}
