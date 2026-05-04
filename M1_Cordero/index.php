<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume - Jose Cordero</title>
    style.css
</head>
<body>

<?php
$name = "JOSE M. CORDERO";
$location = "Taguig, Philippines";
$phone = "0947-266-8154";
$email = "josecords2006@gmail.com";

$objective = "To continue developing my skills in web development, programming, and problem-solving by creating simple but functional websites and applications. I aim to gain more hands-on experience using HTML, CSS, and PHP.";
$profile = "As an aspiring IT professional and Information Technology student with basic knowledge in web development, including HTML, CSS, and PHP. I am interested in creating clean, organized, and user-friendly websites.";

$skills = [
    "Basic PHP Programming",
    "HTML and CSS",
    "Problem Solving",
    "Time Management",
    "Quick Learner",
    "Teamwork"
];

$certifications = [
    "Cisco Certified - Java",
    "Cisco Certified - JavaScript",
    "Cisco Certified - Python"
];

$experience = [
    "Created a personal resume webpage using HTML, CSS, and PHP as part of a school activity.",
    "Completed academic activities related to web development, basic programming, and system development.",
    "Practiced organizing source code properly to make the webpage easier to read, edit, and maintain."
];

$education = [
    "Senior High School - St. Paul College of Makati",
    "BS Information Technology - FEU TECH (Current)"
];

$personal_info = [
    "Birthday" => "February 19, 2006",
    "Nationality" => "Filipino",
    "Languages" => "English, Filipino"
];

$social_links = [
    "GitHub" => "https://github.com/JZZ19",
    "Facebook" => "https://www.facebook.com/joe.mcordero.3"
];
?>

<div class="resume">

    <!-- HEADER -->
    <div class="header">
        <div>
            <h1><?php echo $name; ?></h1>
            <p><?php echo $location; ?></p>
            <p><?php echo $phone; ?> | <?php echo $email; ?></p>
        </div>
        profile.jpg
    </div>

    <!-- MAIN BODY -->
    <div class="main">

        <!-- SIDEBAR -->
        <div class="sidebar">
            <h3>SKILLS</h3>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>

            <h3>CERTIFICATIONS</h3>
            <ul>
                <?php foreach ($certifications as $cert): ?>
                    <li><?php echo $cert; ?></li>
                <?php endforeach; ?>
            </ul>

            <h3>PERSONAL INFO</h3>
            <ul>
                <?php foreach ($personal_info as $key => $value): ?>
                    <li><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></li>
                <?php endforeach; ?>
            </ul>

            <h3>CONTACT / LINKS</h3>
            <ul>
                <?php foreach ($social_links as $platform => $link): ?>
                    <li>
                        <?php echo $platform; ?>:
                        <?php echo $link; ?>blank">
                            <?php echo $link; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <div class="section">
                <h2>OBJECTIVE</h2>
                <p><?php echo $objective; ?></p>
            </div>

            <div class="section">
                <h2>PROFILE</h2>
                <p><?php echo $profile; ?></p>
            </div>

            <div class="section">
                <h2>EXPERIENCE</h2>
                <ul>
                    <?php foreach ($experience as $exp): ?>
                        <li><?php echo $exp; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="section">
                <h2>EDUCATION</h2>
                <ul>
                    <?php foreach ($education as $edu): ?>
                        <li><?php echo $edu; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </div>
</div>

</body>
</html