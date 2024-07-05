//   this function for the password and the input tags
  document.addEventListener("DOMContentLoaded", function() {
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirmPassword");
    const togglePasswordBtn = document.getElementById("togglePassword");
    const passwordValidation = document.getElementById("passwordValidation");
    const authForm = document.getElementById("authForm");

    let showPassword = false;

    togglePasswordBtn.addEventListener("click", function() {
        showPassword = !showPassword;
        passwordInput.type = showPassword ? "text" : "password";
        confirmPasswordInput.type = showPassword ? "text" : "password";
        togglePasswordBtn.textContent = showPassword ? "😳" : "😌";
    });

    authForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const password = passwordInput.value;

        if (password !== "buertey") {
            passwordValidation.textContent = "password doesn't match";
            return;
        }

        if (password.length < 5) {
            passwordValidation.textContent = "password should be more than 8 characters";
            return;
        }

        passwordValidation.textContent = "successful";
        passwordValidation.style.color = 'greenyellow';

        // Simulate form submission
        const loadingSpinner = document.getElementById("spin");
        loadingSpinner.className = "spinner";
        loadingSpinner.style.float = "right"
        authForm.appendChild(loadingSpinner);

        setTimeout(() => {
            authForm.removeChild(loadingSpinner);
            // Navigate after loading is done
            window.location.href = '/agent.html';
        }, 2000);
    });
});



