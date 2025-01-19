@props([
'data' => [],
'categories' => []
])
<div class="p-4">
    <h1 class="text-xl font-bold mb-4">Results</h1>

    @php
        $colors = ['bg-green-500', 'bg-yellow-500', 'bg-red-500']; // Colors for Passed, Warning, Failed
        $total = array_sum($data);
    @endphp

    @foreach ($data as $index => $value)
        <div class="mb-4 w-full">
            <label class="block text-gray-700 font-medium capitalize">
                {{ str_replace('_', ' ', $categories[$index]) }} ({{ $value }})
            </label>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div
                    class="{{ $colors[$index] }} h-4 rounded-full"
                    style="width: {{ $total > 0 ? ($value / $total) * 100 : 0 }}%;"
                ></div>
            </div>
            <span class="text-sm text-gray-500">{{ round(($value / $total) * 100, 1) }}%</span>
        </div>
    @endforeach

</div>
