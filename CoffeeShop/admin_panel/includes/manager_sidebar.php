<nav id="sidebar">
    <div class="sidebar-header">
        <h3><img src="../../images/managers/<?php echo $_SESSION['manager_image'] ?>"
                class="img-fluid" /><span><?php echo $_SESSION['manager_username'] ?></span></h3>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="manager_dashboard.php" class="dashboard"><i class="material-icons"></i>
                <span>لوحة
                    التحكم</span></a>
        </li>

        <div class="small-screen navbar-display">
            <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">الاشعارات</i><span> 4 notification</span></a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                    <li>
                        <a href="#">You have 5 new messages</a>
                    </li>
                    <li>
                        <a href="#">You're now friend with Mike</a>
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
                <a href="#"><i class="material-icons"></i><span>تطبيقات</span></a>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#"><i class="material-icons"></i><span>المستخدم</span></a>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#"><i class="material-icons"></i><span>الاعدادات</span></a>
            </li>
        </div>

        <li class="">
            <a href="manager_menu.php"><i class="material-icons"></i><span>قائمة الفئات</span></a>
        </li>

        <li class="">
            <a href="manager_menuItems.php"><i class="material-icons"></i><span>قائنى العناصر</span></a>
        </li>

        <li class="">
            <a href="manager_toppingsCategory.php"><i class="material-icons"></i><span>اضافة الفئات
                </span></a>
        </li>

        <li class="">
            <a href="manager_toppings.php"><i class="material-icons"></i><span>اضافة الفئات</span></a>
        </li>

        <li class="">
            <a href="manager_addOffers.php"><i class="material-icons"></i><span>قائمة العروض</span></a>
        </li>

        <li class="">
            <a href="view_reviews.php"><i class="material-icons"></i><span>استعراض</span></a>
        </li>












    </ul>
</nav>