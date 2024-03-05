<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "a2174ecd73aba294c17f", // Replace with 'key' from dashboard
    "6dfd5fb6184381855dcb", // Replace with 'secret' from dashboard
    "1760143", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for ($i = 0; $i < 100 ; $i++) {
    $pusher->trigger('quesito', 'new-quesitos', array(
        rand(0, 100), rand(0, 200),rand(0,150), -rand(0,100), rand(0, 100)
    ));
    sleep(1);
}
