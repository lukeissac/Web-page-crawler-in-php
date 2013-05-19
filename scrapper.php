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
        <p class="lead"> The Developer email id of top 20 apps are as follows: </p>
<?php
	error_reporting(E_ERROR | E_PARSE);
	require('lib.php');
	if($_POST)
	{
		$crnturl="https://play.google.com/store/apps/collection/".$_POST['optionsRadios'];
	}
	
	function getLevelonelinks($url)
	{
		$flag=0;
		$linkarray= array();				
		$html = file_get_html($url);	
                
		foreach($html->find(".thumbnail-wrapper a[href]") as $e)
		$linkarray[]=$e->href;
		$emails[] = array();
		foreach($linkarray as $val)
		{
			$html2 = file_get_html("https://play.google.com".$val);
			foreach($html2->find("a[href^=mailto]") as $f)
			{
				if(!($flag%2) == 0 )
				$emails[] = $f->href;
				$flag++;
			}
		}
                return $emails;	
	}

	$links1=getLevelonelinks($crnturl);
        for($i=1;$i<=20;$i++){
            echo substr($links1[$i],7);
            echo '<br/>';
        }
        
        
//	$linkstring1 = implode("\n", $links1);
//	echo '<pre>';
//	print_r($linkstring1);
//	echo '</pre>';

	//file_put_contents('repositorylevel1.txt', $linkstring1);
?>
	
        
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

