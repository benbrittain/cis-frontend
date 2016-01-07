<?php
require 'vendor/autoload.php';
include 'config.php';

use Freshdesk\Config\Connection,
  Freshdesk\Rest,
  Freshdesk\Ticket,
  Freshdesk\Model\Contact,
  Freshdesk\Model\Ticket as TicketM,
  Freshdesk\Tool\ModelGenerator;

$url = 'https://' . $KEY . ':X@chester.freshdesk.com';
$conf = new Connection($url);

//basic/general rest calls
$fd = new Rest($conf);
//get ticket, this call will be removed from Rest class & moved to Ticket class
//$json = $fd->getSingleTicket(1701);
//print_r($json);
//for ticket-calls:
$t = new Ticket($conf);
//create new ticket
$model = new TicketM(
    array(
        'description'   => 'Operating System: '.$_POST['os']."\n"
                           .'Location: '.$_POST['location']."\n\n"
                           .$_POST['description'],
        'subject'       => $_POST['subject'],
        'email'         => $_POST['email']
    )
);
//create new ticket, basic example
$t->createNewTicket($model);
?>

<html>
  <head>
    <title>RIT CIS Ticketing System</title>
  </head>
  <body>
    <p>Thanks for the ticket.</p>
 </body>
</html>
