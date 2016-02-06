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
$sal_men = pg_query($dbconn3, "select sum(y2010) as sal_sum, count(*) as total_no , sum(y2009)/count(*) as average_sal  from survey_data_years where occupation= E'1110 Legislators and senior government officials'and sex='men'");

$sal_women = pg_query($dbconn3, "select sum(y2010) as sal_sum, count(*) as total_no , sum(y2009)/count(*) as average_sal  from survey_data_years where occupation= E'1110 Legislators and senior government officials'and sex='women'");


$salmen = pg_fetch_all($sal_men); 
$salwomen = pg_fetch_all($sal_women); 

//$dbconn3->close();
print_r($salwomen);
	print(Date("l F d, Y")); 


?>
<script language="JavaScript" type="text/javascript" src="/js/jquery-1.10.2.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<style>

#container1 {
    height: 400px; 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}

</style>

<div id="container1" style="height: 400px"></div>



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
            text: 'Total fruit consumption, grouped by gender'
        },

        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Number of fruits'
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
            name: 'John',
            data: [5, 3, 4, 7, 2],
            stack: 'male'
        }, {
            name: 'Joe',
            data: [3, 4, 4, 2, 5],
            stack: 'male'
        }, {
            name: 'Jane',
            data: [2, 5, 6, 2, 1],
            stack: 'female'
        }, {
            name: 'Janet',
            data: [3, 0, 4, 4, 3],
            stack: 'female'
        }]
    });
});

</script>
</body>

