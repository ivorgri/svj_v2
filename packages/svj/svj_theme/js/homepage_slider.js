function repositionBackground (currentBackgroundIndex,startPosition,increment,imageSwitchDuration){
    backgroundImage = document.getElementById('slider-background');
    const newX = startPosition - (currentBackgroundIndex * increment);
    gsap.to(backgroundImage,
        {
            x: newX,
            duration: imageSwitchDuration * 2
        })
}

function switchSupervisorImage(currentBackgroundIndex,visibleSupervisorImage,supervisorImages,imageSwitchDuration) {
    const newVisibleSupervisorImage = supervisorImages[currentBackgroundIndex];
    gsap.fromTo(visibleSupervisorImage,{
        opacity:1
    },{
        opacity: 0,
        x: -20,
        duration: imageSwitchDuration,
        onComplete: (newVisibleSupervisorImage) => {
            gsap.fromTo(newVisibleSupervisorImage,{
                opacity:0,
                x: 20
            },{
                opacity: 1,
                x: 0,
                duration: imageSwitchDuration
            })
        },
        onCompleteParams: [newVisibleSupervisorImage]
    })
    return newVisibleSupervisorImage;
}

(function () {
    let currentBackgroundIndex = 0;
    let maxIndex = 2;
    let increment = 100;
    let startPosition = 100;
    const imageSwitchDuration = 0.5;

    let supervisorImages = document.getElementsByClassName('slider-supervisor-image');
    let visibleSupervisorImage = supervisorImages[currentBackgroundIndex];

    repositionBackground(currentBackgroundIndex,startPosition,increment,imageSwitchDuration);

    sliderLeftButton = document.getElementById('slider-left-button');
    sliderRightButton = document.getElementById('slider-right-button');

    sliderLeftButton.addEventListener("click", async () => {
        currentBackgroundIndex === 0 ? currentBackgroundIndex = maxIndex : currentBackgroundIndex--;
        repositionBackground(currentBackgroundIndex,startPosition,increment,imageSwitchDuration);
        visibleSupervisorImage = switchSupervisorImage(currentBackgroundIndex,visibleSupervisorImage, supervisorImages,imageSwitchDuration);
    });

    sliderRightButton.addEventListener("click", async () => {
        currentBackgroundIndex === maxIndex ? currentBackgroundIndex = 0 : currentBackgroundIndex++;
        repositionBackground(currentBackgroundIndex,startPosition,increment,imageSwitchDuration);
        visibleSupervisorImage = switchSupervisorImage(currentBackgroundIndex,visibleSupervisorImage,supervisorImages,imageSwitchDuration);
    });
})();