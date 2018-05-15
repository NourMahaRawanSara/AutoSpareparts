<html>
<head>

    <script type="text/javascript" src="../../source/bootstrap-3.3.6-dist/js/jquery.js"></script>

<body>
<!--Table and divs that hold the pie charts-->
<table class="columns">
    <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
    </tr>
</table>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    var id_array=[], totalarray=[],arrayz=[[]];
    $.ajax({
        url: "calc_stat.php",
        method: "POST",
        data: {
        },
        success: function (answer) {
            alert(answer);
            var data = answer.split("%%");
            while(arrayz.push([])< data.length-1);
            for(var i =0;i<data.length-1;i++) // de hatmshy 3ala 3adad el nas ely 3andna
            {
                // alert(data[i]);
                var data2= data[i].split("~"); // hena hadfsel el id 3an el se3er
                arrayz[i][0]=data2[0];
                arrayz[i][1]=data2[1];
            }
            for(var j=0;j<arrayz.length;j++)
            {
                arrayz[j][1]=parseInt(arrayz[j][1]);
            }
            console.error(arrayz);
        }
    });
    // Load Charts and the corechart and barchart packages.
    google.charts.load('current', {'packages':['corechart']});
    // Draw the pie chart and bar chart when Charts is loaded.
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows(arrayz);
        var piechart_options = {title:'',
            width:400,
            height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);
        var barchart_options = {title:'sum of bills for each user',
            width:900,
            height:450,
            legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
    }
</script>
</body>
</html>