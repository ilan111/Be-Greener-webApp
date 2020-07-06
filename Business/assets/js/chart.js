<?php
$result = mysqli_query($conn,"select name,col_1,col_2,col_3,col_4,col_5,col_1+col_2+col_3+col_4+col_5 as 'sum' from chart,b_user where chart.id_pk=b_user.id_pk and chart.id_pk='".$_SESSION['uid']."' order by sum desc") or die(mysqli_error($conn));
$row=mysqli_fetch_array($result);
?>
<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: '<?php echo $row['name']; ?>Monthly Average Consumption'
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
        data: [<?php echo $row['col_5'];  ?>]}


        ]
});
</script>