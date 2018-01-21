<link type="text/css" rel="stylesheet" href="css/admin_list.css">



<h1 id="h1-cat">Medlemmar hos Granza</h1>
<a href="?action=login" id="goback-order">
                <i class="fa fa-angle-left " style="font-size:20px; margin-right:4px; "></i>Tillbaka</a>
<tbody>
    <td>
        <?php echo $pagecontent->uid?>
    </td>
    <td>
        <?php echo $pagecontent->fname?>
    </td>
    <td>
        <?php echo $pagecontent->lname?>
    </td>
    <td>
        <?php echo $pagecontent->email?>
    </td>
    <!--<td>
        <?php //echo $pagecontent->street1?>
    </td>
    <td>
        <?php //echo $pagecontent->street2?>
    </td>
    <td>
        <?php //echo $pagecontent->zip?>
    </td>
    <td>
        <?php //echo $pagecontent->city?>
    </td>
    <td>
        <?php //echo $pagecontent->phone?>
    </td>-->
    <td>
        <?php echo $pagecontent->newletter?>
    </td>
    <td>
        <?php echo substr($pagecontent->created_at, 0, -9)?>
    </td>
    <td>
        <?php echo substr($pagecontent->updated_at, 0, -9)?>
    </td>
    <td>
        <?php echo $pagecontent->level?>
    </td>
    <td>
        <?php echo '<a class ="edit_link" href="?action=edituser&uid='.$pagecontent->uid.'">Redigera</a>'?></td>


</tbody>

</div>
