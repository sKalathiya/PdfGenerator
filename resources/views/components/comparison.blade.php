@props([
'comparisonScore' => [],
])
    <div class="p-4">
        <!-- Google Chart -->
        <div id="comparisonChart" class="mb-6" style="width: 900px; height: 500px;"></div>

        <!-- Differences and Praise -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Category Score Feedback</h2>
            <ul class="list-disc pl-6">
                @foreach ($comparisonScore['difference'] as $difference)
                    <li class="flex items-center space-x-4 mb-4">
                        @if ($difference['average'] === 'above' && $difference['topAverageScore'] === 'above')
                            <!-- Trophy Icon -->
                            <x-heroicon-s-trophy class="h-5 w-5 text-green-500" />
                            <span>
                            <strong>{{ $difference['category'] }}</strong>: Great job! You performed above the average and top average scores.
                        </span>
                        @elseif ($difference['average'] === 'above' && $difference['topAverageScore'] === 'below')
                            <!-- Thumbs Up Icon -->
                            <x-heroicon-s-hand-thumb-up class="h-5 w-5 text-blue-500" />
                            <span>
                            <strong>{{ $difference['category'] }}</strong>: Well done! You're above the average but there's room to match top performers.
                        </span>
                        @elseif ($difference['average'] === 'below' && $difference['topAverageScore'] === 'below')
                            <!-- Exclamation Icon -->
                            <x-heroicon-s-exclamation-circle class="h-5 w-5 text-yellow-500" />
                            <span>
                            <strong>{{ $difference['category'] }}</strong>: Consider focusing on this area to improve both the average and top average benchmarks.
                        </span>
                        @elseif ($difference['average'] === 'below' && $difference['topAverageScore'] === 'above')
                            <!-- Warning Icon -->
                            <x-heroicon-s-exclamation-triangle class="h-5 w-5 text-red-500" />
                            <span>
                            <strong>{{ $difference['category'] }}</strong>: You're behind both the average and top scores. Prioritize this for improvement.
                        </span>
                        @elseif ($difference['average'] === 'above' && $difference['topAverageScore'] === 'equal')
                            <!-- Star Icon -->
                            <x-heroicon-s-star class="h-5 w-5 text-green-500" />
                            <span>
                            <strong>{{ $difference['category'] }}</strong>: Nice! You're above average and matching the top scores.
                        </span>
                        @elseif ($difference['average'] === 'equal' && $difference['topAverageScore'] === 'equal')
                            <!-- Badge Icon -->
                            <x-heroicon-s-check-badge class="h-5 w-5 text-purple-500" />
                            <span>
                            <strong>{{ $difference['category'] }}</strong>: You're performing equally with the top scores. Maintain this level!
                        </span>
                        @else
                            <!-- Question Mark Icon -->
                            <x-heroicon-s-question-mark-circle class="h-5 w-5 text-gray-500" />
                            <span>
                            <strong>{{ $difference['category'] }}</strong>: Mixed results. Check details for better understanding.
                        </span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        // Load Google Charts
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Data preparation
            const data = google.visualization.arrayToDataTable([
                ['Category', 'Actual Score', 'Average Score', 'Top Average Score'],
                    @foreach ($comparisonScore['dataset'] as $index => $category)
                [
                    "{{ $category }}",
                    {{ $comparisonScore['actualScore'][$index] }},
                    {{ $comparisonScore['averageScore'][$index] }},
                    {{ $comparisonScore['topAverageScore'][$index] }}
                ],
                @endforeach
            ]);

            // Chart options
            const options = {
                title: 'Comparison of Scores Across Categories',
                hAxis: {title: 'Categories'},
                vAxis: {title: 'Score'},
                legend: {position: 'top'},
                colors: ['#4285F4', '#FBBC05', '#34A853']
            };

            // Draw the chart
            const chart = new google.visualization.ColumnChart(document.getElementById('comparisonChart'));
            chart.draw(data, options);
        }
    </script>

