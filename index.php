<html lang="en">
  <head>
    <title>RIT CIS Ticketing System</title>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body bgcolor="F8F7ED">
    <?php include('http://rit.edu/framework/v0/rit-identitybar.html'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color: rgb(243,110,33);color: white;margin-top: 50pt;">

          <h1>Submit a New Ticket</h1>
          <form id="ticket-form">
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
            <div class="row">
              <div class="col-md-6">
                <button id="submit" class="btn btn-default">Submit</button>
              </div>
              <div class="col-md-6 text-right">
                <a href="opentickets.php" role="button" class="btn btn-default">View Open Tickets</a>
              </div>
            </div>
          </form>

          <!-- Modal -->
          <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Ticket Submitted</h4>
                </div>
                <div class="modal-body">
                  The ticket has successfully been submitted!
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <footer class="footer">
             <p>© 2015 CIS Student System Administrators</p>
          </footer>

          <script type="text/javascript">
            $(document).ready(function(){
              $("#submit").click(function(){
                console.log("Did I get here?")
              // $.ajax({
              //   type: 'POST',
              //   url: "newticket.php",
              //   data: $('#ticket-form').serialize(),
              //   success: function(response) {
              //     console.log("Submitted ticket!");
              //     $('#successModal').modal(show);
              //   },
              //   error: function() {
              //     alert("There was an error submitting the ticket");
              //   }
              //  });
             });
           });
          </script>
        </div>
      </div>
    </div>
 </body>

</html>
