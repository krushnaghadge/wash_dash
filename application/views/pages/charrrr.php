<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<div class="container mt-4">
    <h2>User Management</h2>
    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Profile</th>
                <th>User Name</th>
                <th>Mobile No</th>
                <th>Email ID</th>
                <th>Register Date</th>
                <th>Wallet Amt</th>
                <th>Avl.Points</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($users)) {
                $sr_no = 1;
                foreach ($users as $user) { ?>
                    <tr>
                        <td><?php echo $sr_no++; ?></td>
                        <td>
                            <div class="inbox-item-img">
                                <img src="<?php echo base_url('assets/images/users/avatar-1.jpg'); ?>" class="rounded-circle" style="height: 35px;">
                            </div>
                        </td>
                        <td><?php echo $user['user_name']; ?></td>
                        <td><?php echo $user['user_mobile_number']; ?></td>
                        <td><?php echo $user['user_email']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($user['user_created_at'])); ?></td>
                        <td>SAR <?php echo number_format($user['wallet_current_balance'], 2); ?></td>
                        <td>200 <img src="<?php echo base_url('assets/images/star.png'); ?>" style="height:14px"></td>
                        <td>
                            <input type="checkbox" checked data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-size="mini">
                        </td>
                        <td>
                            <a href="<?php echo base_url('user_details/' . $user['user_id']); ?>" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm sa-warning">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
            <?php } 
            } else { ?>
                <tr>
                    <td colspan="10" class="text-center">No users found.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>

</body>
</html>
