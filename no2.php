
<?php
$val = new validate();
$val->password_validate("123Qwer_");
class validate{
	
	public function password_validate($str){
		if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8}$/', $str)){
			echo 'Password Hanya Boleh 8 Karakter Dan Menggunakan Angka, Huruf Kecil, Huruf Besar, dan Karakter Spesial';
		} else {
			echo "Password Benar";
		}
	}
}
?>
