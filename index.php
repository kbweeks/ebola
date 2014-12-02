
	<head>
            
                <title>Twitter Streaming Using Node</title>
                <script src="../socket.io/socket.io.js"></script>
                <!-- JQuery -->
                <script src="/libs/jquery-1.10.1.js"></script>
            
            
            
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Fixed Width Example</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
                <link href="css/theme.css" rel="stylesheet">
                <link rel="stylesheet" href="css/index.css">
                    
                    
                <!-- Google Maps -->
                <link href="https://google-developers.appspot.com/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>

                
                <!-- Generic server specific functions -->
                <script src="/js/FMEServer.js" type="text/javascript"></script>

                <!-- Spatial Dashboard JavaScript -->
                <script src="/js/twitterStream.js" type="text/javascript"></script>    
                </head>


<body onload="initialize()">
    
 <div class="container">
    <h1>Ebola Across The World</h1>
<!--<div class="navbar navbar-default">
  <div class="container">
    <a class="navbar-brand" href="#">Brand</a>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="divider-vertical"></li>
      <li><a href="#">More</a></li>
      <li><a href="#">Options</a></li>
    </ul>
  </div>
        </div> -->


  <div class="jumbotron text-center">
    <div id="map_canvas"></div>
    <p class="lead">Map goes here</p>
  </div>
  
  <div class="row">
    <div class="col-md-5">
      <h4>What's the World Saying?</h4>
      
      
      
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
    echo "TWEET: " . $items['text'] . "</br>";
    echo "Created at: " . $items['created_at'] . "</br>";
    echo "User: " . $items['user']['name'] . "</br>";
}

//echo "---------</br>";
//echo $twitter->setGetfield($getfield)
             //->buildOauth($url, $requestMethod)
             //->performRequest();
?>

</div>
    
    
    
    
    
    
    
    <div class="col-md-7">
      <h4>Important News Updates</h4>
    
    
  </div>
  </div>
  
  <hr>
  
  <div class="jumbotron text-center">
    <p class="lead">Flickr Here</p>
  </div>
  
</div> <!-- /container -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>














