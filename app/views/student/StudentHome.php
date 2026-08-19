<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Hub | My Student Home</title>

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
            margin: 50px auto;
            background: #ffffff;
            padding: 50px 45px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(49, 46, 129, 0.15);
            text-align: center;
            border-top: 7px solid #4f46e5;
        }

        .welcome-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            background: #eef2ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
        }

        h1 {
            color: #312e81;
            margin-bottom: 12px;
            font-size: 32px;
        }

        .subtitle {
            color: #6b7280;
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .welcome-message {
            background: #f5f3ff;
            padding: 25px;
            border-radius: 16px;
            margin: 25px 0;
            color: #4b5563;
            line-height: 1.8;
            border: 1px solid #ddd6fe;
        }

        .student-id {
            display: inline-block;
            background: #4f46e5;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .navigation {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
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
            box-shadow: 0 8px 15px rgba(79, 70, 229, 0.25);
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
                padding: 35px 20px;
            }

            h1 {
                font-size: 26px;
            }

            .subtitle {
                font-size: 16px;
            }

            .navigation {
                flex-direction: column;
            }

            .navigation a {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="welcome-icon">
            🎓
        </div>

        <div class="student-id">
            <?= $student_id; ?>
        </div>

        <h1>Welcome to My Student Hub!</h1>

        <p class="subtitle">
            Hello! Welcome to my personal student information page.
        </p>

        <div class="welcome-message">
            This page contains my basic student information and profile.
            You can explore my student profile by clicking the button below.
        </div>

        <div class="navigation">
            <a href="<?= site_url('student'); ?>">
                🏠 Home
            </a>

              <a href="<?= site_url('student/profile'); ?>">
        👤 Student Profile
    </a>
        </div>

    </div>

</body>
</html>