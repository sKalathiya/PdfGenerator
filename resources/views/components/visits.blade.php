@props([
'data' => []
])

<script type="text/javascript">
    google.charts.load("current", {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        let rawData = @json($data);
        let chartData = [];

        for (let i = 0; i < rawData["data"].length; i++) {
            if (rawData["data"][i] !== "Missing") {
                chartData.push({
                    date: new Date(rawData["date"][i]), // Convert string to Date
                    grade: parseFloat(rawData["data"][i])
                });
            }
        }

        // Sort data by date
        chartData.sort((a, b) => a.date - b.date);

        // Prepare data for Google Charts
        let formattedData = [["Date", "Monthly Visit"]];
        chartData.forEach(item => {
            formattedData.push([item.date, item.grade]);
        });
        var data = google.visualization.arrayToDataTable(
            formattedData
        );

        var view = new google.visualization.DataView(data);

        var options = {
            title: "Comparison of Monthly Visits over Months",
            hAxis: {title: 'Date'},
            vAxis: {title: 'Monthly Visits'},
            legend: {position: 'top'},
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values_visits"));
        chart.draw(view, options);
    }
</script>
<div id="columnchart_values_visits" style="width: 900px; height: 300px;" ></div>
