<html>
<title>Case SRE Itaú - Tiago Meneguim</title>
<body>
<br>
<h2 align="center">Case SRE Itaú - Tiago Meneguim</h2>
<br>

<?php
set_time_limit(300);


//Keys and tokens Twitter
$consumer_key = $consumer_key_twitter;
$consumer_secret = $consumer_secret_twitter ;
$access_token = $access_token_twitter;
$access_token_secret = $access_token_secret_twitter;

//Mysql
$servername = $servername_mysql;
$database = $database_mysql;
$username = $username_mysql;
$password = $password_mysql;



// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$sql_metrics = "TRUNCATE TABLE twitter.tweets";
$conn->query($sql_metrics);


// Include library
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;


// Connect to API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");


$tweets_devops = $connection->get('statuses/user_timeline', ['screen_name' => 'devops', 'count' => 10]);
$tweets_remediation = $connection->get('statuses/user_timeline', ['screen_name' => 'remediation', 'count' => 10]);
$tweets_openbanking = $connection->get('statuses/user_timeline', ['screen_name' => 'openbanking', 'count' => 10]);
$tweets_sre = $connection->get('statuses/user_timeline', ['screen_name' => 'sre', 'count' => 10]);
$tweets_microservices = $connection->get('statuses/user_timeline', ['screen_name' => 'microservices', 'count' => 10]);
$tweets_logmonitoring = $connection->get('statuses/user_timeline', ['screen_name' => 'logmonitoring', 'count' => 10]);
$tweets_observability = $connection->get('statuses/user_timeline', ['screen_name' => 'observability', 'count' => 10]);
$tweets_metrics = $connection->get('statuses/user_timeline', ['screen_name' => 'metrics', 'count' => 10]);

//print_r($statuses);


// DEVOPS
	foreach ($tweets_devops as $tweet){ 
		foreach ($tweets_devops as $t){
			echo '<img src="'.$t->user->profile_image_url.'" /> '.$t->text.'<br>.';

	$sql_devops = "INSERT INTO twitter.tweets (tag, tweet) VALUES ('devops','".$t->text."')";
	$conn->query($sql_devops);
								}
							}


// REMEDIATION
	if ($tweets_remediation <> '')						
	foreach ($tweets_remediation as $tweet){ 
		foreach ($tweets_remediation as $t){
			echo '<img src="'.$t->user->profile_image_url.'" /> '.$t->text.'<br>.';

	$sql_remediation = "INSERT INTO twitter.tweets (tag, tweet) VALUES ('remediation','".$t->text."')";
	$conn->query($sql_remediation);
								}
							}


// OPENBANKING
/*if (strstr(var_dump($tweets_openbanking), 'Sorry, that page does not exist', true) != false) 
{
	foreach ($tweets_openbanking as $tweet){ 
		foreach ($tweets_openbanking as $t){
			echo '<img src="'.$t->user->profile_image_url.'" /> '.$t->text.'<br>.';

	$sql_openbanking = "INSERT INTO twitter.tweets (tag, tweet) VALUES ('openbanking','".$t->text."')";
	$conn->query($sql_openbanking);
								}
							}
}*/


// SRE
	foreach ($tweets_sre as $tweet){ 
		foreach ($tweets_sre as $t){
			echo '<img src="'.$t->user->profile_image_url.'" /> '.$t->text.'<br>.';

	$sql_sre = "INSERT INTO twitter.tweets (tag, tweet) VALUES ('sre','".$t->text."')";
	$conn->query($sql_sre);
								}
							}



// MICROSERVICES
if (strstr(var_dump($tweets_microservices), 'Sorry, that page does not exist', true) !== false) 
{
	foreach ($tweets_microservices as $tweet){ 
		foreach ($tweets_microservices as $t){
			echo '<img src="'.$t->user->profile_image_url.'" /> '.$t->text.'<br>.';

	$sql_microservices = "INSERT INTO twitter.tweets (tag, tweet) VALUES ('microservices','".$t->text."')";
	$conn->query($sql_microservices);
								}
							}
}

/*
// LOGMONITORING
if (strstr(var_dump($tweets_logmonitoring), 'Sorry, that page does not exist', true) !== false) 
{
	foreach ($tweets_logmonitoring as $tweet){ 
		foreach ($tweets_logmonitoring as $t){
			echo '<img src="'.$t->user->profile_image_url.'" /> '.$t->text.'<br>.';

	$sql_logmonitoring = "INSERT INTO twitter.tweets (tag, tweet) VALUES ('logmonitoring','".$t->text."')";
	$conn->query($sql_logmonitoring);
								}
							}
	echo 'tweets_logmonitoring'	;			
	var_dump($tweets_logmonitoring);
}*/


// OBSERVABILITY
	foreach ($tweets_observability as $tweet){ 
		foreach ($tweets_observability as $t){
			echo '<img src="'.$t->user->profile_image_url.'" /> '.$t->text.'<br>.';

	$sql_observability = "INSERT INTO twitter.tweets (tag, tweet) VALUES ('observability','".$t->text."')";
	$conn->query($sql_observability);
								}
							}

/*
// METRICS
if (strstr(var_dump($tweets_metrics), 'Sorry, that page does not exist', true) !== false) 
{
	foreach ($tweets_metrics as $tweet){ 
		foreach ($tweets_metrics as $t){
			echo '<img src="'.$t->user->profile_image_url.'" /> '.$t->text.'<br>.';

	$sql_metrics = "INSERT INTO twitter.tweets (tag, tweet) VALUES ('metrics','".$t->text."')";
	$conn->query($sql_metrics);
								}
							}
}
*/

//Fechando conexão com o BD MYSQL
$conn->close();

?>