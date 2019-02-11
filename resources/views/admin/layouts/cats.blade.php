<?php
/************************** Start Cateogries Page **************************/	
    # ====================================================
    # Start Manage Page 
    # ====================================================
    # Sorting Section
    $sort = 'ASC';
    $sort_array = array('DESC','ASC');
    if(isset($_GET['Sort']) && in_array($_GET['Sort'], $sort_array)){
        $sort = $_GET['Sort'];
    }
?>




<?php session_start(); ?>
<?php include"header.php"; ?>
<?php include"nav.php"; ?>

<?php include"page-up.php"; ?>
<?php include"page-header.php"; ?>

<div class='categories-container'>
    <div class="categories">
        <div class="panel panel-default">
            <div class="panel-heading"> 
                <i class="fa fa-edit"></i> Manage Categories 
                <div class="pull-right option">
                    <i class="fa fa-sort"></i> Ordering: [
                    <a class="<?php if($sort == 'ASC') { echo 'active';} ?>" href="?Sort=Asc" > Asc </a>  |
                    <a class="<?php if($sort == 'DESC'){ echo 'active';} ?>" href="?Sort=DESC" >Desc </a> ]  
                    <i class="fa fa-eye"></i> View :[
                    <span class="active" data-view="full"> Full </span> |
                    <span data-view="classic"> Classic</span> ] 						
                </div>
            </div> <!-- End panel Heading -->
            <div class="panel-body">
                <?php for ($i=0; $i < 5 ; $i++) { ?>
                <div class='cat'>
                    <div class='hidden-buttons'>
                        <a href='?do=Edit&CatID= "id"' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i> Edit </a>
                        <a href='?do=Delete&CatID= "id"'class=' confirm  btn btn-danger btn-xs'><i class='fa fa-close'></i> Delete </a>
                    </div>
                    <h3>اسم القسم</h3> 
                    <div class='full-view'>
                        <p>
                            if  No Description This Category Has No Description else Description
                        </p> 
                            <span class='golbal-span visiblety-yas'><i class='fa fa-eye'></i> Visible</span> 
                            <span class='golbal-span commenting-no'><i class='fa fa-lock'></i> Comment Disabled</span>   
                            <span class='golbal-span advertises-no'><i class='fa fa-lock'></i> Adverties Disabled</span> 
                    </div>
                    <h4 class='child-head'> Child Categories </h4>
                    <ul class='list-unstyled child-cats'>
                        <li class='chlid-link'>
                            <a href='?do=Edit&CatID= "ID"'>قسم فرعي</a> 
                            <a href='?do=Delete&CatID= "ID"' class='show-delete confirm'> حذف </a>
                        </li>
                    </ul>
                <hr>
                </div><!-- End Cat-->
                <?php } ?>
            </div> <!-- End panel Body -->
        </div> <!-- End panel  -->
    </div><!-- End Categories  -->
</div><!-- End Container  -->


<?php include"page-down.php"; ?>
<?php include"footer.php"; ?>