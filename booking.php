<?php 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Appointment Booking Form</title>
  <style>
    /* CSS styles for the form */
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      resize: none;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Appointment Booking Form - Educational Counselor</h2>
    <form id="appointmentForm">
      <label for="name">Name:</label>
      <input type="text" id="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" required>

      <label for="date">Preferred Date:</label>
      <input type="date" id="date" required>

      <label for="time">Preferred Time:</label>
      <input type="time" id="time" required>

      <label for="reason">Reason for Appointment:</label>
      <textarea id="reason" required></textarea>

      <label for="comments">Additional Comments/Questions:</label>
      <textarea id="comments"></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>

  <script>
    // JavaScript code to handle form submission
    const form = document.getElementById('appointmentForm');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      // Fetch form values
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const date = document.getElementById('date').value;
      const time = document.getElementById('time').value;
      const reason = document.getElementById('reason').value;
      const comments = document.getElementById('comments').value;

      // You can perform validation or further processing of the form data here
      // For now, we'll simply display an alert with the submitted data
      const submittedData = {
        Name: name,
        Email: email,
        Phone: phone,
        'Preferred Date': date,
        'Preferred Time': time,
        'Reason for Appointment': reason,
        'Additional Comments/Questions': comments
      };
      alert('Appointment request submitted!\n\n' + JSON.stringify(submittedData, null, 2));

      // You can send the form data to a server for further processing using AJAX or Fetch API
      // Here, we're just displaying an alert with the submitted data
    });
  </script>
</body>
</html>
