<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Choose a Task</title>
  <style>
    body {
      min-height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f5faff;
      font-family: Arial, sans-serif;
    }

    .task-buttons {
      display: flex;
      flex-direction: column;
      gap: 24px;
      width: min(90%, 520px);
    }

    .task-button {
      padding: 24px;
      border-radius: 12px;
      background: #add8f7;
      color: #123b5d;
      font-size: 28px;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
    }

    .task-button:hover {
      background: #91c9f0;
    }
  </style>
</head>
<body>
  <main class="task-buttons">
    <a class="task-button" href="home.php">For Task 1 click here</a>
    <a class="task-button" href="OOP-Task2.php">For Task 2 click here</a>
    <a class="task-button" href="task2.php">For Search Task click here</a>
  </main>
</body>
</html>