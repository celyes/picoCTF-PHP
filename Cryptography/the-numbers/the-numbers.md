### The Numbers

After downloading the picture provided in the description, we see a set of numbers. after guessing, I concluded that each number might represent that index of a letter in the alphabet (e.g: "a" is 1 and "b" is 2)

So, I wrote this simple script to retrieve the flag:


```php
<?php if(php_sapi_name() !== 'cli') exit; // Runs from the command line only

$alpha = range('A','Z'); // array that contains alphabet (uppercase)
$flag = '';

$flag_prefix = [16, 9, 3, 15, 3, 20, 6];
$flag_body = [20, 8, 5, 14, 21, 13, 2, 5, 18, 19, 13, 1, 19, 15, 14];

// get flag prefix
foreach($flag_prefix as $l){
	$flag .= $alpha[$l-1];
}

// get flag body
$flag .= '{';

foreach($flag_body as $l){
	$flag .= $alpha[$l-1];
}

$flag .= '}';

echo $flag;
``` 

the flag is `PICOCTF{THENUMBERSMASON}`