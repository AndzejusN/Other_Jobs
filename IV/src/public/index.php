<?php
require_once('main.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="files/css/app.css">
    <title>IV</title>
</head>
<body>
<header class="py-3 px-5">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4 font-hand"><h2><img src="<?php echo '/files/img/sos.png'; ?>" alt="S.erver O.rder S.ystem"></h2></span>
        </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-auto">
            <a href="index.php" class="me-3 py-2 text-dark text-decoration-none active"><h5>Main page</h5>
            </a>
            <a href="list.php" class="me-3 py-2 text-dark text-decoration-none"><h5>Orders list</h5>
            </a>
        </nav>
    </div>
</header>
<main class="py-3 px-5">
    <div class="card text-center">
        <div class="card-header text-muted">
            <h3>
                List of servers to rent:
            </h3>
        </div>
    </div>

	<?php
	if ($dataDecoded) {
		foreach ($dataDecoded['categories'] as $data) {
			?>
            <form action="php/add.php" method="post" class="py-1">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($data['name']) ?>">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']) ?>">
                <input type="hidden" name="slug" value="<?php echo htmlspecialchars($data['slug']) ?>">

                <div class="card text-center">

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php echo htmlspecialchars($data['name']) ?></h5>
                        <p class="card-text">Id: <?php echo htmlspecialchars($data['id']) ?></p>
                        <p class="card-text">Slug: <?php echo htmlspecialchars($data['slug']) ?></p>
                        <button type="submit" class="btn btn-outline-primary">Place an order</button>
                    </div>
                    <div class="card-footer text-muted">
                        IV solutions
                    </div>
                </div>
            </form>
		<?php }
	} ?>
</main>

<footer class="py-3 px-5">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center pb-3 mb-4 border-top">
        <div class="d-inline-flex">
            <p>Copyright &#169 2022 All Rights Reserved</p>
        </div>
    </div>
</footer>
</body>
</html>