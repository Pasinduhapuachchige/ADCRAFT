<!DOCTYPE html>
<html lang="en">
<head>
    <title>AdCraft</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong&effect=neon|outline|emboss|shadow-multiple">
    

<style>
       body {
  font-family: "Trirong", serif;
  font-size: 16px;
  margin: 0;
  padding: 0;
  background-color: #f3f3f3;
  color: #333;
}

/* Navigation styling */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px 32px;
  background-color: #222;
  color: #fff;
}

nav .logo {
  font-size: 24px;
}

nav ul {
  display: flex;
  list-style: none;
  gap: 32px;
  font-size: 18px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

nav ul li a:hover {
  color: #099dd7;
}

/* Header styling */
header {
  text-align: center;
  padding: 80px 0;
  background-image: url('istockphoto-1645012505-612x612.jpg');
  background-size: cover;
  color: #fff;
}

header h1 {
  font-size: 48px;
  margin-bottom: 16px;
}

header h2 {
  font-size: 24px;
  font-family: cursive;
  margin-bottom: 32px;
}

header .font-effect-outline {
  font-size: 36px;
  color: #09a0d7;
}

/* Content section styling */
.content {
  padding: 40px;
}

.job {
  margin-bottom: 40px;
}

.job h2 {
  font-size: 32px;
  color: #333;
}

.job h3 {
  font-size: 18px;
  color: #777;
  margin-bottom: 16px;
}

.job p {
  font-size: 16px;
  color: #555;
}

.job button {
  background-color: #288ad0;
  color: #fff;
  border: none;
  padding: 12px 24px;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.job button:hover {
  background-color: #00aacc;
}

.job .page {
  display: none;
  background-color: #fff;
  padding: 24px;
  margin-top: 16px;
  border-radius: 8px;
}

.job .page.active {
  display: block;
}

.job .page h3 {
  font-size: 24px;
  color: #333;
  margin-bottom: 16px;
}

.job .page ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.job .page ul li {
  margin-bottom: 8px;
}

.job .page fieldset {
  border: 2px solid #ccc;
  padding: 16px;
  margin-top: 16px;
  border-radius: 8px;
}

.job .page fieldset legend {
  font-size: 20px;
  color: #333;
  margin-bottom: 8px;
}

.job .page form input[type="text"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.job .page form input[type="password"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.job .page form input[type="submit"] {
  background-color: #036288;
  color: #fff;
  border: none;
  padding: 12px 24px;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.job .page form input[type="submit"]:hover {
  background-color: #057bc0;
}

/* Footer styling */
footer {
  text-align: center;
  padding: 32px 0;
  background-color: #222;
  color: #fff;
}

    </style>
</head>
<body>
    <nav>
        <div class="logo"><h1>ADCRAFT</h1></div>
        <ul class="nav-links">
            <li><a href="../Home1.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="../Service/service.php">Service</a></li>
            <li><a href="../CRUD/add_new.php">Contact</a></li>
            <li><a href="carrer/index1.php">Career</a></li>
            <li><a href="../php/logout.php"><b>Logout</b></a></li>
        </ul>
        <!-- Mobile Menu Button -->
        <div class="menu-btn"><img src="./img/menu.svg" alt=""></div>
    </nav>

    <header>
        <h1>We're Hiring</h1>
        <h2>Discover why our work environment was voted best in the industry by our clients.</h2>
        <h1 class="font-effect-outline">Join with us today</h1>
    </header>

    <div class="content">
        <div class="job">
            <h2>Account Executive</h2>
            <h3>Closing Date: 05th June 2024</h3>
            <button onclick="showPage('page1')">Read more</button>
            <div id="page1" class="page">
                <h3>IF YOU MEET THE FOLLOWING MINIMUM QUALIFICATIONS, APPLY RIGHT AWAY:</h3>
                <ul>
                    <li>Bachelor's degree in business administration, marketing, sales, or a related field.</li>
                    <li>Familiarity with CRM software and other sales tools.</li>
                    <li>Proven experience in sales, account management, or customer service.</li>
                    <li>Strong communication and interpersonal skills.</li>
                    <li>Demonstrated ability to meet sales targets and quotas.</li>
                </ul>
                <h2>APPLY NOW</h2>
                <fieldset>
                    <legend>Job Application</legend>
                    <form method="post" action="insert.php">
                        <input type="text" name="id" placeholder="Id(NIC)">
                        <input type="text" name="firstname" placeholder="First name">
                        <input type="text" name="lastname" placeholder="Last name">
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <input type="text" name="jobposition" placeholder="Job position">
                        <input type="text" name="mobile" placeholder="Mobile number">
                        <input type="submit" value="Submit">
                        <button><a href="searchtxtbox.php" style="text-decoration: none;">Update</a></button>
                    </form>
                </fieldset>
            </div>
        </div>

        <div class="job">
            <h2>Marketing Analyst</h2>
            <h3>Closing Date: 22nd May 2024</h3>
            <button onclick="showPage('page2')">Read more</button>
            <div id="page2" class="page">
                <h3>IF YOU MEET THE FOLLOWING MINIMUM QUALIFICATIONS, APPLY RIGHT AWAY:</h3>
                <ul>
                    <li>Bachelor's degree in marketing, business, statistics, economics, or a related field.</li>
                    <li>Proficiency in data analysis tools such as Excel, SQL, and statistical software like SPSS or SAS.</li>
                    <li>Knowledge of marketing principles and strategies.</li>
                    <li>Attention to detail and accuracy in reporting and analysis.</li>
                    <li>Excellent communication skills, both written and verbal.</li>
                </ul>
                <h2>APPLY NOW</h2>
                <fieldset>
                    <legend>Job Application</legend>
                    <form method="post" action="insert.php">
                        <input type="text" name="id" placeholder="Id(NIC)">
                        <input type="text" name="firstname" placeholder="First name">
                        <input type="text" name="lastname" placeholder="Last name">
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <input type="text" name="jobposition" placeholder="Job position">
                        <input type="text" name="mobile" placeholder="Mobile number">
                        <input type="submit" value="Submit">
                        <button><a href="searchtxtbox.php" style="text-decoration: none;">Update</a></button>
                    </form>
                </fieldset>
            </div>
        </div>

        <div class="job">
            <h2>Creative Director</h2>
            <h3>Closing Date: 22nd May 2024</h3>
            <button onclick="showPage('page3')">Read more</button>
            <div id="page3" class="page">
                <h3>IF YOU MEET THE FOLLOWING MINIMUM QUALIFICATIONS, APPLY RIGHT AWAY:</h3>
                <ul>
                    <li>A bachelor's degree in a relevant field such as graphic design, fine arts, visual communications, or a related field is usually required.</li>
                    <li>Several years of experience in a creative role, such as graphic designer, art director, or similar position.</li>
                    <li>Knowledge of typography, color theory, layout, and other principles of design.</li>
                    <li>Proficiency in relevant design software such as Adobe Creative Suite.</li>
                </ul>
                <h2>APPLY NOW</h2>
                <fieldset>
                    <legend>Job Application</legend>
                    <form method="post" action="insert.php">
                        <input type="text" name="id" placeholder="Id(NIC)">
                        <input type="text" name="firstname" placeholder="First name">
                        <input type="text" name="lastname" placeholder="Last name">
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <input type="text" name="jobposition" placeholder="Job position">
                        <input type="text" name="mobile" placeholder="Mobile number">
                        <input type="submit" value="Submit">
                        <button><a href="searchtxtbox.php" style="text-decoration: none;">Update</a></button>
                    </form>
                </fieldset>
            </div>
        </div>

        <!-- Add similar structures for other job listings -->

    </div>

    <footer>
        <p>&copy; 2024 AdCraft. All rights reserved.</p>
    </footer>

    <script>
        // Function to show the selected page and hide others
        function showPage(pageId) {
            // Hide all pages
            var pages = document.getElementsByClassName('page');
            for (var i = 0; i < pages.length; i++) {
                pages[i].style.display = 'none';
            }

            // Show the selected page
            var page = document.getElementById(pageId);
            if (page) {
                page.style.display = 'block';
            }
        }
    </script>
</body>
</html>
