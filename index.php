   
    <link href="css/theme.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>   
        <script src="tweetLinkIt.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	
	<script>function pageComplete(){
		console.log("linking");
		$('.tweet').tweetLinkify();
		}

</script>
<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "331608670-dn1jTMkIWYUUpkCgbiE3BMCZvWG8zkGwOOVN75W8",
    'oauth_access_token_secret' => "tKcjYiycqeT7e6s2cH3Voz82il6rNGCZkEZv0toGaUbQw",
    'consumer_key' => "oFzQhlFQfG8rj4L5T94xOJXo5",
    'consumer_secret' => "Mstg9CSDwnPtV5tS6HWpFzYnktMmoCFRTPxbgZKW9V1SR18L9z"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield ="?q=ebola";

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

/** Perform a POST request and echo the response **/
//$twitter = new TwitterAPIExchange($settings);
//echo $twitter->buildOauth($url, $requestMethod)
            // ->setPostfields($postfields)
            // ->performRequest();
            

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
//$url = 'https://api.twitter.com/1.1/followers/ids.json';
//$getfield = '?screen_name=J7mbo'; **//
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);

             
foreach($string['statuses'] as $items)
{
	$tweetText=$items['text'];
	$users = $items['user'];
	
    echo "<div class='new-tweet'>" . "<span id='pic'>" . "<img src='",$users['profile_image_url'],"'>" . "</span>" . "<p class='username'>" . $users['name'] . "</p>" . "<span class='tweet'>@" . $users['screen_name'] . "</span>" . "</br>" ;
    echo "<span class='create'>" . $items['created_at'] . "</span>" . "</br>";
    echo "<p class='tweet'>" . "" . $tweetText . "</p>" . "</div>" . "</br>";
    
}
echo "<script>pageComplete();</script>;"

//echo "---------</br>";
//echo $twitter->setGetfield($getfield)
             //->buildOauth($url, $requestMethod)
             //->performRequest();
?>












