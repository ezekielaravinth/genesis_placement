//=========================================//
/*/*            Contact Form               */
//=========================================//
document.addEventListener("DOMContentLoaded", () => {
    const form = document.forms["myForm"];
    if (!form) return;
    const errorMsg = document.getElementById("error-msg");
    const responseDiv = document.getElementById("simple-msg");

    form.addEventListener("submit", async (e) => {
        e.preventDefault(); // prevent form's default submission

        const name = form["name"].value.trim();
        const email = form["email"].value.trim();
        const subject = form["subject"].value.trim();
        const number = form["number"].value.trim();
        const message = form["Message"].value.trim();
        const csrfToken = document.getElementById("csrf_token").value;

        errorMsg.style.opacity = 0;
        errorMsg.innerHTML = "";

        // Validate fields
        if (!name) return showError("*Please enter a Name*");
        if (!email) return showError("*Please enter an Email*");
        if (!subject) return showError("*Please enter a Subject*");
        if (!number) return showError("*Please enter a Number*");
        if (!message) return showError("*Please enter a Message*");

        try {
            const response = await fetch("/contact", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: new URLSearchParams({
                    name,
                    email,
                    subject,
                    number,
                    Message: message,
                    _csrf_token: csrfToken,
                }),
            });

            const text = await response.text();

            if (response.ok) {
                responseDiv.innerHTML = `<div id='success_page'>${text}</div>`;
                form.reset();
            } else {
                console.error("Server error:", text);
                responseDiv.innerHTML = `<div id='error_message'>An error occurred. Please try again.</div>`;
            }
        } catch (error) {
            console.error("Fetch error:", error);
            responseDiv.innerHTML = `<div id='error_message'>Something went wrong. Please try again.</div>`;
        }
    });

    function showError(message) {
        errorMsg.innerHTML = `<div class='alert alert-warning error_message'>${message}</div>`;
        fadeIn(errorMsg);
    }

    function fadeIn(element) {
        let opacity = 0;
        element.style.opacity = 0;
        const interval = setInterval(() => {
            opacity += 0.2;
            element.style.opacity = opacity;
            if (opacity >= 1) clearInterval(interval);
        }, 60);
    }
});