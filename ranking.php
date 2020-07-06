
<!DOCTYPE html>
	<?php include 'assets/inc/header.php';?>
	
	<section id="contactus" class="contact_section wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
		<div class="container">

			<div class="row">
				<div class="col-xs-12">
					<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
		<script src="https://code.highcharts.com/modules/accessibility.js"></script>
					<h2>Company Ranking Graphs</h2>

					<?php
					$result = mysqli_query($conn,"select name,col_1,col_2,col_3,col_4,col_5,col_1+col_2+col_3+col_4+col_5 as 'sum' from chart,b_user where chart.id_pk=b_user.id_pk order by sum desc") or die(mysqli_error($conn));
					$a=1;
					$num = mysqli_num_rows($result);
					$gtotal = 0;
					while($row=mysqli_fetch_array($result)){
						?>


					<!--Chart.php data-->
					

		<figure class="highcharts-figure">
    		<div id="container<?php echo $a; ?>"></div>
    		<p class="highcharts-description">
        		<h4>Monthly Avarage Emission of Co2 : <?php echo $row['sum'] ?></h4>
        
    		</p>
		</figure>

		<!--Chartresult.js data-->
		<script>
Highcharts.chart('container<?php echo $a; ?>', {
    chart: {
        type: 'column'
    },
    title: {
        text: '<?php echo $row['name']; ?> Monthly Avarage Emission Graph'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
        'Electricity',
            'Waste',
            'Feul',
            'Oil',
            'Water'
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Emission (kg CO2e/mo)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
    	name:'Electricity',
        data: [<?php echo $row['col_1'];  ?>]},
        {
        name:'Waste',
        data: [<?php echo $row['col_2'];  ?>]},
        {
        name:'Feul',
        data: [<?php echo $row['col_3'];  ?>]},
        {
        name:'Oil',
        data: [<?php echo $row['col_4'];  ?>]},
        {
        name:'Water',
        data: [<?php echo $row['col_5'];  ?>]
        

    }]
});
</script>
	<?php
	$a++;
	$num--;
					}
					?>
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
				   <h1>Ranking of companies from best to worse in co2 emission</h1>
				   <table class="table table-bordered">
				   	<tr>
				   		<th>Rank</th>
				   	<th>Name</th>
				   	</tr>
				   	<?php
				   	$result = mysqli_query($conn,"select name,col_1+col_2+col_3+col_4+col_5 as 'sum' from chart,b_user where chart.id_pk=b_user.id_pk order by sum asc");
					$n=1;
					$num = mysqli_num_rows($result);
					$gtotal = 0;
				   	while ($row=mysqli_fetch_array($result)) {
				   		echo "<tr>";
				   		echo "<td>$n</td>";
				   		$n++;
				   		echo "<td>".$row['name']."</td>";
				   		echo "</tr>";
				   	}
				   	?>
				   </table>

				   
				</div>
			</div>
		</div>
	</section>	
	
	<?php include 'assets/inc/footer.php';?>