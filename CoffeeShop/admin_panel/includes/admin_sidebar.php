<nav id="sidebar">
    <div class="sidebar-header">
        <h3><img src="../../images/admins/<?php echo $_SESSION['admin_image'] ?>"
                class="img-fluid" /><span><?php echo $_SESSION['admin_username'] ?></span></h3>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="admin_dashboard.php" class="dashboard"><i class="material-icons">لوحه
                    التحكم</i>
                <!-- <span>لوحة التحكم</span> -->
            </a>
        </li>

        <div class="small-screen navbar-display">
            <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">الاشعارات</i>
                    <!-- <span> 4 notification</span> -->
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                    <li>
                        <a href="#">بوجد خمس رسائل</a>
                    </li>
                    <li>
                        <a href="#">تواصل مع اصدقاء جدد</a>
                    </li>
                    <li>
                        <a href="#">Wish Mary on her birthday!</a>
                    </li>
                    <li>
                        <a href="#">5 warnings in Server Console</a>
                    </li>
                </ul>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#"><i class="material-icons"></i>
                    <span>التطبيقات</span>
                </a>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#"><i class="material-icons"></i>
                    <span>الاشخاص</span>
                </a>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#"><i class="material-icons"></i>
                    <span>الاعدادت</span> </a>
            </li>
        </div>

        <li class="">
            <a href="admin_managers.php"><i class="material-icons"></i>
                <span>الناس</span> </a>
        </li>

        <li class="">
            <a href="admin_administrators.php"><i class="material-icons"></i><span>المسئولين</span></a>
        </li>

        <li class="">
            <a href="admin_team.php"><i class="material-icons"></i><span>اعضاء الفريق</span></a>
        </li>

        <li class="">
            <a href="view_reviews.php"><i class="material-icons"></i><span>استعراض</span></a>
        </li>

        <li class="">
            <a href="view_orders.php"><i class="material-icons"></i><span>الطلبات</span></a>
        </li>











    </ul>
</nav>