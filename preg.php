<?php
//正则验证整数：0，-0，+0,11111，-11111，+1111
//$mixed=0;
//var_dump(preg_match( '/^[-+]?([1-9]\d*|0)$/'  , $mixed) === 1);
 
 /**
  *正则验证整数：0，-0，+0,11111，-11111，+1111
  *return bool 整数返回true，非返回false
  */
 function _isInt($mixed){
     return preg_match( '/^[-+]?([1-9]\d*|0)$/'  , $mixed) === 1;
 }
