<?php 
    require_once("connect.php");

    if($_POST['U']=='delete')
    {
        delete($_POST['id'],$connect);
    }
    if($_POST['U']=='update')
    {
        update($_POST['id'],$connect);
    }
    if($_POST['U']=='insert')
    {
        insert($connect);
    }
    if($_POST['U']=='inserttopic')
    {
        kttopic($_POST['theme'], $connect);
    }
    if($_POST['U']=='deletetopic')
    {
        deletetopic($_POST['theme'], $connect);
    }

    if($_POST['U']=='getcontent')
    {
        getcontentdetail($_POST['id'], $connect);
    }

    function delete($id,$connect)
    {
        $sql="DELETE FROM detail_topic WHERE id_article_title='".$id."'";
        mysqli_query($connect,$sql);
    }
    function update($id,$connect)
    {
            $sql3 = "SELECT id_topic FROM topic WHERE theme='".$_POST['theme']."'";
            $kq = mysqli_query($connect, $sql3) or die(mysqli_error($connect));
            $row=mysqli_fetch_array($kq);
            if($row[0] != NULL)
            {
                $sql="UPDATE detail_topic SET article_title='".$_POST['songtitle']."',article_content='".$_POST['content']."',name_student='".$_POST['implementer']."',name_teacher='".$_POST['instructor']."',id_topic='".$row[0]."' WHERE id_article_title='".$id."'";
                $kq = mysqli_query($connect, $sql);
            }
            else
            {
                $sql4 = "SELECT count(*) FROM topic";
                $kq = mysqli_query($connect, $sql4) or die(mysqli_error($connect));
                $row=mysqli_fetch_array($kq);
                $row++;
                insertTopic($row[0], $connect);
                $sql="UPDATE detail_topic SET article_title='".$_POST['songtitle']."',article_content='".$_POST['content']."',name_student='".$_POST['implementer']."',name_teacher='".$_POST['instructor']."',id_topic='".$row[0]."' WHERE id_article_title='".$id."'";
                $kq = mysqli_query($connect, $sql);
            }
    }

    function insert($connect)
    {
        $r=1;
        $sql1="SELECT * FROM detail_topic WHERE id_article_title='".$_POST['postcode']."'";
        $kq = mysqli_query($connect, $sql1);
        if($p = mysqli_fetch_array($kq))
            $r--;
        if($r == 1)
        {
            $sql3 = "SELECT id_topic FROM topic WHERE theme='".$_POST['theme']."'";
            $kq = mysqli_query($connect, $sql3) or die(mysqli_error($connect));
            $row=mysqli_fetch_array($kq);
            if($row[0] != NULL)
            {
                insertDetail($row[0], $connect);
            }
            else
            {
                $sql4 = "SELECT count(*) FROM topic";
                $kq = mysqli_query($connect, $sql4) or die(mysqli_error($connect));
                $row=mysqli_fetch_array($kq);
                insertDetail($row[0]+1, $connect);
                insertTopic($row[0]+1, $connect);
            }
        }
        echo $r;
    }

    function insertDetail($id_topic, $connect)
    {
        $today = date("Y-m-d");
        $sql = "INSERT INTO detail_topic(id_article_title, article_title, article_content, date_submitted, name_student, name_teacher, id_topic) VALUES ('".$_POST['postcode']."','".$_POST['songtitle']."','".$_POST['content']."','".$today = date("Y-m-d")."','".$_POST['implementer']."','".$_POST['instructor']."','".$id_topic."')";
        $kq = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }

    function insertTopic($id_topic, $connect)
    {
        $sql = "INSERT INTO topic(id_topic, theme) VALUES ('".$id_topic."','".$_POST['theme']."')";
        $kq = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }

    function kttopic($theme, $connect)
    {
        $sql = "SELECT id_topic FROM topic WHERE theme='".$theme."'";
        $kq = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $row=mysqli_fetch_array($kq);
        if($row != NULL)
        {
            echo '0';
        }
        else
        {
            $sql4 = "SELECT count(*) FROM topic";
            $kq = mysqli_query($connect, $sql4) or die(mysqli_error($connect));
            $row=mysqli_fetch_array($kq);
            insertTopic($row[0]+1, $connect);
            echo '1';
        }
            
    }
    function deletetopic($theme,$connect)
    {
        $sql = "SELECT id_topic FROM topic WHERE theme='".$theme."'";
        $kq = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $row=mysqli_fetch_array($kq);
        $sql="DELETE FROM detail_topic WHERE id_topic='".$row[0]."'";
        mysqli_query($connect,$sql);
        $sql="DELETE FROM topic WHERE theme='".$theme."'";
        mysqli_query($connect,$sql);
        
    }

    function getcontentdetail($id, $connect)
    {
        $sql="SELECT article_content FROM detail_topic WHERE id_article_title='".$id."'";
        $kq = mysqli_query($connect, $sql);
        $row=mysqli_fetch_array($kq);
        echo $row[0];
    }
?>