<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile | Student Information</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e0e7ff, #f5f3ff);
            min-height: 100vh;
            padding: 40px 20px;
            color: #1e1b4b;
        }

        .profile-card {
            max-width: 850px;
            margin: auto;
            background: white;
            padding: 45px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(49, 46, 129, 0.15);
            border-top: 7px solid #4f46e5;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .profile-icon {
            width: 85px;
            height: 85px;
            margin: 0 auto 15px;
            background: #eef2ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 43px;
        }

        .profile-header h1 {
            margin-bottom: 8px;
            color: #312e81;
            font-size: 30px;
        }

        .profile-header p {
            color: #6b7280;
            margin: 0;
        }

        .section-title {
            margin-top: 30px;
            margin-bottom: 15px;
            color: #3730a3;
            font-size: 20px;
            border-left: 5px solid #7c3aed;
            padding-left: 12px;
        }

        .info {
            padding: 15px 18px;
            margin-bottom: 8px;
            background: #f8f7ff;
            border-radius: 10px;
            line-height: 1.6;
            border: 1px solid #ede9fe;
        }

        .label {
            font-weight: bold;
            color: #3730a3;
        }

        .description {
            background: #f5f3ff;
            padding: 18px;
            border-radius: 12px;
            line-height: 1.8;
            color: #4b5563;
            border: 1px solid #ddd6fe;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .social-links a {
            text-decoration: none;
            background: #4f46e5;
            color: white;
            padding: 11px 20px;
            border-radius: 9px;
            transition: 0.3s;
            font-weight: bold;
        }

        .social-links a:hover {
            background: #3730a3;
            transform: translateY(-2px);
        }

        .navigation {
            display: flex;
            justify-content: center;
            margin-top: 35px;
        }

        .navigation a {
            text-decoration: none;
            background: #7c3aed;
            color: white;
            padding: 13px 26px;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .navigation a:hover {
            background: #6d28d9;
            transform: translateY(-2px);
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 10px;
            }

            .profile-card {
                padding: 30px 20px;
            }

            .profile-header h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

<div class="profile-card">

    <div class="profile-header">
        <div class="profile-icon">👨‍🎓</div>

        <h1>My Student Profile</h1>

        <p>Personal and Academic Information</p>
    </div>

    <h2 class="section-title">Basic Information</h2>

    <div class="info">
        <span class="label">Student ID:</span>
        <?= $student_id; ?>
    </div>

    <div class="info">
        <span class="label">Name:</span>
        <?= $name; ?>
    </div>

    <div class="info">
        <span class="label">Course:</span>
        <?= $course; ?>
    </div>

    <div class="info">
        <span class="label">Year Level:</span>
        <?= $year; ?>
    </div>

    <div class="info">
        <span class="label">Section:</span>
        <?= $section; ?>
    </div>

    <div class="info">
        <span class="label">Email:</span>
        <?= $email; ?>
    </div>

    <h2 class="section-title">Additional Information</h2>

    <div class="info">
        <span class="label">Address:</span>
        <?= $address; ?>
    </div>

    <div class="info">
        <span class="label">Contact Number:</span>
        <?= $contact; ?>
    </div>

    <div class="info">
        <span class="label">Skills:</span>
        <?= $skills; ?>
    </div>

    <div class="info">
        <span class="label">Hobbies:</span>
        <?= $hobbies; ?>
    </div>

    <h2 class="section-title">Profile Description</h2>

    <div class="description">
        <?= $description; ?>
    </div>

    <h2 class="section-title">Social Media</h2>

    <div class="social-links">
        <a href="<?= $facebook; ?>" target="_blank">Facebook</a>
        <a href="<?= $github; ?>" target="_blank">GitHub</a>
    </div>

    <div class="navigation">
    <a href="<?= site_url('student'); ?>">
        ← Back to Student Home
    </a>
</div>

</div>

</body>
</html>