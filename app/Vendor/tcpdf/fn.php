<?php ob_start();
session_start();
//session_cache_expire(60);
error_reporting(E_ALL || E_NOTICE);
//default is jakarta ( GMT+7)
date_default_timezone_set("Asia/Jakarta");


//AES encription start
require_once('AES.class.php');

// Dibuat oleh Rosihan Ari Y
// Last date modified: 27/4/2009
// http://blog.rosihanari.net
// Anda berhak memodifikasi script ini asal minta ijin terlebih dahulu pada si pembuatnya


function paramEncrypt($x)
{
   $Cipher = new AES();
   // kunci enkripsi (Anda bisa memodifikasi kuncinya)
   $key_128bit = '2b7e151628aed2a6abf7158809cf4f3c';

   // membagi panjang string yang akan dienkripsi dengan panjang 16 karakter
   $n = ceil(strlen($x)/16);
   $encrypt = "";

   for ($i=0; $i<=$n-1; $i++)
   {
      // mengenkripsi setiap 16 karakterF
      $cryptext = $Cipher->encrypt($Cipher->stringToHex(substr($x, $i*16, 16)), $key_128bit);
	  // menggabung hasil enkripsi setiap 16 karakter menjadi satu string enkripsi utuh
      $encrypt .= $cryptext;   
   } 

   return $encrypt;
}

function paramDecrypt($x)
{
   $Cipher = new AES();
   // kunci dekripsi (kunci ini harus sama dengan kunci enkripsi)
   $key_128bit = '2b7e151628aed2a6abf7158809cf4f3c';

   // karena string hasil enkripsi memiliki panjang 32 karakter, maka untuk proses dekripsi ini panjang string dipotong2 dulu menjadi 32 karakter
      
   $n = ceil(strlen($x)/32);
   $decrypt = "";

   for ($i=0; $i<=$n-1; $i++)
   {
      // mendekrip setiap 32 karakter hasil enkripsi
      $result = $Cipher->decrypt(substr($x, $i*32, 32), $key_128bit);
	  // menggabung hasil dekripsi 32 karakter menjadi satu string dekripsi utuh
      $decrypt .= $Cipher->hexToString($result);
   }
   return $decrypt; 
}

function decode($x)
{
  // proses decoding: memecah parameter dan masing-masing value yang terkait

  $pecahURI = explode('?', $x);
  $parameter = $pecahURI[1];

  $pecahParam = explode('&', paramDecrypt($parameter));

  for ($i=0; $i <= count($pecahParam)-1; $i++)
  {
     $decode = explode('=', $pecahParam[$i]);
     $var[$decode[0]] = $decode[1];  
  }

  return $var;
}


function DayCount($s,$e){

    $date1=explode(' ',$s);
    $date1=$date1[0];
    $date1=explode('-',$date1);
    $y1=$date1[0];
    $m1=$date1[1];
    $d1=$date1[2];

    $date2=explode(' ',$e);
    $date2=$date2[0];
    $date2=explode('-',$date2);
    $y2=$date2[0];
    $m2=$date2[1];
    $d2=$date2[2];

$start= GregorianToJD($m1, $d1, $y1);
$end= GregorianToJD($m2, $d2, $y2);
return abs($end-$start);
}

function DC($s,$e){
    $date1=explode(' ',$s);
    $date1=$date1[0];
    $date1=explode('-',$date1);
    $y1=$date1[0];
    $m1=$date1[1];
    $d1=$date1[2];
    $date2=explode(' ',$e);
    $date2=$date2[0];
    $date2=explode('-',$date2);
    $y2=$date2[0];
    $m2=$date2[1];
    $d2=$date2[2];
$start= GregorianToJD($m1, $d1, $y1);
$end= GregorianToJD($m2, $d2, $y2);
return abs($end-$start);
}

function SQLError(){
    die(mysql_error());
    exit;
}

function Go($url){
echo "<script>window.location.replace('".$url."')</script>";
}

function Goo($url){
echo "window.location.replace('".$url."')";
}

function alertGo($m,$u=''){
	echo "<script>alert('".$m."');";
      if($u !=''){
        echo "window.location.replace('".$u."');";
        }
     echo "<script>";

}

function point($a){
    if($a<=0)$p='4';
    elseif($a==1)$p='3';
    elseif($a==2)$p='2';
    elseif($a==3)$p='1';
    else $p='0';
    return $p;
}
function str_right($value, $count){
        return substr($value, ($count*-1));
    }

    function str_left($string, $count){
        return substr($string, 0, $count);
    }
    
 function DateOnly($k) {
        $temp  = "";
        $day = date("d", strtotime($k));
        $month = date("m", strtotime($k));
        $year = date("Y", strtotime($k));
        $temp = $year."-".str_right("00".$month, 2)."-".str_right("00".$day, 2);
        return $temp;
    }
	
	
function DQ($Q){
	$que='';
	$que=mysql_query($Q);
	return $que;
}

function FQ($Q){
	$r='';
	$r=mysql_fetch_array($Q);
	return $r;
}

