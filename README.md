# Emojify

provides methods for

- checking if string is shortcode
- replace shortcode with emoji
- replacing all shortcodes in string with emoji

Made for a md editor/renderer and I didn't find any package that worked and I had already made the regex earlier.

## use

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
