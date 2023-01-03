<?php
    require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./access/css/base.css">
    <link rel="stylesheet" href="./access/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="grid">
            <div class="container__title">
                <div class="grid__row">
                    <div class="grid__column-3"><img src="./access/img/coDang.jpeg" alt="Ảnh Đảng"></div>
                    <div class="grid__column-9">
                        <div class="text__banner">
                            <div> <span> Dự án nghiên cứu KHKT - KN năm học 2022 - 2023</span>
                                <span> Dự án nghiên cứu KHKT - KN năm học 2022 - 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-admin">
                <a href="admin.php"><button class="btn-admin">Quản lý</button></a>
            </div>
            <div class="container__topic"> 
                <div class="content__topic">
                    <?php
                        $sql = "SELECT * FROM topic";
                        if(isset($_GET['id_topic']))
                            $sql = "SELECT * FROM topic WHERE id_topic='".$_GET['id_topic']."'";
                        $kq = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                        while($row=mysqli_fetch_array($kq))
                        {
                            echo '<div class="grid__row grid__row__topic">
                            <div class="grid__column-3 topic"><a href="index.php?id_topic='.$row['id_topic'].'" class="link_topic">'.$row['theme'].'</a></div>
                            <div class="grid__column-9 detail__topic">';
                            $sql = "SELECT id_article_title, article_title FROM detail_topic WHERE id_topic='".$row['id_topic']."'";
                            $comm = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                            $i = 1;
                            while($q=mysqli_fetch_array($comm))
                            {
                                echo '<a href="detailarticle.php?id_article_title='.$q['id_article_title'].'" class="post__topic grid__row">Bài '.$i.': '.$q['article_title'].'</a>';
                                $i++;
                            }
                            echo '</div>
                            </div>';
                        }
                    ?>
                    <div class="grid__row grid__row__topic implementer">
                        <div class="grid__column-2"><p>Học sinh thực hiện:</p></div>
                        <div class="grid__column-9"><p>Hoàng Ánh Dương và Hoàng Mỹ Duyên lớp 11A1_THPT Phan Bội Châu_ Đắk Lắk</p></div>
                    </div>
                    <div class="grid__row grid__row__topic instructor">
                        <div class="grid__column-2"><p>Người hướng dẫn:</p></div>
                        <div class="grid__column-9"><p>Hoàng Oanh</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>