@props([
'data' => [],
])
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Website', 'Score'],
                ['Website',    '{{(float)$data["percent"]}}'],
                ['Websites',    '{{100 - (float)$data["percent"]}}']
            ]);

            var options = {
                pieHole: 0.5,
                pieSliceTextStyle: {
                    color: 'black',
                },
                sliceVisibilityThreshold: '{{100 - (float)$data["percent"]}}',
                legend: 'none'
            };

            var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
            chart.draw(data, options);
        }
    </script>
<div id="donut_single" style="width: 900px; height: 500px;"></div>
