<?php 

class Url
{
    public static function check()
    {
        if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url[0];
		}
    }
}