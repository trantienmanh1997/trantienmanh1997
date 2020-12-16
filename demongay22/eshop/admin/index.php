<?php
include_once "../define.php";

echo "<br>".DOMAIN_SITE;
echo "<br>".SITE_PATH;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

    <div class="container">
    <h1>Admin quản lý chung</h1>
        <div class="row">
            <div class="col-md-12">
            <nav>
                <ul>
                    <li><a href="<?php echo DOMAIN_SITE."/admin/products/index.php"?>">Quản trị sản phẩm</a></li>
                    <li><a href="<?php echo DOMAIN_SITE."/admin/users/index.php"?>">Quản trị users</a></li>
                </ul>
            </nav>
            
            </div>
        </div>
    
    </div>
    
</body>
</html>