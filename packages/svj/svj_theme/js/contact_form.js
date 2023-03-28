function enableSubmitButton(name,email,message) {
    return (
        typeof name === 'string' && name.length !== 0 &&
        typeof email === 'string' && email.length !== 0 &&
        typeof message === 'string' && message.length !== 0 && 
        formTimer >= 5
    )
}

function email(data) {
    const body = {
        "name":data.get("name"),
        "email":data.get("email"),
        "message":data.get("message")
    };
    fetch("/svj-form/send.php", {
        method: "POST",
        body: JSON.stringify(body),
        headers: {
            'Content-Type' : 'application/json'
        }
    })
    .then(response => response.json())
    .then(response => {
        const messageTitle = document.getElementById("info-message-title")
        messageTitle.innerHTML = response.message
        const message = document.getElementById("info-message")
        message.classList.remove('hidden');
        const contactForm = document.getElementById("contact-form");
        contactForm.classList.add('hidden');
    })
    .catch(error => {
        error.json().then(response => {
            const errorMessageTitle = document.getElementById("error-message-title")
            errorMessageTitle.innerHTML = response.message
            const errorMessage = document.getElementById("error-message")
            errorMessage.classList.remove('hidden');
        })
    })
}

let formTimer = 0;
function updateFormTimer() {
    formTimer++;
}

(function() {
    const form = document.getElementById("contact-form")
    const submitButton = document.getElementById("submit")
    const nameInput = document.getElementById("name")
    const emailInput = document.getElementById("email")
    const messageInput = document.getElementById("message")
    const honeyInputs = document.getElementsByClassName("honnie")
    if (!form || !submitButton) {
        return;
    }

    for(let index = 0; index < honeyInputs.length; index++) {
        honeyInput = honeyInputs[index];
        honeyInput.classList.add("hidden")
    }

    setInterval(updateFormTimer, 1000);

    if (messageInput) {
        [nameInput,emailInput,messageInput].forEach(formInput => {
            formInput.addEventListener('input', function(event) {
                submitButton.disabled = !enableSubmitButton(nameInput.value,emailInput.value,messageInput.value)
            })
        })
    }

    const submitEvent = form.addEventListener("submit", (event) => {
        event.preventDefault();
        const formData = new FormData(form);
        nameInput.disabled = true;
        emailInput.disabled = true;
        messageInput.disabled = true;
        email(formData);
    })
})();