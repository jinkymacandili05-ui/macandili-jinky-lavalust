<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>User Management</title>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        min-height: 100vh;
        padding: 40px 20px;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .container {
        max-width: 1100px;
        margin: auto;
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
    }

    .header {
        padding: 30px;
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: white;
    }

    .header h1 {
        font-size: 30px;
        margin-bottom: 8px;
    }

    .header p {
        font-size: 15px;
        opacity: 0.9;
    }

    .table-container {
        padding: 25px;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        min-width: 700px;
    }

    th {
        padding: 16px;
        text-align: left;
        background-color: #f3f4f6;
        color: #4b5563;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 2px solid #e5e7eb;
    }

    td {
        padding: 17px 16px;
        color: #374151;
        border-bottom: 1px solid #eeeeee;
    }

    tr {
        transition: 0.2s;
    }

    tbody tr:hover {
        background-color: #f5f3ff;
        transform: scale(1.005);
    }

    td:first-child {
        font-weight: bold;
        color: #6366f1;
    }

    .username {
        display: inline-block;
        padding: 7px 12px;
        border-radius: 20px;
        background-color: #ede9fe;
        color: #6d28d9;
        font-weight: bold;
        font-size: 13px;
    }

    .email {
        color: #6b7280;
    }

    .no-data {
        text-align: center;
        padding: 35px;
        color: #9ca3af;
        font-size: 16px;
    }

    .footer {
        padding: 18px 25px;
        background-color: #f9fafb;
        border-top: 1px solid #eeeeee;
        color: #6b7280;
        font-size: 13px;
        text-align: center;
    }

    @media (max-width: 700px) {

        body {
            padding: 20px 10px;
        }

        .container {
            border-radius: 15px;
        }

        .header {
            padding: 25px 20px;
        }

        .header h1 {
            font-size: 24px;
        }

        .table-container {
            padding: 15px;
        }
    }
</style>
```

</head>

<body>

<div class="container">

```
<div class="header">
    <h1>👥 User Management</h1>
    <p>View and manage registered users in the system.</p>
</div>

<div class="table-container">

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Username</th>
            </tr>
        </thead>

        <tbody>

        <?php if (!empty($users)): ?>

            <?php foreach ($users as $user): ?>

                <tr>

                    <td>
                        #<?= htmlspecialchars($user['id']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($user['firstname']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($user['lastname']) ?>
                    </td>

                    <td class="email">
                        <?= htmlspecialchars($user['email']) ?>
                    </td>

                    <td>
                        <span class="username">
                            @<?= htmlspecialchars($user['username']) ?>
                        </span>
                    </td>

                </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>
                <td colspan="5" class="no-data">
                    👤 No users found.
                </td>
            </tr>

        <?php endif; ?>

        </tbody>

    </table>

</div>

<div class="footer">
    User Management System
</div>
```

</div>

</body>
</html>
