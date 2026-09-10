<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products | Stockroom</title>
    <style>
        :root { --ink: #17221b; --muted: #69756c; --line: #dce4dc; --paper: #f6f8f3; --accent: #d86b3f; --accent-dark: #b84d26; }
        * { box-sizing: border-box; } body { margin: 0; color: var(--ink); background: var(--paper); font: 16px/1.45 Georgia, serif; } header, main { width: min(1120px, calc(100% - 40px)); margin: auto; } header { display: flex; align-items: center; justify-content: space-between; padding: 28px 0 55px; } .brand { font-weight: 700; letter-spacing: .03em; } nav { display: flex; align-items: center; gap: 18px; font: 13px Arial, sans-serif; } a { color: var(--accent-dark); font-weight: 700; text-decoration: none; } .logout { color: var(--muted); } .intro { display: flex; align-items: end; justify-content: space-between; gap: 20px; padding-bottom: 30px; border-bottom: 1px solid var(--line); } .eyebrow { color: var(--accent); font: 700 12px Arial, sans-serif; letter-spacing: .15em; text-transform: uppercase; } h1 { margin: 8px 0 0; font-size: clamp(42px, 8vw, 76px); line-height: .9; font-weight: 400; } .add { padding: 13px 17px; color: white; background: var(--accent); font: 700 13px Arial, sans-serif; } .empty { margin: 50px 0; color: var(--muted); } .table-wrap { overflow-x: auto; margin-top: 24px; background: white; border: 1px solid var(--line); } table { width: 100%; border-collapse: collapse; min-width: 720px; } th, td { padding: 17px 16px; text-align: left; border-bottom: 1px solid #edf1ec; } th { color: var(--muted); background: #eef3eb; font: 700 11px Arial, sans-serif; letter-spacing: .1em; text-transform: uppercase; } td { vertical-align: top; } .name { font-weight: 700; } .description { max-width: 290px; color: var(--muted); font-size: 14px; } .actions { white-space: nowrap; font: 13px Arial, sans-serif; } .delete { display: inline; margin-left: 12px; } .delete button { padding: 0; border: 0; color: #a83c25; background: none; font: inherit; cursor: pointer; } @media (max-width: 600px) { header { padding-bottom: 35px; } .intro { display: block; } .add { display: inline-block; margin-top: 25px; } header, main { width: min(100% - 28px, 1120px); } }
    </style>
</head>
<body>
<header><div class="brand">STOCKROOM</div><nav><span><?= html_escape($username) ?></span><a class="logout" href="<?= base_url('logout') ?>">Sign out</a></nav></header>
<main>
    <section class="intro"><div><div class="eyebrow">Inventory / overview</div><h1>Products</h1></div><a class="add" href="<?= base_url('products/create') ?>">+ Add product</a></section>
    <?php if (empty($products)): ?>
        <p class="empty">Your inventory is empty. Add the first product to get started.</p>
    <?php else: ?>
    <div class="table-wrap"><table><thead><tr><th>Product</th><th>Description</th><th>Price</th><th>Quantity</th><th>Created</th><th>Actions</th></tr></thead><tbody>
        <?php foreach ($products as $product): ?><tr>
            <td class="name"><?= html_escape($product['product_name']) ?></td>
            <td class="description"><?= html_escape($product['description']) ?></td>
            <td>$<?= number_format((float) $product['price'], 2) ?></td>
            <td><?= (int) $product['quantity'] ?></td>
            <td><?= html_escape($product['created_at']) ?></td>
            <td class="actions"><a href="<?= base_url('products/edit/' . (int) $product['id']) ?>">Edit</a><form class="delete" method="post" action="<?= base_url('products/delete/' . (int) $product['id']) ?>" onsubmit="return confirm('Delete this product?');"><button type="submit">Delete</button></form></td>
        </tr><?php endforeach; ?>
    </tbody></table></div>
    <?php endif; ?>
</main>
</body>
</html>
