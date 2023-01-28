<?php

use Geekbrains\LevelTwo\Blog\{Post, User, Comment};
use Geekbrains\LevelTwo\Person\{Person, Name};
use Geekbrains\LevelTwo\Blog\Repositories\InMemoryUsersRepository;
use Geekbrains\LevelTwo\Blog\Exceptions\UserNotFoundException;



//spl_autoload_register('load');
require __DIR__ . "/vendor/autoload.php";
//function load($className)
//{
//    $file = $className . ".php";
//    $file = str_replace("Geekbrains\LevelTwo", 'src', $file);
//    $file = str_replace("\\", "/", $file);
//    if(file_exists($file)) {
//        include $file;
//    }
//}
$faker = Faker\Factory::create('ru_RU');
$clickDown = $argv[1] ?? null;
var_dump($clickDown);


try{
    switch ($clickDown){
        case $clickDown === 'user':
            $user = new User(
                $faker->imei(),
                $name = new Name(
                    $faker->firstName(),
                    $faker->lastName()
                ),
                $name->firstName()
            );
            echo $user;
            break;
        case $clickDown === 'post':
            $post = new Post(
                $faker->imei(),
             new Person(
                 new Name(
                     $faker->firstName(),
                     $faker->lastName()
                 ), new DateTimeImmutable(),
             ),
                $faker->title(),
                $faker->text()
            );
            echo $post;
            break;
        case $clickDown === 'comment':
           $comment = new Comment(
               $faker->imei(),
               new User(
                   $faker->imei(),
                   $name = new Name(
                       $faker->firstName(),
                       $faker->lastName(),
                   ),
                   $name->firstName(),
               ),
               new Post(
                   $faker->imei(),
                   new Person(
                       new Name(
                           $faker->firstName(),
                           $faker->lastName()
                       ),
                       new DateTimeImmutable()
                   ),
                   $faker->title(),
                   $faker->text(),

               ),
               $faker->text()
           );
            echo $comment;
            break;

        default:
            echo 'no command';
    }
}catch (Exception $e){
    $e->getMessage();
}




