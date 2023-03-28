const moveProgress = () => {
    progressSlider = document.getElementById("progress-slider");
    
    interval = setInterval(() => {
        progressWidth += 0.5;
        if (progressWidth > 101) {
            progressWidth = 0;
            clearInterval(interval);
            nextSlide();
            setTimeout(() => {
                moveProgress(waitForStartingProgress);
            }, waitForStartingProgress)
        } else {
            progressSlider.style.setProperty('--progress-slider-width',`${progressWidth}%`);
        }
    }, 18);
}

const previousSlide = () => {
    progressWidth = 0;
    let maxSlideIndex = slides.length - 1;
    if (currentSlideIndex === 0) {
        currentSlideIndex = maxSlideIndex;
    } else {
        currentSlideIndex--;
    }

    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(${100 * (index - currentSlideIndex)}%)`;
    });
}

const nextSlide = () => {
    progressWidth = 0;
    let maxSlideIndex = slides.length - 1;
    if (currentSlideIndex === maxSlideIndex) {
        currentSlideIndex = 0;
    } else {
        currentSlideIndex++;
    }

    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(${100 * (index - currentSlideIndex)}%)`;
    });
}

function sliderInit() {
    slides = document.querySelectorAll(".slide");
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(${index * 100}%)`;
    });
    
    const previousSlideButton = document.getElementById('previous-slide-button');
    previousSlideButton.addEventListener("click", () => {
        previousSlide();
    });

    const nextSlideButton = document.getElementById('next-slide-button');
    nextSlideButton.addEventListener("click", function () {
        nextSlide();
    });
}

const waitForStartingProgress = 1500;
let progressWidth = 0;
let slides = [];
let currentSlideIndex = 0;

(function() {
    sliderInit();
    moveProgress();
})();
