<?php
//ini_set('display_errors',3);
//error_reporting(E_ALL  & ~E_NOTICE & ~E_WARNING);
include_once("simple_html_dom.php");
 
 
 
//NYT_query("json","javascript","[article search key]",false);
// with the 4th parameter set to false , it will only print out the total numbser of articles matching your query.
 
NYT_query("json","jay-z","[article search key]",true,80);
NYT_query("json","eminem","[article search key]",true,80);
 
//NYT_query("json","javascript","[article search key]",true,10);
//with the 4th parameter set to true, it will print out the total number and also, write each article to file.
//the txt files will be in the current working directory under a directory named {your query}  in this case it's javascript
//some will return zero kb.  im not sure what the hell is going on with that(nyt server error status 500), but you can get most articles this way.
//the 5th paramter is to specify the maximum number of articles to write to file.  This is pretty helpful when queries like "computer" have over 120000 results
 
//in the future i'll probably refine the search paramters a bit to get more accurate results such as the ability to search for all articles containing "computer" in the "technology" section of the NYTimes
 
 
 
function NYT_query($format,$query,$apikey,$writetoFile,$max){
	$URL = "http://api.nytimes.com/svc/search/v1/article?format=$format&query=$query&api-key=$apikey";
$html = file_get_html($URL);
$result= json_decode($html);
$arr =  $result->results;
$total = $result->total;
echo $total."\n\n";
if($writetoFile){
	if(isset($max)){
		if($max>$total){
			$max=$total;
		}
		$maximum = floor($max/10);
	}else{
		$maximum= floor($total/10);
	}
	for($i=0;$i<$maximum;$i++){
		$url= "http://api.nytimes.com/svc/search/v1/article?format=$format&query=$query&offset=$i&api-key=$apikey";
		$html = file_get_html($url);
		$result= json_decode($html);
		$array =  $result->results;
		foreach($array as $t){
			$title = urldecode($t->title);
			$url = $t->url;
			$artBody = html_entity_decode(extractArticle($url));
 
				if(is_dir("archive/".$query)){
					writeToFile("archive/".$query."/".$title.".txt",$artBody);
				}else{
					mkdir("archive/".$query);
					writeToFile("archive/".$query."/".$title.".txt",$artBody);
				}
		}
}
	}
}
 
function extractArticle($url){
$html = file_get_html($url);
$body="";
	foreach($html->find('.articleBody') as $element){
		$body.= $element->plaintext."\n";
	}
	$html->clear(); 
	unset($html);
	return $body;
}
function writeToFile($filename,$body){
	$myFile = $filename;
	$fh = fopen($myFile, 'w') or die("can't open file");
	$stringData = $body;
	fwrite($fh, $stringData);
	fclose($fh);	
}