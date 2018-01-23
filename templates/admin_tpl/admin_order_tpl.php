<!--Visar alla ordrar-->
<?php require_once('templates/admin_tpl/admin_header.php');?>
<link type="text/css" rel="stylesheet" href="css/admin/admin_list.css">
<link type="text/css" rel="stylesheet" href="css/admin/admin_order_list.css">
<script src='includes/js.js'></script>

<!--BAKGRUNDBILD-->
<img class="background" src="img/products/big/marble-wallpaper-white.jpg">
<!--VITA DIVEN-->
<div id="orderlist" class="all_product">
    <!--titel-->
    <h1 class="all_orders">ALLA ORDRAR</h1>

    <!-- SÖK FORMULÄR -->

    <form method="post" action="?action=searchOrder" id="search_order" name="search_order">
        <div class="container-4">
            <input type="search" name="order_search" placeholder="Sök på order nummer" id="input_search_order">
            <button type="submit" id="search_order_btn" class="icon" name="search_order_btn"><i class="fa fa-search"></i></button>
        </div>
    </form>



    <table class="orders_table">
        <?php if(!empty($pagecontent->orders)) :?>
        <thead>
            <tr>
                <th>Datum</th>
                <th>OrderNr</th>
                <th>Person_id</th>
                <th>Payement_id</th>
                <th>Shipper_id</th>
                <th>Status</th>
                <th>Detaljer</th>
            </tr>
        </thead>
        <?php foreach ($pagecontent->orders as $currorder): ?>
        <tbody>
            <tr>
                <td>
                    <?php echo substr($currorder['Datum'], 0, -9);?> </td>
                <td>
                    <?php echo $currorder['OrderNr'];?> </td>
                <td>
                    <?php echo $currorder['Person_id'];?>
                </td>
                <td>
                    <?php echo $currorder['Payement_id'];?>
                </td>
                <td>
                    <?php echo $currorder['Shipper_id'];?>
                </td>
                <td>
                    <form method="post" action="?action=updateOrderStatus&oid=<?php echo $currorder['OrderNr'];?>">
                        <div class="style_select">
                            <select name="status[order]" id='selectStatus'>
                                <?php
                                foreach ($pagecontent->status as $currstatus) {

                                echo '<option value="'.$currstatus["status_id"].'"';
                                if ($currstatus["status_id"] == $currorder['Status']){
                                    echo ' selected';
                                }
                                echo '>'.$currstatus['title'].'</option>';
                                };?>
                                </select>
                            <!--IKON PIL NEDÅT-->
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </div>
                        <button type="submit" id="updateStatus" onClick="update()" name="updateStatus" class="foobar"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size:14px;"></i></button>
                    </form>
                </td>
                <td><a href="?action=singleOrder&oid=<?php echo $currorder['OrderNr'];?>" id="info-a">Orderinfo</a></td>
            </tr>
            <?php endforeach ?>

            <?php endif ?>
        </tbody>
    </table>
</div>