function NQ($Q){
	$n='';
	$n=mysql_num_rows($Q);
	return $n;
}

function genPass($length=9, $strength=0) {
	$vowels = 'aeuy';
	$consonants = 'bdghjmnpqrstvz';
	if ($strength & 1) {
		$consonants .= 'BDGHJLMNPQRSTVWXZ';
	}
	if ($strength & 2) {
		$vowels .= "AEUY";
	}
	if ($strength & 4) {
		$consonants .= '23456789';
	}
	if ($strength & 8) {
		$consonants .= '@#$%';
	}
 
	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}

function nf($nb){
	return number_format($nb,2,',','.');
	
}

function getDayofDate($d){
  $date = strtotime($d);
  $date = date("D", $date);
  $date = strtolower($date);
  return $date;
 }

function getDayofDate2($d){
  $date = strtotime($d);
  $date = date("l", $date);
  $date = strtolower($date);
  return $date;
 }
 
function dateRange($a,$i){
$dateMonthYearArr = array();
$fromDateTS = strtotime($a);
$toDateTS = strtotime($i);
for ($currentDateTS = $fromDateTS; $currentDateTS <= $toDateTS; $currentDateTS += (60 * 60 * 24)) {
// use date() and $currentDateTS to format the dates in between
$currentDateStr = date("Y-m-d",$currentDateTS);
$dateMonthYearArr[] = $currentDateStr;
echo $currentDateStr."<br />";
}
}

function getBetweenDate($a,$i){
    $dateMonthYearArr = array();
	$fromDateTS = strtotime($a);
	$toDateTS = strtotime($i);
	for ($currentDateTS = $fromDateTS; $currentDateTS <= $toDateTS; $currentDateTS += (60 * 60 * 24)) {
	// use date() and $currentDateTS to format the dates in between
	$currentDateStr = date("Y-m-d",$currentDateTS);
	$dateMonthYearArr[] = $currentDateStr;
	$date.=$currentDateStr.",";
	}
return $date;
}



function delConfirm($data){
	echo "onclick='return confirm('Continue delete ::".$data."');'";	
}

function genTransID($a){
	return $a.time();	
}

function CheckOutdate($date){
return date($date, mktime(0, 0, 0, date("m") , date("d") - 1, date("Y")));
}

function actualPrice($p){
	$x=explode(',',$p);
	$p=str_replace('.','',$x['0']);
	return $p;
}

function NewGuid($id='',$od='') { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
	if($id!='')$id=$id.'-';
	if($od!='')$od=$od.'-';
	
    return $id.$guidText.$od;
}

function GenerateInternalInvoiceNumber($id='',$od='') { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
	if($id!='')$id=$id.'-';
	if($od!='')$od=$od.'-';
	
    return $id.$od.$guidText;
}



function transID(){
	$codelenght =10;
	while($newcode_length < $codelenght) {
	$x=1;
	$y=3;
	$part = rand($x,$y);
	if($part==1){$a=65;$b=90;}  // Numbers
	if($part==2){$a=65;$b=90;}  // UpperCase
	if($part==3){$a=65;$b=90;} // LowerCase
	$code_part=chr(rand($a,$b));
	$newcode_length = $newcode_length + 1;
	$newcode = $newcode.$code_part;
	}
	$nc=$newcode;
	return $nc;
}

function VoucherID( $num, $base=62, $index=false ) {
    if (! $base ) {
        $base = strlen( $index );
    } else if (! $index ) {
        $index = substr( "ABCDEFGHIJKLMNOPQRSTUVWXYZ" ,0 ,$base );
    }
    $out = "";
    for ( $t = floor( log10( $num ) / log10( $base ) ); $t >= 0; $t-- ) {
        $a = floor( $num / pow( $base, $t ) );
        $out = $out . substr( $index, $a, 1 );
        $num = $num - ( $a * pow( $base, $t ) );
    }
    return $out;
}



function VID($id){
	$codelenght =5;
	while($newcode_length < $codelenght) {
	$x=1;
	$y=3;
	$part = rand($x,$y);
	if($part==1){$a=65;$b=90;}  // Numbers
	if($part==2){$a=65;$b=90;}  // UpperCase
	if($part==3){$a=65;$b=90;} // LowerCase
	$code_part=chr(rand($a,$b));
	$newcode_length = $newcode_length + 1;
	$newcode = $newcode.$code_part;
	}
	return $newcode.time().$id;
}


function GenerateHotelVoucherKey(){
$string = "";
$letters = "ABCDEFGHJKLMNPQRTSVWXYZ";
$numbers = "23456789";
	for($i=0;$i!=8;$i++) {
		if($i < 2 || $i >= 6)
			$string.= $letters[rand(0,strlen($letters)-1)];
		else
			$string.= $numbers[rand(0,strlen($numbers)-1)];
	}
	return $string;
}

function GenerateSupplierVoucherKey(){
$string = "";
$letters = "ABCDEFGHJKLMNPQRTSVWXYZ";
$numbers = "23456789";
	for($i=0;$i!=8;$i++) {
		if($i < 2 || $i >= 6)
			$string.= $letters[rand(0,strlen($letters)-1)];
		else
			$string.= $numbers[rand(0,strlen($numbers)-1)];
	}
	return $string;
}




