<?php
  session_start();
  $id = $_SESSION['userID'];
  $name = $_SESSION['name'];
  $institution = $_SESSION['institution'];
  $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>RoomieConnect - Profile</title>
  <link rel="stylesheet" href="profile.css">
  <link rel="stylesheet" href="styles.css">
</head>

<header>
    <nav>
      <div class="logo">
        <h1><a href="index.html">The RoomieConnect</a></h1>
      </div>
      <ul class="nav-links">
        <li><a href="profile.html">Profile</a></li>
        <li><a href="explore.html">Explore</a></li>
        <li><a href="review.html">Review</a></li>
        <li><a href="index.html">Logout</a></li>
      </ul>
    </nav>
  </header>

<body>
  <div class="profile">
    <h2>Welcome, <?=$name?>!</h2>
    <p><strong>Email:</strong> <?=$email?></p>
    <p><strong>University:</strong> <?=$institution?></p>

    <div class="tab-container">
      <div class="tab" onclick="showTab('personalInfo')">Personal Information</div>
      <div class="tab" onclick="showTab('matches')">Matches</div>
    </div>

    <div class="tab-content personalInfo active">
      <p><strong>Date of Birth:</strong> [Date of Birth]</p>
      <p><strong>Gender:</strong> [Gender]</p>
    </div>

    <div class="tab-content matches">
      <div class="matches">
        <div class="match">
          <h3>Match 1</h3>
          <p><strong>Name:</strong> [Name]</p>
          <p><strong>Compatibility:</strong> [Compatibility Score]</p>
          <p><strong>Interests:</strong> [Interests]</p>
          <button class="online-button" onclick="startChat('chat.html')">Chat now</button>
          <button class="match-now-button" onclick="showConfirmationDialog('Match 1 Name')">Match</button>
        </div>

        <div class="match">
          <h3>Match 2</h3>
          <p><strong>Name:</strong> [Name]</p>
          <p><strong>Compatibility:</strong> [Score]</p>
          <p><strong>Interests:</strong> [Interests]</p>
          <button class="offline-button" disabled>Chat now</button>
          <button class="match-now-button" onclick="showConfirmationDialog('Match 2 Name')">Match</button>
        </div>

      </div>
    </div>
  </div>

  <script src="profile.js"></script>
</body>
</html>


