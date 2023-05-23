<?php 
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/navbar.php';
?>

<style>
    body > div.wrapper > div.content-page > div > div.card.d-block > div.row > div > div {
        padding: 0 15px;
    }
    #alternative-page-datatable_wrapper {
        padding: 0 15px;
    }
</style>

<br><br>
<div class="card d-block" style="box-shadow: 1px 2px 5px #333;">

 <!-- start page title -->
 <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
            </div>
            <h4 class="page-title">List of Stake Profiling - Academic</h4>
        </div>
    </div>
</div>

<table id="alternative-page-datatable" class="table dt-responsive nowrap">
    <thead>
        <tr>
            <th>First</th>
            <th>Last Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $view_query = mysqli_query($db, "Select * from employee_information where stake_status = 'ACADEMIC' order by fldID");
            foreach ($view_query as $view_data){
        ?>
        <tr>
            <td><?php echo $view_data['fname'] ?></td>
            <td><?php echo $view_data['lname'] ?></td>
            <td><?php echo $view_data['mobile'] ?></td>
            <td><?php echo $view_data['email'] ?></td>
            <td>
                <a class="btn btn-info shadow btn-xs sharp me-1"><i class="dripicons-preview"></i></a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>



<?php 
include 'include/footer.php';
?>