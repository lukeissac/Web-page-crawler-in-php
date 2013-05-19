<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sticky footer &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }

    </style>
  
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Google Store Scrapper</h1>
        </div>
        <p class="lead">Select the type of Android app below: </p>
	<form action="./scrapper.php" method="post">
		<label class="radio">
			<input type="radio" name="optionsRadios" id="optionsRadios1" value="topselling_paid" checked>
			Top Paid
		</label>
		<label class="radio">
			<input type="radio" name="optionsRadios" id="optionsRadios2" value="topselling_free">
			Top Free
		</label>
		<label class="radio">
			<input type="radio" name="optionsRadios" id="optionsRadios3" value="topgrossing">
			Top Grossing
		</label>
		<label class="radio">
			<input type="radio" name="optionsRadios" id="optionsRadios4" value="topselling_new_paid">
			Top New Paid
		</label>
		<label class="radio">
			<input type="radio" name="optionsRadios" id="optionsRadios5" value="topselling_new_free">
			Top New Free
		</label>
		<button type="submit" class="btn"> Get Information </button>

	</form>
	
        
     </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit"> copyright@abc123 </p>
      </div>
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
  </body>
</html>

