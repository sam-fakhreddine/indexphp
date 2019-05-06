<html>
<head>
  <title>Sam Fakhreddine: Next Steps / AWS Test - DevOps Engineer - Onica</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>

<body>
<style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>
<div class="content">
  <h1>Welcome to the Sam's Demo Webpage!</h1>
  <p/>
  <?php
    // Print out the current data and time
    print "The Current UTC Date and Time is: <br/>";
    print date("g:i A l, F j Y.");
  ?>
  <p/>

  <?php
    // Setup a handle for CURL
    $curl_handle=curl_init();
    curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
    // Get the hostname of the intance from the instance metadata
    curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/public-hostname');
      $hostname = curl_exec($curl_handle);
      if (empty($hostname))
      {
       print "Sorry, for some reason, we got no hostname back. <br>" ;
      }
      else
      {
       print "Server = " . $hostname . ".<br>";
      }
      // Get the instance-id of the intance from the instance metadata
      curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/instance-id');
      $instanceid = curl_exec($curl_handle);
      if (empty($instanceid))
      {
       print "Sorry, for some reason, we got no instance id back.<br>";
      }
      else
      {
       print "EC2 instance-id = " . $instanceid . ".<br>";
      }
// Get the internal hostname from the instance metadata
      curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/local-hostname');
      $internalhostname = curl_exec($curl_handle);
      if (empty($internalhostname))
      {
       print "Sorry, for some reason, we got no internal hostname  back.<br>";
      }
      else
      {
       print "Internal Hostname = <b>" . $internalhostname. "</b.<br>";
      }
  ?>
    <h2>Thanks for coming by!</h2>
	<?php $value1=mt_rand(300,500); $value2=mt_rand(300,500); ?>
	<img src="http://placekitten.com/<?php echo $value1 ?>/<?php echo $value2 ?>">
</div>	
  </body>
</html>
