### Warmed up

this challange is easy. you just need to convert `0x3D` which is in hexadecimal(base 16) to decimal (base 10)

in PHP, you can accomplish this task as follows:

```php
<?php if(php_sapi_name() !== 'cli') exit;

echo 'picoCTF{'. base_convert('0x3D', 16, 10) .'}';
```

the flag is `picoCTF{61}`