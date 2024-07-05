<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Help Desk</title>
</head>
<body style="background-color: #2f55ff;">
  <!-- Customer Interface -->
  <div class="ticket-container">
    <div class="ticket-container-inner">
      <div class="typing-container">
        <h1 class="typing-text">Help Desk Ticketing System</h1>
      </div>
      <h2>Submit a Ticket</h2>
      <form id="ticketForm">
        <div class="input-container">
          <label for="name">Name:</label>
          <input type="text" id="ticketname" required>
        </div>

        <div class="input-container">
          <label for="email">Contact:</label>
          <input type="number" id="ticketnumber" required>
        </div>

        <div class="input-container">
          <label for="email">Email:</label>
          <input type="email" id="ticketemail" required>
        </div>

        <div class="input-container">
          <label for="email">Issue Type:</label>
          <select id="issuetype">
            <option value="">........</option>
            <option value="Technical">Technical</option>
            <option value="Finance">Finance</option>
          </select>
        </div>

        <div class="input-container">
          <label for="issue">Issue:</label>
          <textarea id="issue" rows="4" cols="50" required></textarea>
        </div>
        <button type="submit" class="ticketBtn">Submit Ticket</button>
      </form>
    </div>
  </div>

  <div class="container">
    <div class="ticket-container">
      <h2>Support Agent Dashboard</h2>
      <div id="ticketList" class="ticket-list"></div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>