<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Transform Learning</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html, body {
        font-family: 'Roboto Slab', serif;
        background: linear-gradient(to right, #007AFF, #1A1A72);
        color: #FFF;
        margin: 0;
        min-height: 100vh;
        padding: 0;
        scroll-behavior: smooth;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
    }
    /* Main Content Container */
    .main-content {
        flex: 1;
    }
    /* Navbar */
    .navbar {
        background: rgba(0, 0, 0, 0.7);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 50px;
        height: 70px;
        z-index: 1000;
        transition: background 0.3s ease, box-shadow 0.3s ease;
    }
    .navbar.scrolled {
        background: #1A1A72;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }
    .navbar .logo {
        display: flex;
        align-items: center;
    }
    .navbar .logo img {
        height: 40px;
        margin-right: 10px;
    }
    .navbar .logo span {
        color: #FFF;
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .navbar a {
        color: #FFF;
        text-decoration: none;
        margin: 0 15px;
        font-weight: 500;
        font-size: 16px;
        transition: color 0.3s ease;
    }
    .navbar a:hover {
        color: #FFD700;
    }
    .navbar .login, .navbar .signup {
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 14px;
    }
    .navbar .login {
        background: transparent;
        border: 2px solid #FFF;
        color: #FFF;
    }
    .navbar .signup {
        background: #FFD700;
        color: #000;
        border: none;
    }
    .navbar .signup:hover {
        background: #FFC107;
    }
    /* Section Styles */
    .section {
        padding: 120px 20px;
        text-align: center;
        margin-top: 70px;
    }
    .section h1, .section h2 {
        margin-bottom: 20px;
    }
    .section p {
        line-height: 1.8;
        font-size: 18px;
        margin-bottom: 20px;
    }
    .cta {
        background-color: #FFD700;
        color: #000;
        padding: 15px 30px;
        border-radius: 30px;
        font-size: 18px;
        font-weight: bold;
        display: inline-block;
        border: none;
        text-decoration: none;
        transition: background 0.3s ease;
    }
    .cta:hover {
        background: #FFC107;
    }
    /* About Section */
    .about-content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 30px;
    }
    .about-text {
        flex: 1;
        min-width: 300px;
        max-width: 500px;
        text-align: left;
    }
    .about-text h4 {
        font-size: 18px;
        line-height: 1.6;
    }
    .about-image img {
        width: 100%;
        max-width: 400px;
        border-radius: 20px;
    }
    /* Features Section */
    .features-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }
    .glass-card {
        flex: 1;
        max-width: 300px;
        padding: 20px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 20px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        text-align: center;
        transition: transform 0.3s ease;
    }
    .glass-card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 15px;
    }
    .glass-card:hover {
        transform: scale(1.05);
    }
    /* Footer */
    .footer {
        text-align: center;
        padding: 20px;
        background: #1A1A72;
        display: flex;
        justify-content: center;
        gap: 15px;
        position: relative;
        bottom: 0;
        width: 100%;
        color: white;
    }
    .footer img {
        width: 30px;
        height: 30px;
    }
    @media (max-width: 768px) {
        .navbar {
            padding: 10px 20px;
        }
        .navbar a {
            margin: 0 10px;
            font-size: 14px;
        }
        .cta {
            font-size: 16px;
        }
        .about-content {
            flex-direction: column;
            align-items: center;
        }
        .about-image img {
            max-width: 300px;
        }
        .features-container {
            flex-direction: column;
        }
        .glass-card {
            max-width: 100%;
            margin-bottom: 20px;
        }
    }
</style>

</head>
<body>
    <div class="navbar" id="navbar">
        <div class="logo">
            <img src="assets/images/favicon.png" alt="Logo">
            <span>Learnify</span>
        </div>
        <div>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="pages/login.php" class="login">Login</a>
            <a href="pages/signup.php" class="signup">Sign Up</a>
        </div>
    </div>

    <div id="home" class="section">
        <div class="about-content">
            <div class="about-text">
                <h1>Transform Your Learning Experience</h1>
                <p>Join Learnify and explore a vast collection of features designed to enhance your skills and knowledge.</p>
                <a href="#signup" class="cta">Start Learning Now</a>
            </div>
            <div>
                <img src="assets/images/logo.jpg" alt="Learning" style="max-width: 400px; border-radius: 20px;">
            </div>
        </div>
    </div>

    <div id="about" class="section">
        <div class="about-content">
            <div>
                <img src="assets/images/image1.webp" alt="Learnify Logo" style="max-width: 400px; border-radius: 20px;">
            </div>
            <div class="about-text">
                <h2>About Learnify</h2>
                <p>Learnify is an innovative e-learning platform designed to make education accessible to everyone. It provides a seamless learning experience with interactive lessons, expert instructors, and self-paced learning.</p>
            </div>
        </div>
    </div>

    <div id="features" class="section">
        <h2>Features</h2>
        <div class="features-container">
            <div class="glass-card">
                <h3>Interactive Learning</h3>
                <img src="assets/images/interactive.jpeg" alt="Interactive Learning">
                <p>Engage with interactive video lessons tailored to your needs.</p>
            </div>
            <div class="glass-card">
                <h3>Expert Instructors</h3>
                <img src="assets/images/mentorship.webp" alt="Expert Instructors">
                <p>Learn from industry experts with years of experience.</p>
            </div>
            <div class="glass-card">
                <h3>Self-paced Learning</h3>
                <img src="assets/images/self_learing.jpg" alt="Self-paced Learning">
                <p>Learn at your own pace wherever and whenever.</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <a href="#"><img src="assets/images/Instagram_icon.png" alt="Instagram"></a>
        <a href="#"><img src="assets/images/Facebook_f_logo_(2019).svg" alt="Facebook"></a>
        <a href="mailto:random@email.com"><img src="assets/images/Mail_(iOS).svg" alt="Mail"></a>
        <a href="tel:+9191919199"><img src="assets/images/phone_icon.png" alt="Phone"></a>
        <a href="#"><img src="assets/images/X_logo_2023.svg" alt="X"></a>
    </div>
    
    <script>
        const navbar = document.getElementById("navbar");
        window.addEventListener("scroll", function() {
            if (window.scrollY > 70) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
</body>
</html>
