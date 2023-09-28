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
            <div class="col-sm-8">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>From Country</th>
                                <th>To Country</th>
                                <th>Size</th>
                                <th>Freight Type</th>
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
                                        <td><?php echo $sn; ?></td>
                                        <td><?php echo $data['fromcountry'] ?? ''; ?></td>
                                        <td><?php echo $data['tocountry'] ?? ''; ?></td>
                                        <td><?php echo $data['Size'] ?? ''; ?></td>
                                        <td><?php echo $data['freighttype'] ?? ''; ?></td>
                                        <td><?php echo $data['email'] ?? ''; ?></td>
                                        <td><?php echo $data['status'] ?? ''; ?></td>
                                      
                                    </tr>
                                <?php
                                    $sn++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="8">
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