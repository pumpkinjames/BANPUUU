 <?php
  

function send_LINE($msg){
 $access_token = 'uQhVag2wDH9/GQBiaDRW9bBjExahZxxnt09LHFUPrQ17SH06/a6iQHFcSoqky3SzCpbxFClQELgmxVaIM/gvJQJtxHxuYc9HqFeZ97yhWW8JabU+/QY9y2HUryQ4watEcWROiMGMBnqIlpYIec5cmAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U5aa701846acba2c2204a4009b82a5f60',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
