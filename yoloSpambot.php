  <?php
    $headers = @get_headers($_POST["link"]);

  // Use condition to check the existence of URL
    if(!($headers && strpos( $headers[0], '200'))) {
      echo "URL Doesn't Exist";

    }
    else {
      echo "We are processing your request now :)";
      $output = shell_exec('python3 /Users/saulcooperman/Documents/scopreon.ddns.net_2.0/yolospambotArgs.py'.' '.$_POST["link"].' '.strval($_POST["num"]).' "'.$_POST["messages"].'"');
      echo $output;
    }
  ?>
