<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz Pengenalan Autisme| E-Learning</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- Favicon & Meta --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="{{ Auth::id() }}">

    @vite('resources/css/app.css')
</head>

<body class="font-futura min-h-screen flex flex-col text-blue31 bg-white">
    {{-- Include Header --}}
    @include('includes.components.elearning.course.header')

    {{-- Game Section --}}
    <section class="flex-1 flex items-center justify-center px-4 py-8">
        <div id="game-1" class="w-full max-w-6xl border-2 border-black rounded-md p-6">
            <h2 class="text-2xl font-bold text-center mb-6">Game 1</h2>
            <div class="flex justify-center gap-16 flex-wrap">
                {{-- Game Card (Left) --}}
                <div class="relative w-[470px] h-[300px] border border-red-500 rounded-md bg-white overflow-hidden">
                    <div id="question" class="absolute w-24 h-12 flex items-center justify-center bg-blue-200 rounded text-center font-semibold transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                        Karakteristik Autisme
                    </div>
                    @for ($i = 1; $i <= 6; $i++)
                        <div id="question-{{ $i }}" class="input-game absolute w-24 h-12 flex items-center justify-center bg-gray-100 border border-dashed border-gray-400 rounded transform -translate-x-1/2 -translate-y-1/2"></div>
                    @endfor
                </div>

                {{-- Answer Cards (Right) --}}
                <div class="relative flex flex-col items-start">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="answer-game w-24 h-12 mb-4 bg-red-300 flex items-center justify-center text-white font-medium rounded cursor-grab">
                            Answer {{ $i }}
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{-- Include Footer --}}
    @include('includes.components.elearning.course.footer')

    {{-- Optional Modal --}}
    @include('includes.components.elearning.course.dialog.modal-asessment')

    {{-- Script --}}
    <script>
        const gameSection = document.querySelector(".game-card") || document.querySelector(".w-[470px]");
        const sectionWidth = gameSection.clientWidth;
        const sectionHeight = gameSection.clientHeight;

        const gameScene1 = document.getElementById("game-1");
        const questionGame1 = gameScene1.querySelectorAll(".input-game");
        const questionGame1Array = Array.from(questionGame1);
        const answerPlaceholder = [];
        const radius = 150;

        questionGame1Array.forEach((input, index) => {
            input.innerHTML = `Q${index + 1}`;
            const angle = (index / questionGame1Array.length) * (2 * Math.PI);
            const opp = radius * Math.sin(angle);
            const hyp = radius * Math.cos(angle);
            const a = sectionWidth / 2 - opp;
            const b = sectionHeight / 2 - hyp;
            const x = (a / sectionWidth) * 100;
            const y = (b / sectionHeight) * 100;

            input.style.top = `${y}%`;
            input.style.left = `${x}%`;
        });

        function isColliding(el1, el2) {
            const r1 = el1.getBoundingClientRect();
            const r2 = el2.getBoundingClientRect();
            return !(r1.right < r2.left || r1.left > r2.right || r1.bottom < r2.top || r1.top > r2.bottom);
        }

        class Draggable {
            constructor(element, initialPosition = null) {
                this.el = element;
                this.offsetX = 0;
                this.offsetY = 0;
                this.isDragging = false;
                this.initialPosition = initialPosition;
                this.setInitialPosition(initialPosition);
                this.init();
            }

            setInitialPosition(pos) {
                this.el.style.position = "absolute";
                if (pos && typeof pos.top === "number" && typeof pos.left === "number") {
                    this.el.style.top = `${pos.top}px`;
                    this.el.style.left = `${pos.left}px`;
                } else {
                    const rect = this.el.getBoundingClientRect();
                    const scrollTop = window.scrollY || document.documentElement.scrollTop;
                    const scrollLeft = window.scrollX || document.documentElement.scrollLeft;
                    this.el.style.top = rect.top + scrollTop + "px";
                    this.el.style.left = rect.left + scrollLeft + "px";
                }
            }

            init() {
                this.el.addEventListener("mousedown", this.onMouseDown.bind(this));
                document.addEventListener("mousemove", this.onMouseMove.bind(this));
                document.addEventListener("mouseup", this.onMouseUp.bind(this));
                this.el.addEventListener("touchstart", this.onMouseDown.bind(this));
                document.addEventListener("touchmove", this.onMouseMove.bind(this), { passive: false });
                document.addEventListener("touchend", this.onMouseUp.bind(this));
            }

            onMouseDown(e) {
                const clientX = e.touches ? e.touches[0].clientX : e.clientX;
                const clientY = e.touches ? e.touches[0].clientY : e.clientY;
                this.isDragging = true;
                this.offsetX = clientX - this.el.offsetLeft;
                this.offsetY = clientY - this.el.offsetTop;
                this.el.style.zIndex = 1000;
            }

            onMouseMove(e) {
                if (!this.isDragging) return;
                const clientX = e.touches ? e.touches[0].clientX : e.clientX;
                const clientY = e.touches ? e.touches[0].clientY : e.clientY;
                this.el.style.left = `${clientX - this.offsetX}px`;
                this.el.style.top = `${clientY - this.offsetY}px`;
            }

            onMouseUp() {
                this.isDragging = false;
                this.el.style.zIndex = 1;
                const inputZones = document.querySelectorAll(".input-game");
                let isCollided = false;

                for (let zone of inputZones) {
                    if (isColliding(this.el, zone)) {
                        const zoneParent = zone.parentNode;
                        const zoneRect = zone.getBoundingClientRect();
                        const parentRect = zoneParent.getBoundingClientRect();
                        zoneParent.appendChild(this.el);
                        const relativeLeft = zoneRect.left - parentRect.left;
                        const relativeTop = zoneRect.top - parentRect.top;
                        const centeredLeft = relativeLeft + (zoneRect.width - this.el.offsetWidth) / 2;
                        const centeredTop = relativeTop + (zoneRect.height - this.el.offsetHeight) / 2;
                        this.el.style.left = `${centeredLeft}px`;
                        this.el.style.top = `${centeredTop}px`;
                        if (!answerPlaceholder.includes(this.el.innerHTML)) {
                            answerPlaceholder.push(this.el.innerHTML);
                        }
                        isCollided = true;
                        break;
                    }
                }

                if (!isCollided) {
                    const answerNode = document.querySelector(".answer-card");
                    answerNode.appendChild(this.el);
                    this.setInitialPosition(this.initialPosition);
                }

                console.log(`Current answer : ${answerPlaceholder}`);
            }
        }

        const answerCard = document.querySelector(".answer-card");
        const answerGame = answerCard.querySelectorAll(".answer-game");
        answerGame.forEach((el, index) => {
            new Draggable(el, { top: index * 60, left: 0 });
        });
    </script>
</body>
</html>
