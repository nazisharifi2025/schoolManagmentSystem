<div class="max-w-6xl mx-auto mt-10 justify-center items-center space-y-4 grid grid-cols-2 gap-6">
    <div>
        <image src="/images/FAQs-pana.svg" alt="FAQ Image" class="w-full h-auto rounded-lg shadow-md">
    </div>
    <div class="flex flex-col space-y-4">
        <h1 class="text-5xl  font-bold text-brand">FAQ</h1>
    @foreach($questions as $index => $q)
        <div class="border-b">

            <!-- سوال -->
            <button 
                wire:click="toggle({{ $index }})"
                class="w-full text-left p-4 font-bold flex justify-between "
            >
                {{ $q['question'] }}

                <span>
                    @if ($q['open'])
                        <i class="fas fa-chevron-up"></i>
                    @else
                        <i class="fas fa-chevron-down"></i>
                    @endif
                </span>
            </button>

            <!-- جواب -->
            @if($q['open'])
                <div class="my-3 border-l-4 border-brand px-3 h-12 flex items-center text-gray-600">
                    {{ $q['answer'] }}
                </div>
            @endif

        </div>
    @endforeach
    </div>
</div>