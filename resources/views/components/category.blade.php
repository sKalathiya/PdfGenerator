@props([
'title' => "",
'category' => [],
'color' => ""
])
<style>
    a {
        color: blue;
    }
</style>
@if($category['score']['percent'] !== 0)
    @pageBreak
    <!-- Category Insights -->
    <section>
        <!-- Overall Score -->
        <header class="mb-6 {{$color}} rounded-lg p-6 mt-4 shadow-lg">
            <div class="flex items-center mb-4">
                <!-- Icon before heading -->
                {{$slot}}
                <h1 class="text-2xl font-bold text-white">{{$title}} Overview</h1>
            </div>
            <!-- Overall Score -->
            <div class="flex items-center mb-2">
                <span class="inline-flex items-center px-4 py-2 text-lg font-medium  bg-white  rounded-full shadow-md">
                    {{ $category['score']['result'] }}
                </span>
                <div class="text-md text-gray-100 ml-3">{{ $category['score']['percent'] }}%</div>
            </div>
        </header>

        <!-- Results List -->
        <main class="p-4 mt-4">
            @if(is_array($category['results']))
                @foreach ($category['results'] as $result)
                    <div class="mb-6 p-4 border border-gray-200 rounded-lg break-words page-break-inside-avoid">
                        <h3 class="text-lg font-medium mb-2">{{ $result['title'] }}</h3>
                        <!-- Pass/Fail Status with Icon -->
                        <div class="flex items-center">
                            @if ($result['description'])
                                <x-heroicon-s-check-circle class="h-5 w-5 text-green-500"/>
                                <span class="text-green-500">Passed</span>
                            @else
                                <x-heroicon-s-x-circle class="h-5 w-5 text-red-500"/>
                                <span class="text-red-500">Failed</span>
                            @endif
                        </div>

                        <!-- Recommendation & Business Implication -->
                        <div class="mt-4">
                            <p><strong>Recommendation:</strong> {!! $result['recommendation'] !!}</p>
                            <p class="mt-2"><strong>Business
                                    Implication:</strong> {!! $result['business_Implication'] !!}</p>
                        </div>
                    </div>
                @endforeach
            @endif

        </main>
    </section>
@endif


