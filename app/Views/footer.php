<h4>Footer of my page.</h4>

<h2><?= $time ?> </h2>

<?= view_cell('\App\Controllers\BuildResponse::loginForm', ['title' => $time], 60) ?>