<?php

require_once('php/read.php');

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
            <a href="index.php" class="me-3 py-2 text-dark text-decoration-none"><h5>Main page</h5>
            </a>
            <a href="list.php" class="me-3 py-2 text-dark text-decoration-none active"><h5>Orders list</h5>
            </a>
        </nav>
    </div>
</header>

<main class="py-3 px-5">

    <div class="card text-center">
        <div class="card-header text-muted">
            <h3>
                Orders list:
            </h3>
        </div>
    </div>

	<?php
	if (isset($orders)) {
		$count = 0;
		foreach ($orders as $order) {
			$count++;
			?>
            <form action="php/delete.php" method="post" class="py-1">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($order['id']) ?>">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Name: <?php echo htmlspecialchars($order['name']) ?></h5>
                        <p class="card-text">Id: <?php echo htmlspecialchars($order['id']) ?></p>
                        <p class="card-text">Slug: <?php echo htmlspecialchars($order['slug']) ?></p>
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </div>
                    <div class="card-footer text-muted">
                        IV solutions
                    </div>
                </div>
            </form>
			<?php
		}
	}
	if ($count == 0) {
		echo '<h4 class="text-center">No orders was made</h4>';
	}
	?>
</main>

<footer class="py-3 px-5">
    <div class="d-flex flex-column flex-fill align-items-end justify-content-center pb-3 mb-4 border-top">
        <div class="card text-center alert alert-dark">
            <h5><b> Totally placed orders: <?php echo $count;
					?> </b></h5>
        </div>
    </div>
</footer>

</body>
</html>