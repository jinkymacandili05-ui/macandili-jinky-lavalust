<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); $editing = !empty($product['id']); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $editing ? 'Edit' : 'Add' ?> product | Stockroom</title>
    <style>
        :root { --ink: #17221b; --muted: #69756c; --line: #dce4dc; --paper: #f6f8f3; --accent: #d86b3f; }
        * { box-sizing: border-box; } body { margin: 0; color: var(--ink); background: linear-gradient(120deg, var(--paper) 0 67%, #e5eee0 67%); font: 16px/1.5 Georgia, serif; } header, main { width: min(800px, calc(100% - 40px)); margin: auto; } header { padding: 28px 0 70px; } header a { color: #b84d26; font: 700 13px Arial, sans-serif; text-decoration: none; } .eyebrow { color: var(--accent); font: 700 12px Arial, sans-serif; letter-spacing: .15em; text-transform: uppercase; } h1 { margin: 9px 0 28px; font-size: clamp(42px, 8vw, 70px); line-height: .9; font-weight: 400; } form { padding: 30px; border: 1px solid var(--line); background: white; } .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; } .full { grid-column: 1 / -1; } label { display: block; margin-bottom: 7px; font: 700 12px Arial, sans-serif; letter-spacing: .08em; text-transform: uppercase; } input, textarea { width: 100%; padding: 13px; border: 1px solid #bdcabe; border-radius: 1px; color: var(--ink); font: inherit; } textarea { min-height: 130px; resize: vertical; } .error { margin-bottom: 20px; padding: 11px 13px; color: #8c2f20; background: #fbe8e2; font: 14px Arial, sans-serif; } .actions { display: flex; align-items: center; gap: 20px; margin-top: 25px; } button { padding: 14px 22px; border: 0; color: white; background: var(--accent); font: 700 13px Arial, sans-serif; cursor: pointer; } .cancel { color: var(--muted); font: 13px Arial, sans-serif; text-decoration: none; } @media (max-width: 600px) { header { padding-bottom: 40px; } header, main { width: min(100% - 28px, 800px); } form { padding: 20px; } .grid { grid-template-columns: 1fr; } .full { grid-column: auto; } }
    </style>
</head>
<body>
<header><a href="<?= base_url('products') ?>">&larr; Back to products</a></header>
<main>
    <div class="eyebrow">Inventory / <?= $editing ? 'update' : 'new entry' ?></div>
    <h1><?= $editing ? 'Edit product.' : 'Add a product.' ?></h1>
    <form method="post" action="<?= base_url($editing ? 'products/update/' . (int) $product['id'] : 'products') ?>">
        <?php if (!empty($error)): ?><div class="error"><?= html_escape($error) ?></div><?php endif; ?>
        <div class="grid">
            <div class="full"><label for="product_name">Product name</label><input id="product_name" name="product_name" maxlength="100" value="<?= html_escape($product['product_name'] ?? '') ?>" required></div>
            <div class="full"><label for="description">Description</label><textarea id="description" name="description"><?= html_escape($product['description'] ?? '') ?></textarea></div>
            <div><label for="price">Price</label><input id="price" name="price" type="number" min="0" step="0.01" value="<?= html_escape($product['price'] ?? '') ?>" required></div>
            <div><label for="quantity">Quantity</label><input id="quantity" name="quantity" type="number" min="0" step="1" value="<?= html_escape($product['quantity'] ?? '') ?>" required></div>
        </div>
        <div class="actions"><button type="submit"><?= $editing ? 'Save changes' : 'Add product' ?></button><a class="cancel" href="<?= base_url('products') ?>">Cancel</a></div>
    </form>
</main>
</body>
</html>
