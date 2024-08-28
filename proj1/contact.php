<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Result Management System - Contact Form</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
    }

    .container4 {
      max-width: 600px;
      margin: 20px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-size: 16px;
    }

    input, textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 16px;
      transition: border-color 0.3s;
    }

    input:focus,
    textarea:focus {
      border-color: #4caf50;
    }

    textarea {
      resize: vertical;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    button {
      padding: 15px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s;
      margin-top: 10px;
    }

    .submit-button {
      background-color: #4caf50;
      color: #fff;
    }

    .submit-button:hover {
      background-color: #45a049;
    }

    .logout-button {
      background-color: #f44336; /* Red color */
      color: #fff;
    }

    .logout-button:hover {
      background-color: #d32f2f; /* Darker red color */
    }
  </style>
</head>
<body>

  <div class="container4">
    <h1>Contact Form</h1>
    <form action="https://formspree.io/f/xpzvwrlk" method="post">
      <label for="name">Student Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="studentID">Student ID:</label>
      <input type="text" id="studentID" name="studentID" required>

      <label for="course">Course Name:</label>
      <input type="text" id="course" name="course" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <div class="button-container">
        <button type="submit" class="submit-button">Submit</button>
        <button type="button" class="logout-button" onclick="logout()">Go Back</button>
      </div>
    </form>
  </div>

  <script>
    function logout() {
      // Perform logout actions, such as redirecting to the logout page
      window.location.href = "http://localhost/Result_management/proj1/user.html";
    }
  </script>

</body>
</html>
