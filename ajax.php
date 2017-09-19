<?php

$post = array(
    'authToken' => 'VIP-API-CODE-HERE',
    'labelType' => 'domestic',
    'mailClass' => $_REQUEST['mailtype'],
    'weightOz' => $_REQUEST['weightOz'],
    'description' => 'TYPE-OF-PRODUCTS-SOLD',
    'sender' =>
        array(
            'firstName' => 'FROM-FIRST-NAME',
            'lastName' => 'FROM-LAST-NAME',
	          'company' => 'COMPANY-NAME',
            'streetAddress' => 'COMPANY-ADDRESS',
            'city' => 'COMPANY-CITY',
            'state' => 'COMPANY-STATE',
            'postalCode' => 'COMPANY-ZIP'
        ),
    'recipient' =>
        array(
            'state' => ConvertState($_REQUEST['state']),
            'firstName' => $_REQUEST['firstname'],
            'lastName' => $_REQUEST['lastname'],
            'streetAddress' => $_REQUEST['streetAddress'],
            'city' => $_REQUEST['city'],
            'postalCode' => $_REQUEST['postalCode']

        ),
);
function ConvertState($input){
    $states = array(
        'Alabama'=>'AL',
        'Alaska'=>'AK',
        'Arizona'=>'AZ',
        'Arkansas'=>'AR',
        'California'=>'CA',
        'Colorado'=>'CO',
        'Connecticut'=>'CT',
        'Delaware'=>'DE',
        'Florida'=>'FL',
        'Georgia'=>'GA',
        'Hawaii'=>'HI',
        'Idaho'=>'ID',
        'Illinois'=>'IL',
        'Indiana'=>'IN',
        'Iowa'=>'IA',
        'Kansas'=>'KS',
        'Kentucky'=>'KY',
        'Louisiana'=>'LA',
        'Maine'=>'ME',
        'Maryland'=>'MD',
        'Massachusetts'=>'MA',
        'Michigan'=>'MI',
        'Minnesota'=>'MN',
        'Mississippi'=>'MS',
        'Missouri'=>'MO',
        'Montana'=>'MT',
        'Nebraska'=>'NE',
        'Nevada'=>'NV',
        'New Hampshire'=>'NH',
        'New Jersey'=>'NJ',
        'New Mexico'=>'NM',
        'New York'=>'NY',
        'North Carolina'=>'NC',
        'North Dakota'=>'ND',
        'Ohio'=>'OH',
        'Oklahoma'=>'OK',
        'Oregon'=>'OR',
        'Pennsylvania'=>'PA',
        'Rhode Island'=>'RI',
        'South Carolina'=>'SC',
        'South Dakota'=>'SD',
        'Tennessee'=>'TN',
        'Texas'=>'TX',
        'Utah'=>'UT',
        'Vermont'=>'VT',
        'Virginia'=>'VA',
        'Washington'=>'WA',
        'West Virginia'=>'WV',
        'Wisconsin'=>'WI',
        'Wyoming'=>'WY'
    );
    return $states[$input];
}
include_once('../../config/config.inc.php');
include_once('../../init.php');


//API Url (You can also set this to the test/dev api url)
//$url = 'https://vipparcel.com/api/v1/shipping/label/print'; #PROD
$url = 'https://vipparcel.com/api-test/v1/shipping/label/print'; #testing

//Initiate cURL.
$ch = curl_init($url);
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);
echo $result;
?>
