<?php
require 'vendor/autoload.php';
use Freshdesk\Config\Connection,
  Freshdesk\Rest,
  Freshdesk\Ticket,
  Freshdesk\Model\Contact,
  Freshdesk\Model\Ticket as TicketM,
  Freshdesk\Tool\ModelGenerator;

//$url = 'https://APIKEY_LEAVETHEX:X@chester.freshdesk.com';
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
        'description'   => 'Ignore this ticket, it is a test',
        'subject'       => 'API-test',
        'email'         => 'foo@bar.com'
    )
);
//create new ticket, basic example
$t->createNewTicket($model);
