<?PHP

$username = "some-username";
$password = "some-password";
$remote_url = 'http://www.somedomain.com/path/to/file';

// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header' => "Authorization: Basic " . base64_encode("$username:$password")                 
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents($remote_url, false, $context);

print($file);

?>
