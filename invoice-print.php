
<?php include("includes/db.php"); ?>
<?php include("includes/functions.php"); ?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Invoice | Book My Ticket</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

	<!-- Google Fonts CDN -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:400,700" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body onload="window.print();">

    <div class="container">

      <br>
      <hr id="padtopuser">
      <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="container">
            <div class="card">
              <h5 class="card-header" style="background-color: #858585; color: white;">
                <center><strong>TICKET</strong></center>
              </h5>
              <div class="card-block" style="background-color: #f0f0f0;">
                <h4 class="card-title"><i class="fa fa-id-card-o" aria-hidden="true"></i> &nbsp;<b>Book My Ticket</b></h4>
                <hr>
                <div class="row">

                  <div class="col-lg-6">
                    To
                    <address>
                      <address>
                        <strong>Brijesh</strong><br>
                        Chembur, Mumbai<br>
                        Email: brijesh.reddy15@siesgst.ac.in
                      </address>
                    </address>
                  </div>
                
                  <div class="col-lg-6">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <th>#</th>
                          <th>Source</th>
                          <th>Destination</th>
                          <th>Cost</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Tilak Nagar</td>
                            <td>Nerul</td>
                            <td>$20</td>
                          </tr>
                        </tbody>
                      </table>
                      <br>
                    </div>
                  </div>

                </div>
                <hr>

                <p class="" style="font-size: 14px;">With a mission to empower people to experience travel with ease, Book My Ticket invests in digital technology that helps take the friction out of travel.</p>

                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    <hr>
      <footer>
        <p>&copy; Brijesh 2017</p>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
