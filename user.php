<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      /* Move down content because we have a fixed navbar that is 50px tall */
      body {
        padding-top: 50px;
        padding-bottom: 20px;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HACKPSU Microfinance</a>
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Example row of columns -->
	  <h1 align="center">Donations</h1>
      <div class="row">
<table class="table">
     <!-- <caption>Optional table caption.</caption>-->
      <thead>
        <tr>
          <th>#</th>
          <th>Store</th>
          <th>Cost</th>
          <th>Amount Donated</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Target</td>
          <td>$0.56</td>
          <td>$0.44</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Best Buy</td>
          <td>$0.12</td>
          <td>$0.88</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Amazon</td>
          <td>$0.05</td>
          <td>$0.95</td>
        </tr>
      </tbody>
    </table>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
    <script>
    var id = "<?php echo $_POST['account']; ?>";
    $.ajax({
      url: ("http://api.reimaginebanking.com:80/customers/"+id+"/accounts?key=CUSTa55383bcc13316a92ddf6a123dd4b446"),
      success: function(results){
        var accountid=results[0]["_id"];
        console.log(accountid);
        $.ajax({
          url: ("http://api.reimaginebanking.com:80/accounts/"+accountid+"/bills?key=CUSTa55383bcc13316a92ddf6a123dd4b446"),
          success: function(results){
            console.log(results);
          }
        });
      }
    });
    </script>
  </body>
</html>
