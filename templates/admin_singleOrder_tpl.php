<?php require_once('templates/admin_header.php');?>
<link type="text/css" rel="stylesheet" href="css/admin_list.css">

<!--BAKGRUNDBILD-->
<img class="background" src="img/products/big/marble-wallpaper-white.jpg">
<!--VITA DIVEN-->
<div id="orderlist" class="all_product">
    <!--titel-->
    <h1 id="h1-cat">Detaljer för order nr
        <?php echo $_GET['oid'];?> </h1>
    <table class="orders_table">
        <?php if(!empty($pagecontent->orderItems)) :?>
        <thead>
            <tr>
                <th>Produkt_id</th>
                <th>Pris</th>
                <th>Antal</th>
                <th>Total</th>
            </tr>
        </thead>
        <?php foreach ($pagecontent->orderItems as $orderItemRow): ?>
        <tbody>
            <tr>
                <td>
                    <?php echo $orderItemRow['Produkt_id'];?>
                </td>
                <td>
                    <?php echo $orderItemRow['Pris'];?>
                </td>
                <td>
                    <?php echo $orderItemRow['Antal'];?> </td>

                <td>
                    <?php echo $orderItemRow['Total'];?> </td>

            </tr>
            <?php endforeach ?>

            <?php endif ?>
        </tbody>
    </table>
    <div id="totalSumma">
        <label id="label1"> Totalsumma </label>
        <label id="label2"> <?php echo $totalsumma ?> KR</label>
    </div>
    <a href="?action=orders" id="goback-order">
                <i class="fa fa-angle-left" style="font-size:20px; margin-right:4px;"></i>Tillbaka</a>
</div>