function tGen($i){
	$i=$i.time();
	return strtoupper(base_convert($i,10,16));	
}

function DateOnly2($date){
	//date : 2011-04-03 11:20:12
	return substr($date,0,10);
}

function setMK($d){// date : 2011-04-26 11:50:24
	$hour=substr($d,11,2);
	$min=substr($d,14,2);
	$sec=substr($d,16,2);
	
	$month=substr($d,5,2);
	$day=substr($d,8,2);
	$year=substr($d,0,4);
	return mktime($hour,$min,$sec,$month,$day,$year);
	 //mktime(hour,minute,second,month,day,year,is_dst) 
}


function getMK($d){// date : 2011-04-26 11:50:24
	$all=explode(' ',$d);
	$date=$all['0']; // date
		$date=explode('-',$date);//get date
		$year=$date[0];
		$month=$date[1];
		$day=$date[2];
	
	$time=$all[1];
	$time=explode(':',$time);
		$hour=$time[0];
		$min=$time[1];
		$sec=$time[2];
return mktime($hour,$min,$sec,$month,$day,$year,0.1);
	 //mktime(hour,minute,second,month,day,year,is_dst) 
}

function timeDiff($firstTime,$lastTime)
{

// convert to unix timestamps
$firstTime=strtotime($firstTime);
$lastTime=strtotime($lastTime);

// perform subtraction to get the difference (in seconds) between times
$timeDiff=$lastTime-$firstTime;

// return the difference
return floor($timeDiff/3600);
}

function time_since($original) {
    // array of time period chunks
    $chunks = array(
        array(60 * 60 * 24 * 365 , 'year'),
        array(60 * 60 * 24 * 30 , 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24 , 'day'),
        array(60 * 60 , 'hour'),
        array(60 , 'minute'),
    );
    
    $today = time(); /* Current unix time  */
	$original=strtotime($original);
    $since = $today - $original;
    
    // $j saves performing the count function each time around the loop
    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        
        // finding the biggest chunk (if the chunk fits, break)
        if (($count = floor($since / $seconds)) != 0) {
            // DEBUG print "<!-- It's $name -->\n";
            break;
        }
    }
    
    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
    
    if ($i + 1 < $j) {
        // now getting the second item
        $seconds2 = $chunks[$i + 1][0];
        $name2 = $chunks[$i + 1][1];
        
        // add second item if it's greater than 0
        if (($count2 = floor(($since - ($seconds * $count)) / $seconds2)) != 0) {
            $print .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}s";
        }
    }
    return $print;
}


function GenID($id){
	$codelenght=6;
	while($newcode_length < $codelenght) {
	$x=1;
	$y=3;
	$part = rand($x,$y);
	if($part==1){$a=65;$b=90;}  // Numbers
	if($part==2){$a=65;$b=90;}  // UpperCase
	if($part==3){$a=65;$b=90;} // LowerCase
	$code_part=chr(rand($a,$b));
	$newcode_length = $newcode_length + 1;
	$newcode = $newcode.$code_part;
	}
	return $newcode;
}

 function get_user_browser()
 {
 $u_agent = $_SERVER['HTTP_USER_AGENT'];
 $ub = '';
 if(preg_match('/MSIE/i',$u_agent))
 {
 $ub = "ie";
 }
 elseif(preg_match('/Firefox/i',$u_agent))
 {
 $ub = "firefox";
 }
 elseif(preg_match('/Safari/i',$u_agent))
 {
 $ub = "safari";
 }
 elseif(preg_match('/Chrome/i',$u_agent))
 {
 $ub = "chrome";
 }
 elseif(preg_match('/Flock/i',$u_agent))
 {
 $ub = "flock";
 }
 elseif(preg_match('/Opera/i',$u_agent))
 {
 $ub = "opera";
 } 
 
 return $ub;
 }

function BB($u){
		 if(strpos($u,'.')){//pecahan
			  $au=explode('.',$u);
			  $nu=$au[0];
			 $r = substr($nu,-3);
			 if($r<999){
				$akhir=$nu-$r;
			 }else{
				$akhir=$u;
			 }
	 	}else{
			 $r = substr($u,-3);//bulatan
			 if($r<999){
				$akhir=$u-$r;
			 }else{
				$akhir=$u;
			 }
		 }
	 #return number_format($akhir, 2, ',', '.');
	 return $akhir;
}

function BT($u){//10600
		 if(strpos($u,'.')){//pecahan
			  $au=explode('.',$u);
			  $nu=$au[0];
			 $r = substr($nu,-3);
			 if($r>001){
				$akhir=$nu+1000;
			 }else{
				$akhir=$u;
			 }
	 	}else{
			 $r = substr($u,-3);//bulatan
			 if($r>001){
				$akhir=$u+1000;
			 }else{
				$akhir=$u;
			 }
		 }
	 //return number_format($akhir, 2, ',', '.');
	 return $akhir;
}

?>