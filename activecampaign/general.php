<?php

//packagist - composer require activecampaign/api-php
//api doc - https://developers.activecampaign.com/v3/reference#update-a-group
//sdk - https://github.com/ActiveCampaign/activecampaign-api-php/blob/master/examples.php

// get started 
$ac = new ActiveCampaign('AC_URL', 'AC_API_KEY');

/*
 * TEST API CREDENTIALS.
 */
if (!(int)$ac->credentials_test()) {
    echo '<p>Access denied: Invalid credentials (URL and/or API key).</p>';
    exit();
}



//track an event 
//if the event doesn't exists it is automatically created 
$ac->track_actid = 'AC_ACTID';
$ac->track_key= 'AC_TRACKID';
$ac->track_email = 'test@example.com';
$event = [
    'email' => 'test@example.com', //this may not be needed (test it)
    'event' => 'Purchase',
];
$event_call = $ac->api('tracking/log', $event);
if (!(int)$event_call->success) {
    // request failed
    echo '<p>Syncing contact failed. Error returned: ' . $event_call->error . '</p>';
}
echo '<pre>';
var_dump($event_call);die;