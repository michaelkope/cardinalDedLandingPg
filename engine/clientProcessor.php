<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/* Capture the return from the form */
$post_inputs = $_POST;

/*  
 * How to build your data to send it to your database 
 *
 */

/* Created the array to be sent */
$group_inputs = array();

/* Start Building the Array and filling it with data */
// Client needs to always be the name of the client you have stored in the database
$group_inputs['client'] = 'Roadrunner Transportation';
$group_inputs['ClientEmail'] = 'mkope@appvault.com';
//$group_inputs['ClientEmail'] = 'liwilson@jptinc.net';


/* This is based off the form you create */
$group_inputs['firstname'] = (empty($post_inputs['firstname']) ? '': $post_inputs['firstname']);
$group_inputs['lastname'] = (empty($post_inputs['lastname']) ? '': $post_inputs['lastname']);
$group_inputs['email'] = (empty($post_inputs['email']) ? '': $post_inputs['email']);
$group_inputs['phone'] = (empty($post_inputs['phone']) ? '': $post_inputs['phone']);
$group_inputs['zip'] = (empty($post_inputs['zip']) ? '': $post_inputs['zip']);
$group_inputs['address'] = (empty($post_inputs['address']) ? '': $post_inputs['address']);
$group_inputs['city'] = (empty($post_inputs['city']) ? '': $post_inputs['city']);
$group_inputs['state'] = (empty($post_inputs['state']) ? '': $post_inputs['state']);


/* This input is being set based on the XML client relations creates  */ 
$group_inputs['dob'] = (empty($_SESSION['dateofbirth']) ? '': $_SESSION['dateofbirth']);
$group_inputs['affix'] = (empty($_SESSION['Affix']) ? '': $_SESSION['Affix']);
$group_inputs['municipality'] = (empty($_SESSION['Municipality']) ? '': $_SESSION['Municipality']);
$group_inputs['region'] = (empty($_SESSION['Region']) ? '': $_SESSION['Region']);
$group_inputs['http_referer'] = (empty($_SESSION['HTTP_REFERER']) ? '': $_SESSION['HTTP_REFERER']);
$group_inputs['zal'] = (empty($post_inputs['zal']) ? '': $post_inputs['zal']);
$group_inputs['utm_campaign'] = (empty($post_inputs['utm_campaign']) ? '': $post_inputs['utm_campaign']);


/* Job fields only */
$group_inputs['position'] = (empty($post_inputs['position']) ? '': $post_inputs['position']);
$group_inputs['experience'] = (empty($post_inputs['experience']) ? '': $post_inputs['experience']);
$group_inputs['interest'] = (empty($post_inputs['interest']) ? '': $post_inputs['interest']);
$group_inputs['cdl'] = (empty($post_inputs['cdl']) ? '': $post_inputs['cdl']);

/* If we are sending an email, format the email message here*/
$group_inputs['message'] = 'From Roadrunner Short Form:
					
					<table>
					
						<tr>
							<td>First Name</td>
							<td> = </td>
							<td>'.$_REQUEST['firstname'].'</td>
						</tr>

						<tr>
							<td>Last Name</td>
							<td> = </td>
							<td>'.$_REQUEST['lastname'].'</td>
						</tr>

						<tr>
							<td>Email</td>
							<td> = </td>
							<td>'.$_REQUEST['email'].'</td>
						</tr>

						<tr>
							<td>Phone</td>
							<td> = </td>
							<td>'.$_REQUEST['phone'].'</td>
						</tr>

						<tr>
							<td>Address</td>
							<td> = </td>
							<td>'.$_REQUEST['address'].'</td>
						</tr>

						<tr>
							<td>City</td>
							<td> = </td>
							<td>'.$_REQUEST['city'].'</td>
						</tr>

						<tr>
							<td>Zip Code</td>
							<td> = </td>
							<td>'.$_REQUEST['zip'].'</td>
						</tr>

						<tr>
							<td>Home State</td>
							<td> = </td>
							<td>'.$_REQUEST['state'].'</td>
						</tr>
                        
                        <tr>
							<td>Position</td>
							<td> = </td>
							<td>'.$_REQUEST['position'].'</td>
						</tr>
                        
                        <tr>
							<td>Experience</td>
							<td> = </td>
							<td>'.$_REQUEST['experience'].'</td>
						</tr>
                        
						<tr>
							<td>Interest</td>
							<td> = </td>
							<td>'.$_REQUEST['interest'].'</td>
						</tr>

						<tr>
							<td>Media Code</td>
							<td> = </td>
							<td>'.$_REQUEST['zal'].'</td>
						</tr>
							<tr>
							<td>Campaign</td>
							<td> = </td>
							<td>'.$_REQUEST['utm_campaign'].'</td>
						</tr>
						
						
						
					 </table>';

// This will change if you want the process file to send data to your client.
$group_inputs['send_info'] = '2'; // 0 means NO and 1 means YES and 2 means EMAIL and 3 means EMAIL AND CLIENT

// TESTING TO SEE WHAT DATA WAS CAPTURED
/*
print_r($_POST);
exit;


/*
print_r($group_inputs);
exit;
*/

//Create a connection
//$url = 'http://group.localhost/group1201/engine/dbProcessor.php';
$url = 'http://staging.group1201.com/group1201/engine/dbProcessor.php';
$ch = curl_init($url);

# Form data string
$postString = http_build_query($group_inputs, '', '&');

# Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

# Get the response
$response = curl_exec($ch);
curl_close($ch);

//exit;

/*
 * This is the end of sending your data to your database.
 */

	// Redirect user to the thank you page
	//
	header( 'Location: ../thankyou-copy.php?SF=' . $_REQUEST['zal'] . '_' . $_REQUEST['utm_campaign']);

?>