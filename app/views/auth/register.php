<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create account | Stockroom</title>
    <style>
        :root { --ink: #17221b; --muted: #69756c; --line: #dce4dc; --paper: #f6f8f3; --accent: #d86b3f; }
        * { box-sizing: border-box; } body { margin: 0; min-height: 100vh; display: grid; place-items: center; padding: 24px; color: var(--ink); background: linear-gradient(135deg, #f6f8f3 0 55%, #e5eee0 55%); font: 16px/1.5 Georgia, serif; }
        main { width: min(100%, 430px); } .eyebrow { color: var(--accent); font: 700 12px Arial, sans-serif; letter-spacing: .14em; text-transform: uppercase; } h1 { margin: 8px 0; font-size: clamp(38px, 10vw, 56px); line-height: .95; } p { color: var(--muted); } form { margin-top: 28px; padding: 28px; border: 1px solid var(--line); background: white; } label { display: block; margin: 15px 0 6px; font: 700 12px Arial, sans-serif; text-transform: uppercase; letter-spacing: .08em; } input { width: 100%; padding: 12px; border: 1px solid #bdcabe; font: inherit; } button { width: 100%; margin-top: 22px; padding: 14px; border: 0; color: white; background: var(--accent); font-weight: 700; cursor: pointer; } .error { padding: 10px; color: #8c2f20; background: #fbe8e2; font: 14px Arial, sans-serif; } .switch { margin-top: 20px; text-align: center; font: 14px Arial, sans-serif; } a { color: #b84d26; font-weight: 700; }
    </style>
</head>
<body>
<main>
    <div class="eyebrow">Stockroom / first access</div>
    <h1>Create your account.</h1>
    <p>Set up an account to start managing products.</p>
    <form method="post" action="<?= base_url('register') ?>">
        <?php if (!empty($error)): ?><div class="error"><?= html_escape($error) ?></div><?php endif; ?>
        <label for="username">Name</label>
        <input id="username" name="username" required>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" minlength="8" required>
        <button type="submit">Create account</button>
    </form>
    <div class="switch">Already registered? <a href="<?= base_url('login') ?>">Sign in</a></div>
</main>
</body>
</html>
