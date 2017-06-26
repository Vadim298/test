<?php
/* ini_get('имя_директивы')
8M
256K
1G
123456
$size = ini_get('post_max_size');//8M
$letter = $size{strlen($size) -1}; //M
$size = (integer)$size;//8 */
switch($letter)
{
    case 'G': $size *= 1024;break;
    case 'M': $size *= 1024;break;
    case 'K': $size *= 1024;break;
}
echo 'POST_MAX_SIZE = '.$size.' bytes';

?>