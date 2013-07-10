<?php
function ccStrLen($str) #计算中英文混合字符串的长度 
{ 
	$ccLen=0; 
	$ascLen=strlen($str); 
	$ind=0; 
	$hasCC=preg_match("[xA1-xFE]",$str); #判断是否有汉字 
	$hasAsc=preg_match("[x01-xA0]",$str); #判断是否有ASCII字符 
	if($hasCC && !$hasAsc) #只有汉字的情况 
		return strlen($str)/2; 
	if(!$hasCC && $hasAsc) #只有Ascii字符的情况 
		return strlen($str); 
	for($ind=0;$ind<$ascLen;$ind++) 
	{ 
		if(ord(substr($str,$ind,1))>0xa0) 
		{ 
			$ccLen++; 
			$ind++; 
		} 
		else 
		{ 
			$ccLen++; 
		} 
	} 
	return $ccLen; 
} 
function ccStrLeft($str,$len) #从左边截取中英文混合字符串 
{ 
	$ascLen=strlen($str); if($ascLen<=$len) return $str; 
	$hasCC=preg_match("[xA1-xFE]",$str); #同上 
	$hasAsc=preg_match("[x01-xA0]",$str); 
	if(!$hasCC) return substr($str,0,$len); 
	if(!$hasAsc) 
		if($len & 0x01) #如果长度是奇数 
			return substr($str,0,$len+$len-2); 
		else 
			return substr($str,0,$len+$len); 
	$cind=0;$flag=0; 
	while($cind<$ascLen) 
	{ 
		if(ord(substr($str,$cind,1))<0xA1) $flag++; 
		$cind++; 
	} 
	if($flag & 0x01) 
		return substr($str,0,$len); 
	else 
		return substr($str,0,$len-1); 
}
