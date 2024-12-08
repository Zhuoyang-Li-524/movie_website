<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviesfun</title>
    <!-- 引入 Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 自定义 CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- 网站容器 -->
	<div class="container-fluid bg-dark text-light">
    <div class="container text-center mt-4">
        <!-- 网站 Logo -->
        <img src="assets/Moviesfun logo.png" alt="Logo" class="img-fluid mb-4" style="max-width: 200px;">
        <h1 class="text-light">Welcome to Moviesfun</h1>
		<h4>We are committed to making a better website</h4>
    </div>
    </div>
        <!-- 电影展示 -->
     <div class="container mt-5">
        <div class="row g-4">
            <?php
            // 模拟电影数据，添加电影名称字段
            $movies = [
                ["image" => "images/Oppenheimer.jpg", "trailer" => "trailers/Oppenheimer.mp4", "name" => "Oppenheimer"],
                ["image" => "images/Saw 10.jpg", "trailer" => "trailers/Saw 10.mp4", "name" => "Saw 10"],
                ["image" => "images/Poor Things.jpg", "trailer" => "trailers/Poor Things.mp4", "name" => "Poor Things"],
                ["image" => "images/The Zone of Interest.jpg", "trailer" => "trailers/The Zone of Interest.mp4", "name" => "The Zone of Interest"],
                ["image" => "images/Spider-Man across the spider-verse.jpg", "trailer" => "trailers/Spider-Man across the spider-verse.mp4", "name" => "Spider-Man across the spider-verse"],
                ["image" => "images/Indiana Jones and the dirl of enstiny.jpg", "trailer" => "trailers/Indiana Jones and the dirl of enstiny.mp4", "name" => "Indiana Jones and the dirl of enstiny"],
                ["image" => "images/El Conde.jpg", "trailer" => "trailers/El Conde.mp4", "name" => "El Conde"],
                ["image" => "images/All Dirt Roads Taste of Salt.jpg", "trailer" => "trailers/All Dirt Roads Taste of Salt.mp4", "name" => "All Dirt Roads Taste of Salt"],
                ["image" => "images/The Creator.jpg", "trailer" => "trailers/The Creator.mp4", "name" => "The Creator"],
                ["image" => "images/Paint.jpg", "trailer" => "trailers/Paint.mp4", "name" => "Paint"],
            ];
            // 显示每部电影
            foreach ($movies as $movie) {
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="card bg-dark text-light border-light">';
                echo '<img src="' . $movie['image'] . '" class="card-img-top movie-poster" data-trailer="' . $movie['trailer'] . '" alt="' . $movie['name'] . '">';
                echo '<div class="card-body text-center">';
                echo '<h5 class="card-title movie-title">' . $movie['name'] . '</h5>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- 弹窗：电影预告片 -->
    <div id="trailerModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h5 class="modal-title">Movie Trailer</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <video id="trailerVideo" controls style="width: 100%;">
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- 引入 Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- 自定义 JS -->
    <script src="js/script.js"></script>
</body>  
</html>


