<?php

$feed_link = 'http://rss.cnn.com/rss/edition.rss';

$feed_data = json_encode(simplexml_load_string(file_get_contents($feed_link)));
$feed_array = json_decode($feed_data,TRUE);

print_r($feed_array);

// foreach (array_slice(array_reverse($feed_array['entry']),0,10) as $key => $value) {
//     echo $value['title'];
// }