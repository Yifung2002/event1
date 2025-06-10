<?php
include('stuheader.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About DunBian Club | Event Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        /* Main Content Area */
        .main-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .page-title {
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
            color: black;
            margin-bottom: 1rem;
        }

        .page-wrapper {
            min-height: 100vh;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Intro Section */
        .intro-section {
            position: relative;
            padding: 100px 40px;
            margin-bottom: 60px;
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
        }

        .intro-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/dunbianclub.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(0.5);
            z-index: -1;
        }

        .intro-content {
            position: relative;
            z-index: 1;
            color: white;
            max-width: 800px;
            margin: 0 auto;
        }

        .main-description {
            font-size: 1.2rem;
            line-height: 1.8;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Section Header */
        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 2.4rem;
            color: #000;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: #EE204D;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Mission & Vision Section */
        .mission-vision-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .mission-box,
        .vision-box {
            background: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .mission-box:hover,
        .vision-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .icon-container {
            width: 70px;
            height: 70px;
            background: #f5f5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .icon-container i {
            font-size: 30px;
            color: #205f8a;
        }

        .mission-box h2,
        .vision-box h2 {
            color: #000;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .mission-box p,
        .vision-box p {
            color: #000;
            font-size: 1rem;
            line-height: 1.7;
        }

        /* Activities Section */
        .activities-section {
            margin-bottom: 60px;
        }

        .activities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .activity-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .activity-card h3 {
            color: #000;
            font-size: 1.6rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .activity-card p {
            color: #000;
            margin-bottom: 20px;
        }

        .slider-container {
            margin-top: 20px;
            position: relative;
        }

        .activity-slider {
            width: 100%;
        }

        .slider-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .learn-more {
            display: inline-flex;
            align-items: center;
            color: #205f8a;
            font-weight: 600;
            text-decoration: none;
            margin-top: 20px;
            transition: color 0.3s ease;
        }

        .learn-more i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .learn-more:hover {
            color: #174a6e;
        }

        .learn-more:hover i {
            transform: translateX(5px);
        }

        /* Preview Section */
        .preview-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .preview-box {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .preview-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .preview-image {
            height: 200px;
            overflow: hidden;
        }

        .preview-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .preview-box:hover .preview-image img {
            transform: scale(1.1);
        }

        .preview-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .preview-content h3 {
            color: #000;
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .preview-content p {
            color: #000;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .preview-link {
            display: inline-flex;
            align-items: center;
            color: #EE204D;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .preview-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .preview-link:hover {
            color: #174a6e;
        }

        .preview-link:hover i {
            transform: translateX(5px);
        }

        /* Team Section */
        .team-section {
            margin-bottom: 60px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .team-member {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .member-image {
            position: relative;
            height: 280px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-member:hover .member-image img {
            transform: scale(1.05);
        }

        .member-info {
            padding: 20px;
            text-align: center;
        }

        .member-info h3 {
            color: #000;
            font-size: 1.2rem;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .member-info h4 {
            color: #000;
            font-size: 1rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .member-info p {
            color: #000;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Slick Slider Custom Styles */
        .slick-dots li button:before {
            color: #205f8a;
        }

        .slick-dots li.slick-active button:before {
            color: #205f8a;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .intro-section {
                padding: 80px 20px;
            }

            .section-header h2 {
                font-size: 2rem;
            }

            .mission-box,
            .vision-box {
                padding: 30px 20px;
            }

            .activity-card {
                padding: 20px;
            }

            .preview-content {
                padding: 20px;
            }

            .member-image {
                height: 240px;
            }
        }

        @media (max-width: 576px) {
            .intro-section {
                padding: 60px 15px;
            }

            .main-description {
                font-size: 1.1rem;
            }

            .section-header h2 {
                font-size: 1.8rem;
            }

            .mission-box h2,
            .vision-box h2 {
                font-size: 1.6rem;
            }

            .activity-card h3 {
                font-size: 1.4rem;
            }

            .preview-content h3 {
                font-size: 1.3rem;
            }

            .member-info h3 {
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-content">
        <h1 class="page-title">About Us</h1>
    </div>

    <div class="page-wrapper">
        <!-- Main Content -->
        <div class="about-container">
            <!-- Introduction Section with Background Image -->
            <section class="intro-section">
                <div class="intro-content">

                    <p class="main-description">
                        Welcome to DunBian Club, a platform that brings together students passionate about public speaking and critical thinking.
                        The club is established in 2017, we have been dedicated to mastering debate skills, enhancing communication abilities,
                        and building future leaders through competitive and collaborative experiences.
                    </p>
                </div>
            </section>

            <!-- Mission & Vision with Cards -->
            <section class="mission-vision-section">
                <div class="mission-box">
                    <div class="icon-container">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2>Our Mission</h2>
                    <p>We strive to promote the art of debate, create an environment where students can learn, practice and understand
                        the different aspects of debating through different engaging activities.</p>
                </div>
                <div class="vision-box">
                    <div class="icon-container">
                        <i class="fas fa-binoculars"></i>
                    </div>
                    <h2>Our Vision</h2>
                    <p>To be the leading debate club that shapes confident, articulate and thoughtful leaders of tomorrow.</p>
                </div>
            </section>

            <!-- What We Do Section with Sliders -->
            <section class="activities-section">
                <div class="section-header">
                    <h2>What We Do</h2>
                </div>
                <div class="activities-grid">
                    <div class="activity-card">
                        <h3>Competitions</h3>
                        <p>Participate in national and international debate tournaments to showcase skills and represent our university.</p>

                        <!-- Competition Slider -->
                        <div class="slider-container">
                            <div class="activity-slider competition-slider">
                                <div class="slider-item">
                                    <img src="img/competition1.jpg" alt="Competition 1">
                                </div>
                                <div class="slider-item">
                                    <img src="img/competition2.jpg" alt="Competition 2">
                                </div>
                                <div class="slider-item">
                                    <img src="img/competition.jpg" alt="Competition 3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="activity-card">
                        <h3>Activity Sessions</h3>
                        <p>Regular sessions that introduce debate techniques, boost critical thinking, public speaking, and argumentation skills.</p>

                        <!-- Activity Sessions Slider -->
                        <div class="slider-container">
                            <div class="activity-slider session-slider">
                                <div class="slider-item">
                                    <img src="img/session1.jpg" alt="Session 1">
                                </div>
                                <div class="slider-item">
                                    <img src="img/session2.jpg" alt="Session 2">
                                </div>
                                <div class="slider-item">
                                    <img src="img/session3.jpg" alt="Session 3">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Event & Recruitment Preview -->
            <section class="preview-section">
                <div class="preview-box">
                    <div class="preview-image">
                        <img src="img/competition.jpg" alt="Events Preview">
                    </div>
                    <div class="preview-content">
                        <h3>Our Events</h3>
                        <p>Discover upcoming debates, workshops, and competitions designed to enhance your skills and showcase your talent. Join us for a variety of engaging activities throughout the academic year.</p>
                        <a href="eventlisting.php" class="preview-link">Explore Events <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="preview-box">
                    <div class="preview-image">
                        <img src="img/dunbianactivities.jpg" alt="Recruitment Preview">
                    </div>
                    <div class="preview-content">
                        <h3>Join Our Team</h3>
                        <p>Looking to be part of something meaningful? We're always looking for passionate individuals to join our team as members, volunteers, or officers. Find out how you can contribute.</p>
                        <a href="recruitmentopportunities.php" class="preview-link">View Opportunities <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <!-- Leadership Team Section -->
            <section class="team-section">
                <div class="section-header">
                    <h2>Our Leadership Team</h2>
                </div>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="img/martin.jpg" alt="President" />
                        </div>
                        <div class="member-info">
                            <h3>Club President</h3>
                            <h4>Lim Teck Sheng</h4>
                            <p>Leading the club with vision and dedication, ensuring activities align with our goals.</p>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <img src="img/chuakaizen.jpg" alt="Vice President" />
                        </div>
                        <div class="member-info">
                            <h3>Vice President</h3>
                            <h4>Chua Kai Zen</h4>
                            <p>Assists the President in managing club activities and supports growth initiatives.</p>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <img src="img/tianxian.jpg" alt="Vice President" />
                        </div>
                        <div class="member-info">
                            <h3>Vice President</h3>
                            <h4>Tan Tian Xian</h4>
                            <p>Coordinates with team leaders and ensures operational excellence across initiatives.</p>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <img src="img/yewen.jpg" alt="Secretary" />
                        </div>
                        <div class="member-info">
                            <h3>Secretary</h3>
                            <h4>Tan Ye Wen</h4>
                            <p>Manages administrative duties, maintains records, and organizes communications.</p>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <img src="img/yingyan.jpg" alt="Treasurer" />
                        </div>
                        <div class="member-info">
                            <h3>Treasurer</h3>
                            <h4>Ling Ying Yan</h4>
                            <p>Oversees financial activities, manages budget, and ensures transparency.</p>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <img src="img/jocelyn.jpg" alt="Multimedia" />
                        </div>
                        <div class="member-info">
                            <h3>Multimedia Leader</h3>
                            <h4>Jocelyn Song Zhi Wei</h4>
                            <p>Creates and manages multimedia content for promotions and digital presence.</p>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <img src="img/yiqian.jpg" alt="Event" />
                        </div>
                        <div class="member-info">
                            <h3>Event Coordinator</h3>
                            <h4>Choi Yi Qian</h4>
                            <p>Organizes and manages all club events, ensuring seamless execution.</p>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <img src="img/yikwon.jpg" alt="GeneralAffairs" />
                        </div>
                        <div class="member-info">
                            <h3>General Affairs</h3>
                            <h4>Chow Yik Wonn</h4>
                            <p>Handles internal operations, membership management, and communication.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>

</html>
<?php
include('stufooter.php');
?>