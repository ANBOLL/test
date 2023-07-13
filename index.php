<?php
    session_start(); 
    $code = "Index";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/indexmobile.css">
    <link rel="stylesheet" href="css/headermobile.css">
    <link rel="stylesheet" href="css/footermobile.css">
    <meta name="viewport" content="width=device-width, initial-scale=-1">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo 1.svg" />
    <title>HERALD</title>
</head>
<body>
<?php 
    $limit = 4;
    if (isset($_GET['page'])){$page = $_GET['page'];}else {$page = 1;}
    $number = ($page * $limit) - $limit;
    include("NewsModel.php");
    $str_page = NewsModel::getCount($limit);
    $query = NewsModel::getList($number, $limit);
    $resi = NewsModel::getList($number, 1);
    include_once("header.php");
    $pagesession = $page;
    $_SESSION['pagesession'] = $pagesession;
?>
    <main class="main_index">
        <section class="hero_section">
            <?php while($rowi = $resi->fetch()){ ?>
                <div class="hero_image">
                    <img src="image/<?=$rowi['image']; ?>" alt="hero_image">
                </div>
                <div class="hero_text">
                    <h1 class="hero_h1"><?=$rowi['title']; ?></h1>
                    <p class="hero_p"><?=$rowi['announce']; ?></p>
                </div>
            <?php } ?>
        </section>
        <section class="news_title">
            <h2 class="news_title_h2">
                Новости
            </h2>
        </section>
        <section class="news_block">
            <?php while($article = $query->fetch()){ ?>
                <div class="news">
                    <div class="data_news"><?=$article["dt"]; ?></div>
                    <div class="title_news"><?=$article["title"]; ?></div>
                    <div class="announce_news"><?=$article["announce"]; ?></div>
                    <a href="/page.php?id=<?=$article['id']; ?>" class="a_style_button">
                        <div class="button_news"<?php $_GET['pagenow'] = $page; ?>>
                                Подробнее<div class="arrow_button"></div>
                        </div>
                    </a>
                </div>
            <?php } ?> 
        </section>
        <section class="pagination">
            <ul class="pagination_item">
                <?php
                    for ($i=1; $i <= $str_page; $i++) 
                    {  
                        if($page == $i){;
                            echo "<a class='pagination_list active' href=index.php?page=".$i.">".$i."</a>";
                        }
                        else {
                            echo "<a class='pagination_list' href=index.php?page=".$i.">".$i."</a>";
                        }
                    }
                ?>
            </ul>
        </section>
    </main>
<?php
    include_once("footer.php");
?>
</body>
</html>