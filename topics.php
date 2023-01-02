<div class="container-topics">
    <div class="add-topic">
        <i class="fa-solid fa-plus btn-add-topic"></i>
    </div>
    <ul>
        <li><a href="admin.php">Tất cả</a></li>
    
<?php
    $comm ="SELECT * FROM topic";
    $kq = mysqli_query($connect,$comm);
    while($row=mysqli_fetch_array($kq))
    {
        echo '<li class="row-topic"><a href="admin.php?id_topic='.$row['id_topic'].'">'.$row['theme'].'</a>
        <div class="container-delete-topic"><i class="fa-solid fa-trash-can icon icon-delete-topic"></i></div></li>';
    }
?>
    </ul>
</div>