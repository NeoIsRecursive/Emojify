# Emojify

provides methods for

- checking if string is shortcode
- replace shortcode with emoji
- replacing all shortcodes in string with emoji

## Installation

You can install it with composer:

```
composer require neoisrecursive/emojify
```

## usage

```
use Neoisrecursive\Emojify;

$emojify = new Emojify();

$string = 'hello here is an emoji :smile:';

$emojify->WholeString($string);
// hello, here is an emoji 😄

$emojify->IsShortname(':sunglasses:');
//bool(true)

$emojify->ShortnameToEmoji(':sunglasses:');
//string(4) "😎"
```

## how it works (behind the scenes)

The regex looks for a ":" and then for spaces(" "), since no shortcode contains spaces and breaks if it finds one, if not then another ":", and if the characters inside is a shortcode it returns true.

```
$string3 = ':not_emoji::smile: will work, :not_emoji:smile: will
not while :not_emoji :smile: will work'

$emojify->WholeString($string3);
//string(85) ":not_emoji:😄 will work, :not_emoji:smile: will not while :not_emoji 😄 will work"
```
