<?php 
    session_start();
    if(isset($_SESSION['user']))
    {
?>
<header class="header-content">
    <div class="width56"></div>
    <div class="cards-single">
        <span>Quản lí đề tài</span>
    </div>
                
    <div class="user-wrapper">
        <div class="user-img">
            <i class="fas fa-user-circle user-img__src"></i>
            <div class="user-menu">
                <ul class="user-menu__list">
                    <li class="user-menu__item">
                        <a href="login.php" class="user-menu__link">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<?php
    }
    else
        header('Location: /NKHK-22-23/login.php');
?>