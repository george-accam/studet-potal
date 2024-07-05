// this display the popup log in and close it
function showNotification() {
    var blurBackground = document.getElementById("blur-background");
    blurBackground.style.display = "block";
  }
  
  function closeNotification() {
    var blurBackground = document.getElementById("blur-background");
    blurBackground.style.display = "none";
  }
  
//   this function for the password and the input tags
  document.addEventListener("DOMContentLoaded", function() {
    const fullName = document.getElementById("fullname");
    const email = document.getElementById("email");
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
        const confirmPassword = confirmPasswordInput.value;

        if (password !== confirmPassword) {
            passwordValidation.textContent = "password doesn't match";
            return;
        }

        if (password.length < 8) {
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
            window.location.href = '/homepage.html';
        }, 2000);
    });
});


// this display the value to the agent
let tickets = [];

const ticketForm = document.getElementById('ticketForm');

ticketForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const ticketName = document.getElementById('ticketname').value;
    const ticketNumber = document.getElementById('ticketnumber').value;
    const ticketEmail = document.getElementById('ticketemail').value;
    const issueType = document.getElementById('issuetype').value;
    const ticketIssue = document.getElementById('issue').value;

    let date = new Date();

    const ticket = {
      id: tickets.length + 1,
      name: ticketName,
      contact: ticketNumber,
      email: ticketEmail,
      issuetype: issueType,
      issue: ticketIssue,
      date: date.toLocaleDateString(), // Format the date as a string
      time: date.toLocaleTimeString(), // Format the time as a string
      status: 'Pending'
    };

    tickets.push(ticket);
    displayTickets();
    document.getElementById('ticketForm').reset();
});


function displayTickets() {
  const ticketList = document.getElementById('ticketList');
  ticketList.innerHTML = '';

  tickets.forEach(ticket => {
    const ticketElement = document.createElement('div');
    ticketElement.classList.add('ticket');
    ticketElement.innerHTML = `
      <h3>Ticket #${ticket.id}</h3>
      <p><strong>Name:</strong> ${ticket.name}</p>
      <p><strong>Contact:</strong> ${ticket.contact}</p>
      <p><strong>Email:</strong> ${ticket.email}</p>
      <p><strong>Issue Type:</strong> ${ticket.issuetype}</p>
      <p><strong>Issue:</strong> ${ticket.issue}</p>
      <p><strong>Date:</strong> ${ticket.date}</p>
      <p><strong>Time:</strong> ${ticket.time}</p>
      <p><strong>Status:</strong> ${ticket.status}</p>
    `;
    ticketList.appendChild(ticketElement);
  });
}
displayTickets(); 