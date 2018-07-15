<?php 
   class Hash{
   	public static function make($string,
                                $salt = 'abcdefghijklmnopqrstuvxywz1234567890()-_.$%@!&*\/'){
   		return hash('sha256',$string . $salt);
   	}
   	public static function salt($length){
        return mcrypt_create_iv($length);
   	}
   	public static function unique(){
   		return self::make(uniqid());
   	}
   }