const form = {
    username: document.getElementById('username'),
    password: document.getElementById('password'),
    submit: document.getElementById('btn-submit'),
    messages: document.getElementById('form-messages')
};

form.submit.addEventListener('click', () => {
    const request = new XMLHttpRequest();

    request.onload = () => {
        let responseObject = null;

        try {
            responseObject = JSON.parse(request.responseText);
        } catch (e) {
            console.error('Could not parse JSON!');
        }

        if (responseObject) {
            handleResponse(responseObject);
        }
    };

    const requestData = `username=${form.username.value}&password=${form.password.value}`;

    request.open('post', 'core/signinCore.php');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);
});

function handleResponse (responseObject) {
    if (responseObject.ok) {
        location.href = 'view/home.php';
    }
    else {
        while (form.messages.firstChild) {
            form.messages.removeChild(form.messages.firstChild);
        }

        responseObject.messages.forEach((message) => {
            const p = document.createElement('p');
            p.textContent = message;
            form.messages.appendChild(p);
        });

        //form.messages.style.display = "block";
    }
}