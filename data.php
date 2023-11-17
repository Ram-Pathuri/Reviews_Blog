<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="data.css">
  <title>Beautiful Form</title>
</head>
<body>
  <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    <label for="image">Select Image:</label>
    <input type="file" name="image" id="image" accept="image/*">
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>
