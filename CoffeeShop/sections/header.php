<!--################################################################################################# 
        when user selects the desired currency:
            -> send an ajax request to php script 'currency.php'.
            -> change the values of the $_SESSION["currency"]["logo"] and $_SESSION["currency"]["price"].
            -> refresh the page to get the changes.

    #################################################################################################-->

<header>


    <a href="index.php"><img src="images/log.png" alt="logo" style="   width: 70px;height: 50px;"></a>
    <a href=" #" class="logo"><i class="fas fa-utensils"></i>متجر مشروبات .</a>

    <nav class="navbar">
        <a class="active" href="#home">الصفحة الرئيسية</a>
        <a href="#offers">العروض</a>
        <a href="#about">من نحن</a>
        <a href="#menu">قائمة الطعام</a>
        <a href="#extra">الاضافات </a>
        <a href="#review">المراجعات</a>
    </nav>

    <div class="icons">

        <?php

        if(isset($_SESSION["currency"])){

            $currency_logo = $_SESSION["currency"]["logo"];
            $currency_price = $_SESSION["currency"]["price"]; }

        else{
            
            // if the user didn't change the currency.
            // initial currency on our website is in $ (all prices are in $).

            $currency_logo = $_SESSION["currency"]["logo"]="$"; 
            $currency_price = $_SESSION["currency"]["price"]=1;
        }


            // All currencies are in the table "Currency".
            // we want to fill the SELECT options.

            // $query="SELECT to_currency FROM currency";
            // $result=mysqli_query($conn,$query); 
             ?>

        <select id="currency_list">

            <?php while($row=mysqli_fetch_assoc($result)){   
                    
                        if($currency_logo == $row['to_currency']){ ?>
            <option value="<?php echo $row['to_currency'] ?>" selected> <?php echo $row['to_currency'] ?> </option> <?php  }
                        else{   ?>
            <option value="<?php echo $row['to_currency'] ?>"> <?php echo $row['to_currency'] ?> </option> <?php  }

                } ?>

        </select>


        <a href="./wishlist.php" class="fa fa-heart">مفضلة</a>
        <a href="./cart.php" class="fa fa-shopping-cart">السلة</a>

        <i class="fas fa-bars" id="menu-bars"> القائمة</i>
    </div>

</header>