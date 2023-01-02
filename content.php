<table class="table-topics">
                <tr>
                    <td class="tb-column tb-first-row">Mã bài</td>
                    <td class="tb-column tb-first-row">Tên bài</td>
                    <td class="tb-column tb-first-row">Tên chủ đề</td>
                    <td class="tb-column tb-first-row">Ngày đăng</td>
                    <td class="tb-column tb-first-row" >Người hướng dẫn</td>
                    <td class="tb-column tb-first-row">Người thực hiện</td>
                    <td class="tb-column tb-first-row">Sửa</td>
                    <td class="tb-column tb-first-row">Xóa</td>
                    <td class="tb-column tb-first-row">Xem chi tiết</td>
                </tr>

                <?php
                    if(isset($_GET['id_topic']))
                    {
                        echo "<div>adasfbd</div>";
                        $comm ="SELECT A.id_article_title, A.article_title, A.date_submitted, A.name_teacher, A.name_student, C.theme  FROM detail_topic AS A, topic AS C WHERE A.id_topic=C.id_topic AND A.id_topic='".$_GET['id_topic']."'";
                    }
                    else
                        $comm ="SELECT A.id_article_title, A.article_title, A.date_submitted, A.name_teacher, A.name_student, C.theme  FROM detail_topic AS A, topic AS C WHERE A.id_topic=C.id_topic";
                    $kq = mysqli_query($connect,$comm);
                    while($row=mysqli_fetch_array($kq))
                    {
                        echo '
                            <tr>
                                <td class="tb-column">'.$row['id_article_title'].'</td>
                                <td class="tb-column">'.$row['article_title'].'</td>
                                <td class="tb-column">'.$row['theme'].'</td>
                                <td class="tb-column">'.$row['date_submitted'].'</td>
                                <td class="tb-column">'.$row['name_teacher'].'</td>
                                <td class="tb-column">'.$row['name_student'].'</td>
                                <td class="tb-column"><i class="fa-solid fa-pen-to-square icon icon-update"></i></td>
                                <td class="tb-column"><i class="fa-solid fa-trash-can icon icon-delete"></i></td>
                                <td class="tb-column"><i class="fa-solid fa-circle-info icon icon-watch"></i></td>
                            </tr>';
                    }
                ?>
            </table>