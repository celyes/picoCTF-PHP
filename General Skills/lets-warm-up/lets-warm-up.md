### Lets Warm Up

in this challenge, all you have to do is to convert the value `0x70` from hexadecimal to ASCII

this is the code in PHP to do it:

```php
<?php if(php_sapi_name() !== 'cli') exit; // Runs from the command line only

echo chr(0x70);
``` 