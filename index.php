<html lang="en">
  <head>
    <title>RIT CIS Ticketing System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body bgcolor="F8F7ED">
    <?php include('http://rit.edu/framework/v0/rit-identitybar.html'); ?>
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
      echo('<table class="table table-bordered">');
      echo('<tr>');
      echo('<th> Name </th>');
      echo('<th> Problem </th>');
      echo('</tr>');
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
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 bg-primary">
          <h1>Submit a New Ticket</h1>
          <form action="newticket.php" method="post">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label>Issue Title</label>
              <input class="form-control" name="subject" placeholder="Issue Title">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" placeholder="Description" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label>Operating System</label>
              <select name="os" class="form-control">
                <option value="Windows">Windows</option>
                <option value="Mac OSX">Mac OSX</option>
                <option value="Linux">Linux</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label>Location</label>
              <input class="form-control" name="location" placeholder="Location"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <footer class="footer">
             <p>© 2015 CIS Student System Administrators</p>
          </footer>
        </div>
      </div>
    </div>
 </body>

</html>
