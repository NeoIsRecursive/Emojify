<?php
require __DIR__ . '/vendor/autoload.php';

use Neoisrecursive\Emojify;

$emojify = new Emojify();

$string = 'hello, here is an emoji :smile:';

var_dump($emojify->WholeString($string));
// hello, here is an emoji 😄

var_dump($emojify->IsShortname(':sunglasses:'));
//bool(true)

var_dump($emojify->ShortnameToEmoji(':sunglasses:'));
//string(4) "😎"
