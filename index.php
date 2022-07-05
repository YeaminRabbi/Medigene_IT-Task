<?php 

require __DIR__ . '/vendor/autoload.php';

use SebastianBergmann\Timer\Timer;
use Masterminds\HTML5;

$timer = new Timer;
$timer->start();

foreach (\range(0, 1000) as $i) {
    // ...
}

$duration = $timer->stop();

var_dump(get_class($duration));
var_dump($duration->asString());
var_dump($duration->asSeconds());
var_dump($duration->asMilliseconds());
var_dump($duration->asMicroseconds());
var_dump($duration->asNanoseconds());


// An example HTML document:
$html = <<< 'HERE'
  <html>
  <head>
    <title>TEST</title>
  </head>
  <body id='foo'>
    <h1>Hello to Composer </h1>    
    <p>This is a test of the HTML5 parser.</p>
  </body>
  </html>
HERE;

// Parse the document. $dom is a DOMDocument.
$html5 = new HTML5();
$dom = $html5->loadHTML($html);
// Render it as HTML5:
print $html5->saveHTML($dom);
// Or save it to a file:
$html5->save($dom, 'out.html');

?>