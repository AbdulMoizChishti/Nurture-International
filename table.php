<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-14">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                       <center> <h1>Inquiries</h1></center>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>From Country</th>
                                <th>From Address</th>
                                <th>To Country</th>
                                <th>To Address</th>
                                <th>Size</th>
                                <th>Qty</th>
                                <th>Weight</th>
                                <th>Freight Type</th>
                                <th>Category</th>
                                <th>Email</th>
                                <th>status</th>
                        </thead>
                        <tbody>
                            <?php
                            if (is_array($fetchData)) {
                                $sn = 1;
                                foreach ($fetchData as $data) {
                            ?>
                                    <tr>
                                        <td><?php echo $data['ID'] ?? ''; ?></td>
                                        <td><?php echo $data['fromcountry'] ?? ''; ?></td>
                                        <td><?php echo $data['fromaddress'] ?? ''; ?></td>
                                        <td><?php echo $data['tocountry'] ?? ''; ?></td>
                                        <td><?php echo $data['toaddress'] ?? ''; ?></td>
                                        <td><?php echo $data['Size'] ?? ''; ?></td>
                                        <td><?php echo $data['qty'] ?? ''; ?></td>
                                        <td><?php echo $data['weight'] ?? ''; ?></td>
                                        <td><?php echo $data['freighttype'] ?? ''; ?></td>
                                        <td><?php echo $data['category'] ?? ''; ?></td>
                                        <td><?php echo $data['email'] ?? ''; ?></td>
                                        <td><?php echo $data['status'] ?? ''; ?></td>
                                      
                                    </tr>
                                <?php
                                    $sn++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="14">
                                        <?php echo $fetchData; ?>
                                    </td>
                                <tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>