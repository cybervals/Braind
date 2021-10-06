    <?php
$articleText = "<p>The current shape of the North American continent (the present-day territory of the United States of America and Canada) was formed 25,000 years ago. At that time the great northern icecap flowed over the North American continent. This ice flow determined the size and drainage of the Great Lakes. They changed the direction of the Missouri River and carved the channel of the Hudson River. They created the northern part of the Central Agricultural Basin, which is one of the richest farming areas in the world!!.</p>"; #взял для примера, первый обзац из статьи, здесь 512 символов.
$articleLink = "https://catchenglish.ru/teksty/teksty-srednej-slozhnosti/america-the-beautiful-2.html"; #ссылка на статью

    
$string = rtrim(strip_tags($articleText)); #уберём все html элементы и знаки препинания из конца, если они есть
$articlePreview = substr($string, 0, 200); #обрежем

$array = explode(" ", $articlePreview); #разобьём строку на слова и преобразуем в массив
$amount = count($array); #подсчитаем количество слов
$lastThreeWords = "{$array[$amount - 3]} {$array[$amount - 2]} {$array[$amount - 1]}"; #сохраним 3 последних слова

unset($array[$amount - 3]); #удалим 3 последних слова из массива
unset($array[$amount - 2]);
unset($array[$amount - 1]);

$articlePreview = implode(" ", $array); #объеденим элементы массива в строку, без 3 последних слов
//print_r("{$test} <a href=\"{$articleLink}\">{$lastThreeWords}...</a>");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
</head>
<body>
    <h2>Задание 1. Реализовать скрипт на PHP</h2>
    <br><br>
    <?php print_r("{$articlePreview} <a target=\"_blank\" href=\"{$articleLink}\">{$lastThreeWords}...</a>"); ?>
</body>
</html>