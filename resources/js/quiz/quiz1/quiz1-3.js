// NOTE: Javascript for quiz 3

// Game Scene 1
const gameScene1 = document.getElementById("js-scene");
const gameCard1 = gameScene1.querySelector(".js-scene-card");
const questionGame1 = gameScene1.querySelectorAll(".js-input-card");
const questionGame1Array = Array.from(questionGame1);
const answerPlaceholder = [];

// questionGame1Array.forEach((input, index) => {
//     input.style.top = `${index * 100 + 30}px`;
// });

// Drag Logic
function isColliding(el1, el2) {
    const r1 = el1.getBoundingClientRect();
    const r2 = el2.getBoundingClientRect();

    return !(
        r1.right < r2.left ||
        r1.left > r2.right ||
        r1.bottom < r2.top ||
        r1.top > r2.bottom
    );
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

        if (
            pos &&
            typeof pos.top === "number" &&
            typeof pos.left === "number"
        ) {
            // Use provided values
            this.el.style.top = `${pos.top}px`;
            this.el.style.left = `${pos.left}px`;
        } else {
            // Default: calculate current position in layout
            const rect = this.el.getBoundingClientRect();
            const scrollTop =
                window.scrollY || document.documentElement.scrollTop;
            const scrollLeft =
                window.scrollX || document.documentElement.scrollLeft;

            this.el.style.top = rect.top + scrollTop + "px";
            this.el.style.left = rect.left + scrollLeft + "px";
        }
    }

    init() {
        this.el.addEventListener("mousedown", this.onMouseDown.bind(this));
        document.addEventListener("mousemove", this.onMouseMove.bind(this));
        document.addEventListener("mouseup", this.onMouseUp.bind(this));

        this.el.addEventListener("touchstart", this.onMouseDown.bind(this));
        document.addEventListener("touchmove", this.onMouseMove.bind(this), {
            passive: false,
        });
        document.addEventListener("touchend", this.onMouseUp.bind(this));
    }

    onMouseDown(e) {
        const clientX = e.touches ? e.touches[0].clientX : e.clientX;
        const clientY = e.touches ? e.touches[0].clientY : e.clientY;

        this.isDragging = true;
        this.offsetX = e.clientX - this.el.offsetLeft;
        this.offsetY = e.clientY - this.el.offsetTop;
        this.el.style.zIndex = 1000;
    }

    onMouseMove(e) {
        if (!this.isDragging) return;
        const clientX = e.touches ? e.touches[0].clientX : e.clientX;
        const clientY = e.touches ? e.touches[0].clientY : e.clientY;
        this.el.style.left = `${e.clientX - this.offsetX}px`;
        this.el.style.top = `${e.clientY - this.offsetY}px`;
    }

    onMouseUp() {
        this.isDragging = false;
        this.el.style.zIndex = 1;

        const inputZones = document.querySelectorAll(".js-input");
        let isCollided = false;

        for (let zone of inputZones) {
            if (isColliding(this.el, zone)) {
                console.log(`Collision detected with `, zone);
                isCollided = true;
                const zoneParent = zone.parentNode;
                const zoneRect = zone.getBoundingClientRect();
                const parentRect = zoneParent.getBoundingClientRect();

                // Append element to same parent as zone
                zoneParent.appendChild(this.el);

                // New position relative to parent
                const relativeLeft = zoneRect.left - parentRect.left;
                const relativeTop = zoneRect.top - parentRect.top;

                // Center answer in zone
                const centeredLeft =
                    relativeLeft + (zoneRect.width - this.el.offsetWidth) / 2;
                const centeredTop =
                    relativeTop + (zoneRect.height - this.el.offsetHeight) / 2;

                this.el.style.left = `${centeredLeft}px`;
                this.el.style.top = `${centeredTop}px`;

                console.log(
                    `Moved ${this.el.textContent} to (${centeredLeft}px, ${centeredTop}px) inside zone.`
                );

                // Only add answer once
                if (!answerPlaceholder.includes(this.el.innerHTML)) {
                    answerPlaceholder.push(this.el.innerHTML);
                }

                break;
            }
        }
        if (!isCollided) {
            console.log(
                `No collision detected, move to ${this.initialPosition}`
            );
            const answerNode = document.querySelector(".js-answer-card");
            answerNode.appendChild(this.el);
            this.setInitialPosition(this.initialPosition);
        }
        console.log(`Current answer: ${answerPlaceholder}`);
    }
}

const answerCard = document.querySelector(".js-answer-card");
const answerGame = answerCard.querySelectorAll(".js-answer");
answerGame.forEach((el, index) => {
    new Draggable(el, { top: index * 100, left: 0 });
});
