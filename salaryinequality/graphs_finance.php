<head>
  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <title>Placeholder.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>

  <!-- navigation panel -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="background-color:#2e8ece ; font-family:Courier New; font-size:24px; font-weight:550; color:white"  href="#">placeholder.</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
         <!-- <li><a href="#statistics">Statistics</a></li>-->
	  <!-- <li><a href="#services">Services</a></li>-->
	  <!-- <li><a href="#information">Information</a></li>-->
         <!-- <li><a href="#google_map">Contact</a></li>-->
	  <!-- <li><a href="http://www.script-tutorials.com/bootstrap-one-page-template-with-parallax-effect/">Back to tutorial</a></li>-->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<?php 
$dbconn3 = pg_connect("host=localhost dbname=hack user=s_hack password=s_hack");
$alloccupations = pg_query($dbconn3, "SELECT occupation  FROM survey_data_years");
$sal_men_2009 = pg_query($dbconn3, "select sum(y2009) as sal_sum, count(*) as total_no , sum(y2009)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers' and sex='men'");

$sal_women_2009 = pg_query($dbconn3, "select sum(y2009) as sal_sum, count(*) as total_no , sum(y2009)/count(*) as average_sal  from survey_data_years where occupation=  E'1231 Finance and administration managers' and sex='women'");

$sal_men_2009 = pg_query($dbconn3, "select sum(y2009) as sal_sum, count(*) as total_no , sum(y2009)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers'and sex='men'");

$sal_women_2010 = pg_query($dbconn3, "select sum(y2010) as sal_sum, count(*) as total_no , sum(y2010)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers'and sex='women'");


$sal_men_2010 = pg_query($dbconn3, "select sum(y2010) as sal_sum, count(*) as total_no , sum(y2010)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers'and sex='men'");

$sal_women_2011 = pg_query($dbconn3, "select sum(y2011) as sal_sum, count(*) as total_no , sum(y2011)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers' and sex='women'");


$sal_men_2011 = pg_query($dbconn3, "select sum(y2011) as sal_sum, count(*) as total_no , sum(y2011)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers'and sex='men'");

$sal_women_2012 = pg_query($dbconn3, "select sum(y2012) as sal_sum, count(*) as total_no , sum(y2012)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers'and sex='women'");


$sal_men_2012 = pg_query($dbconn3, "select sum(y2012) as sal_sum, count(*) as total_no , sum(y2012)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers'and sex='men'");

$sal_women_2013 = pg_query($dbconn3, "select sum(y2013) as sal_sum, count(*) as total_no , sum(y2013)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers'and sex='women'");

$sal_men_2013 = pg_query($dbconn3, "select sum(y2013) as sal_sum, count(*) as total_no , sum(y2013)/count(*) as average_sal  from survey_data_years where occupation= E'1231 Finance and administration managers'and sex='men'");



$salmen_2009 = pg_fetch_all($sal_men_2009);
$salwomen_2009 = pg_fetch_all($sal_women_2009); 
$salmen_2010 = pg_fetch_all($sal_men_2010);
$salwomen_2010 = pg_fetch_all($sal_women_2010); 
$salmen_2011 = pg_fetch_all($sal_men_2011);
$salwomen_2011 = pg_fetch_all($sal_women_2011); 
$salmen_2012 = pg_fetch_all($sal_men_2012);
$salwomen_2012 = pg_fetch_all($sal_women_2012); 
$salmen_2013 = pg_fetch_all($sal_men_2013);
$salwomen_2013 = pg_fetch_all($sal_women_2013); 

//$dbconn3->close();
print_r($salwomen);
	print(Date("l F d, Y")); 

$data_array_men = array();
$data_array_women = array();
$data_array_men[2009] = $salmen_2009[0]["average_sal"]; 
$data_array_women[2009] = $salwomen_2009[0]["average_sal"]; 
$data_array_men[2010] = $salmen_2010[0]["average_sal"]; 
$data_array_women[2010] = $salwomen_2010[0]["average_sal"]; 
$data_array_men[2011] = $salmen_2011[0]["average_sal"]; 
$data_array_women[2011] = $salwomen_2011[0]["average_sal"]; 
$data_array_men[2012] = $salmen_2012[0]["average_sal"]; 
$data_array_women[2012] = $salwomen_2012[0]["average_sal"]; 
$data_array_men[2013] = $salmen_2013[0]["average_sal"]; 
$data_array_women[2013] = $salwomen_2013[0]["average_sal"]; 

print_r($data_array_men);


?>
<script language="JavaScript" type="text/javascript" src="/js/jquery-1.10.2.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<style>

#container1 {
    height: 400px;
    top-margin: 100px;	 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}

</style>

<div id="container1" style="height: 70%;margin-top: 100px"></div>


<script>
$(function () {
    $('#container1').highcharts({

        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                viewDistance: 25,
                depth: 40
            },
            marginTop: 80,
            marginRight: 40
        },

        title: { 
		text: 'Salary difference for men and women: Finance and administrative managers'
        },

        xAxis: {
            categories: ['2009', '2010', '2011', '2012', '2013']
        },

        yAxis: {
            allowDecimals: true,
            min: 0,
            title: {
                text: 'Salary(SEK/month)'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
        },

        plotOptions: {
            column: {
                stacking: 'normal',
                depth: 40
            }
        },

        series: [{
            name: 'Male',
	    data: [<?php print $data_array_men[2009]; ?>,<?php print $data_array_men[2010]; ?>,<?php print $data_array_men[2011]; ?>,<?php print $data_array_men[2012]; ?>,<?php print $data_array_men[2013]; ?>],//[5, 3, 4, 7, 2],
            stack: 'male'
        }, {
            name: 'Female',
            data:[ <?php print $data_array_women[2009]; ?>, <?php print $data_array_women[2010]; ?>, <?php print $data_array_women[2011]; ?>, <?php print $data_array_women[2012]; ?>, <?php print $data_array_women[2013]; ?>], //[3, 4, 4, 2, 5],
            stack: 'Female'
        }
        ]
    });
});

</script>
</body>

