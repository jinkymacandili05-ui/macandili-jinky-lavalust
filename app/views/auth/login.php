<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in | Stockroom</title>
    <style>
        :root { --ink: #17221b; --muted: #69756c; --line: #dce4dc; --paper: #f6f8f3; --accent: #d86b3f; --accent-dark: #b84d26; }
        * { box-sizing: border-box; } body { margin: 0; min-height: 100vh; display: grid; place-items: center; padding: 24px; color: var(--ink); background: radial-gradient(circle at top right, #e7efe2 0, transparent 40%), var(--paper); font: 16px/1.5 Georgia, serif; }
        main { width: min(100%, 430px); } .eyebrow { color: var(--accent); font: 700 12px/1.2 Arial, sans-serif; letter-spacing: .14em; text-transform: uppercase; } h1 { margin: 8px 0 8px; font-size: clamp(38px, 10vw, 58px); line-height: .95; } p { color: var(--muted); } form { margin-top: 30px; padding: 28px; border: 1px solid var(--line); background: rgba(255,255,255,.82); box-shadow: 12px 12px 0 #e4ebe1; } label { display: block; margin: 16px 0 6px; font: 700 12px Arial, sans-serif; text-transform: uppercase; letter-spacing: .08em; } input { width: 100%; padding: 13px 14px; border: 1px solid #bdcabe; border-radius: 2px; font: inherit; } button { width: 100%; margin-top: 22px; padding: 14px; border: 0; border-radius: 2px; color: white; background: var(--accent); font: 700 14px Arial, sans-serif; cursor: pointer; } button:hover { background: var(--accent-dark); } .error { padding: 10px 12px; color: #8c2f20; background: #fbe8e2; font-family: Arial, sans-serif; font-size: 14px; } .switch { margin-top: 22px; text-align: center; font-family: Arial, sans-serif; font-size: 14px; } a { color: var(--accent-dark); font-weight: 700; }
    </style>
</head>
<body>
<main>
    <div class="eyebrow">Stockroom / secure access</div>
    <h1>Welcome back.</h1>
    <p>Sign in to manage the product inventory.</p>
    <form method="post" action="<?= base_url('login') ?>">
        <?php if (!empty($error)): ?><div class="error"><?= html_escape($error) ?></div><?php endif; ?>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" autocomplete="email" required>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" autocomplete="current-password" required>
        <button type="submit">Sign in</button>
    </form>
    <div class="switch">New here? <a href="<?= base_url('register') ?>">Create an account</a></div>
</main>
</body>
</html>
