# Emojify

provides methods for

- checking if string is shortcode
- replace shortcode with emoji
- replacing all shortcodes in string with emoji

Made for a md editor/renderer and I didn't find any package that worked and I had already made the regex earlier.

## use

```
use Neoisrecursive\Emojify\Emojify;

$emojify = new Emojify();

$string = 'hello here is an emoji :smile:';

$emojify->emojifyString($string);
//string(28) "hello, here is an emoji 😄"

$emojify->isShortname(":sunglasses:");
//bool(true)

$emojify->shortNameToEmoji(':sunglasses:')
//string(4) "😎"
```
