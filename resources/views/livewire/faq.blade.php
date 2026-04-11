<div class=" max-w-6xl mx-auto my-5 flex flex-col gap-4">
    <h1 class="text-5xl font-bold text-brand">FAQ<h1>
        @foreach ($questions as $q)
        <div class=" p-4 flex flex-col justify-center border-b border-gray-300">
            <h1 class=" text-4xl font-bold">{{ $q[0] }}</h1>
            <h1 class=" text-xl font-bold">{{ $q[1] }}</h1>
        </div>
        @endforeach
  
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
