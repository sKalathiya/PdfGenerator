@props([
'data' => [],
'title' => "s",
])

<script type="text/javascript">

    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['{{$title}}', 'Data'],
                @for($x = 0 ; $x < count($data["categories"]) ; $x++)
            ['{{$data["categories"][$x]}}' , {{$data["data"][$x]}}],
            @endfor
        ]);
        var options = {
            legend: { position: 'top' }, // Move legend to the top
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart{{$data["categories"][0]}}'));

        chart.draw(data, options);
    }
</script>
<div id="piechart{{$data["categories"][0]}}" style="width: 600px; height: 400px;"></div>


