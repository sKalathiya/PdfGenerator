@props([
'categoryRanking' => [],
])

<div class="p-4">
    <h1 class="text-xl font-bold mb-6">Category Scores</h1>
    <div class="grid grid-rows-* grid-cols-2 gap-4">
    @foreach ($categoryRanking as $category => $data)
        @if($category === "all_ranking_score")
            @continue
        @endif
        <div class="mb-4">
            <label class="block text-gray-700 font-medium capitalize">
                {{ str_replace('_', ' ', $category) }} ({{ $data['result'] }})
            </label>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div
                    class="bg-blue-500 h-4 rounded-full"
                    style="width: {{ $data['percent'] }}%;"
                ></div>
            </div>
            <span class="text-sm text-gray-500">{{ $data['percent'] }}%</span>
        </div>
    @endforeach
    </div>
</div>
