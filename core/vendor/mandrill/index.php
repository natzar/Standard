<?php

/**
 * This examples shows how Mandrill library is used to send a message.
 */

require('Mandrill.php');
require('config.php');

/*$request_json = '{"type":"messages","call":"send","message":{"html": "<h1>example html</h1>", "text": "example text", "subject": "example subject", "from_email": "wes@werxltd.com", "from_name": "example from_name", "to":[{"email": "wes@reasontostand.org", "name": "Wes Widner"}],"headers":{"...": "..."},"track_opens":true,"track_clicks":true,"auto_text":true,"url_strip_qs":true,"tags":["test","example","sample"],"google_analytics_domains":["werxltd.com"],"google_analytics_campaign":["..."],"metadata":["..."]}}';*/

$request_json='{"type":"messages","call":"send-template",
    "key": "mLPSdIFyFEYqQT3MS_WPww",
    "template_name": "nueva-cuenta",
    "template_content": [
        {
            "name": "title",
            "content": "¡Esto es el título importado!"
        }
    ],
    "message": {
        "subject": "Esto es una prueba",
        "from_email": "noreply@montatulunademiel.com",
        "from_name": "Monta Tu Luna De Miel",
        "to": [
            {
                "email": "victor@aklame.com",
                "name": "Victor"
            }
        ],
        "headers": {
            
        },
        "track_opens": true,
        "track_clicks": true,
        "auto_text": true,
        "url_strip_qs": true,
        "preserve_recipients": true,
        "bcc_address": "admin@aklame.com",
        "global_merge_vars": [],
        "merge_vars": [
            {
                "rcpt": "example rcpt",
                "vars": [
                ]
            }
        ],
        "tags": [
            "example tags[]"
        ],
        "google_analytics_domains": [
           
        ],
        "google_analytics_campaign": "",
        "metadata": [
            
        ],
        "recipient_metadata": [
            {
                "rcpt": "example rcpt",
                "values": [
                    
                ]
            }
        ],
        "attachments": [],
        "images": []
    }
}';

/*$postString = '{
"type":"messages",
"call":"send",
    "key": "mLPSdIFyFEYqQT3MS_WPww",
"message": {
    "html": "this is the emails html content",
    "text": "this is the emails text content",
    "subject": "this is the subject",
    "from_email": "someone@montatulunademiel.com",
    "from_name": "John",
    "to": [
        {
            "email": "victor@aklame.com",
            "name": "Victor"
        }
    ],
    "headers": {

    },
    "track_opens": true,
    "track_clicks": true,
    "auto_text": true,
    "url_strip_qs": true,
    "preserve_recipients": true,

    "merge": true,
    "global_merge_vars": [

    ],
    "merge_vars": [

    ],
    "tags": [

    ],
    "google_analytics_domains": [

    ],
    "google_analytics_campaign": "...",
    "metadata": [

    ],
    "recipient_metadata": [

    ],
    "attachments": [

    ]
},
"async": false
}';*/



$ret = Mandrill::call((array) json_decode($request_json));

print_r($ret);
//print_r(json_decode($request_json));
//echo $request_json;
