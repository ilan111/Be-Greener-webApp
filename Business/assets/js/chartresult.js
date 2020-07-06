<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'History Emission Graph'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
        <?php
        $result=mysqli_query($conn,"select invdate from questionare where user='b' and id_pk='".$_SESSION['uid']."' ") or die(mysqli_error($conn));
        $n=1;
        while($row=mysqli_fetch_array($result)){
            if ($n == 1) {
                echo "'".$row['invdate']."'";
                $n=0;
            }
            else{
            echo ",'".$row['invdate']."'";
        }
        }
        ?>
            
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
        data: [
        <?php
        $result=mysqli_query($conn,"select total from questionare where user='b' and id_pk='".$_SESSION['uid']."' ") or die(mysqli_error($conn));
        $n=1;
        while($row=mysqli_fetch_array($result)){
            if ($n == 1) {
                echo $row['total'];
                $n=0;
            }
            else{
            echo ",".$row['total'];
        }
        }
        ?>
        ]

    }]
});
</script>