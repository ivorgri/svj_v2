function openModal(supervisorModal) {
    supervisorModal.classList.add('flex');
    supervisorModal.classList.remove('hidden');
}

function closeModal(supervisorModal) {
    supervisorModal.classList.add('hidden');
    supervisorModal.classList.remove('flex');
}

(function() {
    const supervisors = document.getElementsByClassName('supervisor-card');

    for(let index = 0; index < supervisors.length; index++) {
        const supervisorCard = supervisors[index];
        const supervisorModal = supervisorCard.nextElementSibling;
        supervisorCard.addEventListener("click", () => {
            openModal(supervisorModal);
        });
    }

    const supervisorModalClosers = document.getElementsByClassName('close-supervisor-modal');

    for(let index = 0; index < supervisorModalClosers.length; index++) {
        const supervisorModalCloser = supervisorModalClosers[index];
        const supervisorModal = supervisorModalCloser.parentElement.parentElement;
        supervisorModalCloser.addEventListener("click", () => {
            closeModal(supervisorModal);
        });
    }

    document.addEventListener("click", (event) => {
        if (event.target.matches(".supervisor-modal")) {
            const supervisorModal = event.target;
            closeModal(supervisorModal);
        }
    });
})();