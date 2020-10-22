<?php if(php_sapi_name() !== 'cli') exit;

echo 'picoCTF{'. base_convert('0x3D', 16, 10) .'}';
