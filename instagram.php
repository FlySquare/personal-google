<?php
include("db/db.php");
$usernamesor=$db->prepare("SELECT * FROM profile where id=:id");
$usernamesor->execute(array(
	'id'=>2
));
$usernamecek=$usernamesor->fetch(PDO::FETCH_ASSOC);
$link = "https://www.instagram.com/".$usernamecek['insta_username']."/?__a=1";
function get_content($URL){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_URL, $URL);
      $data = curl_exec($ch);
      curl_close($ch);
      return $data;
}

//$json = file_get_contents("http://api.laut.fm/station/radiojfm/current_song");

$json = get_content($link);
$data = json_decode($json, true);

$username = $data["graphql"]["user"]['full_name'];
$userphoto = $data["graphql"]["user"]['profile_pic_url_hd'];
$userbio = $data["graphql"]["user"]['biography'];
$userinsta = $data["graphql"]["user"]['username'];
$follower = $data["graphql"]["user"]['edge_followed_by']['count'];
$followed = $data["graphql"]["user"]['edge_follow']['count'];
$posts = $data["graphql"]["user"]['edge_owner_to_timeline_media']['count'];
 ?>
