<x-app-layout>
    <div
        class="h-[calc(100dvh-4rem-1px)] flex flex-col items-center p-6 overflow-hidden bg-gradient-to-br from-sky-300 to-cyan-100">

        <h2 class="text-4xl font-bold mb-6 text-[#014f59] shrink-0">
            Leaderboard
        </h2>

        @if(count($scores) > 0)
            <ol
                class="w-full max-w-md flex-1 bg-white/90 rounded-xl shadow-lg overflow-y-auto"
                style="
                    scrollbar-width: none;
                    -ms-overflow-style: none;
                "
            >
                @foreach($scores as $score)
                    <li class="flex justify-between px-6 py-4 border-b border-sky-100 font-semibold text-[#026e85]">
                        <span>{{ $score->name }}</span>
                        <span>{{ $score->score }} pts</span>
                    </li>
                @endforeach
            </ol>

            <style>
                ol::-webkit-scrollbar {
                    display: none;
                }
            </style>
        @else
            <p class="text-xl text-[#026e85] italic">
                No scores yet. Be the first to play!
            </p>
        @endif

    </div>
</x-app-layout>
