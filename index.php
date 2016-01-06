<html>
  <head>
    <title>RIT CIS Ticketing System</title>
  </head>
  <body>
    <form action="newticket.php" method="post">
      <p>Name: <input type="text" name="name" /></p>
      <p>Problem: <input type="text" name="problem" /></p>
      <p><input type="submit" /></p>
    </form>

    Current Open Tickets:
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
        $fd = new Rest($conf);
        $tckts = $fd->getAllTickets(0, 'new_and_my_open');
        echo('<table>');
        foreach ($tckts as &$tckt) {
          $requester = $tckt->requester_name;
          $desc = $tckt->description;
          $title = $tckt->subject;
          echo('<tr>');
          echo('<td>' . $requester . '</td>');
          echo('<td>' . $title . '</td>');
          echo('</tr>');
        }
        echo('</table>');
      ?>
 </body>
</html>
