<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

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

        .container {
            max-width: 850px;
            margin: 30px auto;
            background: #ffffff;
            padding: 40px 45px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(49, 46, 129, 0.15);
            border-top: 7px solid #4f46e5;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 15px;
            background: #eef2ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 45px;
        }

        h1 {
            color: #312e81;
            margin: 10px 0;
            font-size: 32px;
        }

        .student-id {
            display: inline-block;
            background: #4f46e5;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
        }

        .profile-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            margin-top: 30px;
        }

        .info-box {
            background: #f5f3ff;
            padding: 18px;
            border-radius: 12px;
            border: 1px solid #ddd6fe;
        }

        .info-box.full {
            grid-column: span 2;
        }

        .label {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 6px;
            font-weight: bold;
        }

        .value {
            color: #312e81;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
        }

        .navigation {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 35px;
        }

        .navigation a {
            display: inline-block;
            padding: 13px 26px;
            background: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .navigation a:hover {
            background: #3730a3;
            transform: translateY(-3px);
        }

        .navigation a.profile {
            background: #7c3aed;
        }

        .navigation a.profile:hover {
            background: #6d28d9;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 10px;
            }

            .container {
                margin: 20px auto;
                padding: 30px 20px;
            }

            .profile-info {
                grid-template-columns: 1fr;
            }

            .info-box.full {
                grid-column: span 1;
            }

            .navigation {
                flex-direction: column;
            }

            .navigation a {
                width: 100%;
                text-align: center;
            }

            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="profile-header">

            <div class="profile-icon">
                👤
            </div>

            <div class="student-id">
                <?= $student_id; ?>
            </div>

            <h1>Student Profile</h1>

        </div>

        <div class="profile-info">

            <div class="info-box">
                <div class="label">FULL NAME</div>
                <div class="value">
                    <?= $name; ?>
                </div>
            </div>

            <div class="info-box">
                <div class="label">STUDENT ID</div>
                <div class="value">
                    <?= $student_id; ?>
                </div>
            </div>

            <div class="info-box">
                <div class="label">COURSE</div>
                <div class="value">
                    <?= $course; ?>
                </div>
            </div>

            <div class="info-box">
                <div class="label">YEAR LEVEL</div>
                <div class="value">
                    <?= $year; ?>
                </div>
            </div>

            <div class="info-box">
                <div class="label">SECTION</div>
                <div class="value">
                    <?= $section; ?>
                </div>
            </div>

            <div class="info-box">
                <div class="label">EMAIL</div>
                <div class="value">
                    <?= $email; ?>
                </div>
            </div>

            <div class="info-box">
                <div class="label">ADDRESS</div>
                <div class="value">
                    <?= $address; ?>
                </div>
            </div>

            <div class="info-box">
                <div class="label">CONTACT NUMBER</div>
                <div class="value">
                    <?= $contact; ?>
                </div>
            </div>

            <div class="info-box full">
                <div class="label">SKILLS</div>
                <div class="value">
                    <?= $skills; ?>
                </div>
            </div>

            <div class="info-box full">
                <div class="label">HOBBIES</div>
                <div class="value">
                    <?= $hobbies; ?>
                </div>
            </div>

            <div class="info-box full">
                <div class="label">ABOUT ME</div>
                <div class="value">
                    <?= $description; ?>
                </div>
            </div>

        </div>

        <div class="navigation">

            <a href="<?= site_url('student'); ?>">
                🏠 Home
            </a>

            <a href="<?= site_url('student/profile'); ?>" class="profile">
                👤 Student Profile
            </a>

        </div>

    </div>

</body>
</html>