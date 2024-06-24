<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook_Video_Link_Lib {

    private $pattern;
	private $error = null;

	public function __construct() {
      $this->pattern = '/sd_src_no_ratelimit:"([^"]+)"/';
    }

	public function __call($function, $args)
    {
        $functionType = strtolower(substr($function, 0, 3));
        $propName = lcfirst(substr($function, 3));
        switch ($functionType) {
            case 'get':
                if (property_exists($this, $propName)) {
                    return $this->$propName;
                }
                break;
            case 'set':
                if (property_exists($this, $propName)) {
                    $this->$propName = $args[0];
                }
                break;
        }
    }

    private function validFacebookVideoURL($url){
        preg_match("/^(?:(?:https?:)?\/\/)?(?:www\.)?facebook\.com\/[a-zA-Z0-9\.]+\/videos\/(?:[a-z0-9\.]+\/)?([0-9]+)\/?(?:\?.*)?/", $url, $match);

        if(isset($match[1])) return TRUE;

        return FALSE;
    }


    public function getYTVideoLink($url){

        if($this->validFacebookVideoURL($url) === FALSE){
            return FALSE;
        }

        $this->error = null;

        $user_agent='Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36';

        $headers = array
        (
            'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: en-US,fr;q=0.8;q=0.6,en;q=0.4,ar;q=0.2',
            'Accept-Encoding: gzip,deflate',
            'Accept-Charset: utf-8;q=0.7,*;q=0.7',
            'cookie:datr=; locale=en_US; sb=; pl=n; lu=gA; c_user=; xs=; act=; presence='
        ); 

        $options = array(
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_CUSTOMREQUEST  => "GET",        //set request type post or get
            CURLOPT_POST           => false,        //set to GET
            CURLOPT_USERAGENT      => $user_agent, //set user agent
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => false,    // don't return headers
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,      // timeout on connect
            CURLOPT_TIMEOUT        => 60,      // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
            CURLOPT_HTTPHEADER     => $headers,
            CURLOPT_REFERER         => base_url()
        );

        $ch = curl_init($url);
        curl_setopt_array( $ch, $options );
        $html = curl_exec( $ch );
        curl_close( $ch );

        preg_match($this->pattern, $html, $match );

        if(isset($match[1])){
            return $match[1];
        }

        $this->error = "Couldn't fetch Facebook video URL";
        return FALSE; 
    }
}
