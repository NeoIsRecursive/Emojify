<?php
require __DIR__ . '/vendor/autoload.php';

use Neoisrecursive\Emojify\Emojify;

$emojify = new Emojify();

$string = 'hello, here is an emoji :smile:';

var_dump($emojify->emojifyString($string));
//output: hello, here is an emoji 😄

var_dump($emojify->isShortname(":sunglasses:"));
//bool(true)

var_dump($emojify->shortNameToEmoji(':sunglasses:'));
//string(4) "😎"
