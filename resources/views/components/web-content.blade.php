@props([
'data' => []
])

<script type="text/javascript">

    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Contents', 'Percent'],
                @foreach($data as $d)
                    ['{{$d["title"]}}' , {{(float)rtrim($d["percent"])}}],
                @endforeach
        ]);

        var options = {
            title: 'Web Contents',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
<div class="flex flex-row gap-2 items-center">
    <div id="piechart" style="width: 600px; height: 400px;" class="flex-1" ></div>
    <div class="p-4 flex flex-col items-start gap-2">
        @foreach($data as $d)
            <div class="inline-flex gap-2 p-2 bg-gray-100 rounded-lg items-center w-full justify-between">
                <p class="font-semibold">{{ucfirst($d["title"])}}</p>
                <p class="text-sm">{{$d["storage"]}}</p>
            </div>
        @endforeach
    </div>
</div>



