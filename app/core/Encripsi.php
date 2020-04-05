<?php  


class Encripsi
{

	public function encode($input){
		$default = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
		$custom  = "IYA";
		$encoded = strtr(base64_encode($input), $default, $custom);
		return $encoded;
	}
	public function decode($input){
		$custom  = 'pQaZIivj4ndGAH021y+NO5RTS/xPgUz76FMhYq8b3mewKfkJLBocDCrs9VtWIXEu=';
		$default = "inventaris_skensa";;
		$decoded = base64_decode(strtr($input, $custom, $default));
		return $decoded;
	}

}
