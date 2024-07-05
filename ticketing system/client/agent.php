<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agent.css">
    <title>Agent Dashboard</title>
</head>
<body>

    <!-- Support Agent Interface -->
  <div class="container">

    <div class="customer-container">
      <div class="names">
        <h2>Customers Name</h2>
      </div>
      <div class="name-list">
        <div class="namelisted" id="namelisted"></div>
      </div>
    </div>

    <div class="ticket-container">
      <div class="agent-title">
        <h2>Support Agent Dashboard</h2>
      </div>
      <div class="display-side">
        <div id="ticketList" class="ticket-list" ></div>
      </div>
    </div>

  </div>

  <script>
      // Simulated API data
      let date = new Date();
      let tickets = [
      {
        id: 1,
        name: "John Doe",
        contact: "123-456-7890",
        email: "john.doe@example.com",
        issuetype: "Technical",
        issue: "Internet connectivity problem",
        date: date.toLocaleDateString(), // Format the date as a string
        time: date.toLocaleTimeString(),
        status: 'Pending'
      },
      {
        id: 2,
        name: "Accam Buertey",
        contact: "987-654-3210",
        email: "jane.smith@example.com",
        issuetype: "Billing",
        issue: "Invoice discrepancy",
        date: date.toLocaleDateString(), // Format the date as a string
        time: date.toLocaleTimeString(),
        status: 'In Progress'
      },
      {
        id: 3,
        name: "Jane Smith",
        contact: "987-654-3210",
        email: "jane.smith@example.com",
        issuetype: "Billing",
        issue: "Invoice discrepancy",
        date: date.toLocaleDateString(), // Format the date as a string
        time: date.toLocaleTimeString(),
        status: 'In Progress'
      },
      {
        id: 4,
        name: "Kelvin Klerk",
        contact: "987-654-3210",
        email: "jane.smith@example.com",
        issuetype: "Billing",
        issue: "Invoice discrepancy",
        date: date.toLocaleDateString(), // Format the date as a string
        time: date.toLocaleTimeString(),
        status: 'In Progress'
      },
      {
        id: 5,
        name: "Burna  Boy",
        contact: "987-654-3210",
        email: "jane.smith@example.com",
        issuetype: "Billing",
        issue: "Invoice discrepancy",
        date: date.toLocaleDateString(), // Format the date as a string
        time: date.toLocaleTimeString(),
        status: 'In Progress'
      },
      {
        id: 6,
        name: "Kofi Future",
        contact: "987-654-3210",
        email: "jane.smith@example.com",
        issuetype: "Billing",
        issue: "Invoice discrepancy",
        date: date.toLocaleDateString(), // Format the date as a string
        time: date.toLocaleTimeString(),
        status: 'In Progress'
      },
      // Add more initial tickets as needed
    ];


    function displayTickets() {
      const namelisted = document.getElementById("namelisted");
      namelisted.innerHTML = "";

      const ticketList = document.getElementById('ticketList');
      ticketList.innerHTML = "";

      tickets.forEach(ticket => {
        const ticketElement = document.createElement('div');
        ticketElement.classList.add('tickets');
        ticketElement.innerHTML = `
          <p>${ticket.id}. ${ticket.name}</p>
        `;
        namelisted.appendChild(ticketElement);
      });
      
      tickets.map(ticket => {
        const ticketElement = document.createElement('div');
        ticketElement.classList.add('ticket');
        ticketElement.innerHTML = `
          <h3>Ticket № ${ticket.id}</h3>
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
    // Call displayTickets initially to load ticket data
    displayTickets();
  </script>
</body>
</html>