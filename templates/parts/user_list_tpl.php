<link type="text/css" rel="stylesheet" href="css/admin/admin_list.css">

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
