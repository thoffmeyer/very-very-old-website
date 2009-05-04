<?
$reg_display_name = '1337days.net';

$chr = 'abcdefghijklmnopqrstuvwxyz';
for ( $i = 0; $i < 18; $i++ ) {
    $num = mt_rand(0, strlen($chr) - 1);
    $tmp = substr($chr, $num, 1);
    $reg_site_key .= $tmp;
    if (strlen($reg_site_key) == 6 || strlen($reg_site_key) == 13) {
        $reg_site_key .= '-';
    }
}
?> 