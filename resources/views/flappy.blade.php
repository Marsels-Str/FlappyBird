<x-app-layout>
    <div class="h-[calc(100dvh-4rem-1px)] overflow-hidden bg-gradient-to-br from-sky-300 to-cyan-100 flex items-center justify-center">

        <div class="relative w-full max-w-5xl flex justify-center">

            <canvas
                id="flappyBird"
                width="650"
                height="700"
                class="bg-[#70c5ce] rounded-xl shadow-2xl w-full max-w-[650px] h-auto touch-manipulation"
            ></canvas>

            <div id="startScreen"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white border-2 border-gray-700 rounded-xl p-6 text-center shadow-2xl z-50 w-[90%] max-w-sm">

                <h2 class="text-2xl font-bold mb-4">Flappy Bird</h2>

                <label for="birdSkinSelector" class="block mb-2">
                    Choose your Skin:
                </label>

                <select
                    id="birdSkinSelector"
                    class="w-full border rounded p-2 mb-4"
                >
                    <option value="/images/Yellow-Flappy-Bird.png">Classic</option>
                    <option value="/images/Red-Flappy-Bird.png">Red Bird</option>
                    <option value="/images/Blue-Flappy-Bird.png">Blue Bird</option>
                    <option value="/images/Green-Flappy-Bird.png">Green Bird</option>
                </select>

                <p class="mb-4">Click Start to Play!</p>

                <div class="flex gap-3 justify-center">
                    <button
                        onclick="startGame()"
                        class="px-5 py-2 bg-cyan-500 hover:bg-cyan-600 text-white rounded"
                    >
                        Start
                    </button>
                </div>
            </div>

            <div id="gameOverPopup"
                class="hidden absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white border-2 border-gray-700 rounded-xl p-6 text-center shadow-2xl z-50 w-[90%] max-w-sm">

                <h2 class="text-2xl font-bold mb-4">
                    Game Over
                </h2>

                <p id="finalScore" class="mb-4"></p>

                <div class="flex gap-3 justify-center">
                    <button
                        onclick="restartGame()"
                        class="px-5 py-2 bg-cyan-500 hover:bg-cyan-600 text-white rounded"
                    >
                        Restart
                    </button>

                    <button
                        onclick="goBackToStart()"
                        class="px-5 py-2 bg-slate-500 hover:bg-slate-600 text-white rounded"
                    >
                        Back
                    </button>
                </div>
            </div>

            <div id="saveScorePopup"
                class="hidden absolute top-[30%] left-1/2 -translate-x-1/2 bg-white border-2 border-black rounded-xl p-6 shadow-2xl z-50 w-[90%] max-w-sm">

                <h3 class="text-xl font-bold mb-3">
                    Save Your Score
                </h3>

                <p class="mb-3">
                    Your Score:
                    <span id="popupScoreDisplay"></span>
                </p>

                <input
                    type="text"
                    id="playerNameInput"
                    placeholder="Enter your name"
                    class="w-full border rounded p-2 mb-3"
                >

                <div class="flex gap-3 justify-center">
                    <button
                        onclick="submitFinalScore()"
                        class="px-5 py-2 bg-cyan-500 hover:bg-cyan-600 text-white rounded"
                    >
                        Submit
                    </button>

                    <button
                        onclick="closeScorePopup()"
                        class="px-5 py-2 bg-slate-500 hover:bg-slate-600 text-white rounded"
                    >
                        Cancel
                    </button>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/flappy.js') }}"></script>
</x-app-layout>
