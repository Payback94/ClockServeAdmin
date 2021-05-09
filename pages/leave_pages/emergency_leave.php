<?php
$rsql = "SELECT 
            e.emp_first_name as emp_first_name, 
            e.emp_last_name as emp_last_name, 
            r.request_id, 
            r.emp_id, 
            r.request_type, 
            r.request_reason, 
            r.date_leave, 
            r.date_return, 
            r.request_approval 
        FROM 
            request r 
        LEFT JOIN 
            employee e on r.emp_id = e.emp_id 
        WHERE 
            r.request_type='Emergency' AND r.request_approval='PENDING'";
$rquery = mysqli_query($conn, $rsql);

?>

<div class="container">
    <div class="col-lg-12 p-5">
        <h3 class="">Annual Leave Request Page</h3>
        <div class="row">
            <div class="col-lg-12 ">
                <div>
                    <div class="card p-2">
                        <table align="center" class="table">
                            <tr>
                                <td>#</td>
                                <td>
                                    First Name
                                </td>
                                <td>
                                    Last Name
                                </td>
                                <td>
                                    Leave Type
                                </td>
                                <td>
                                    Leave Reason
                                </td>
                                <td>
                                    Leave Date
                                </td>
                                <td>
                                    Return Date
                                </td>
                                <td>
                                    Status
                                </td>
                                <td>
                                    Action
                                </td>
                            </tr>
                            <?php
                            $count = 1;
                            while ($r_list = mysqli_fetch_assoc($rquery)) {
                                echo "<tr><td>" . $count . "</td>
                        <td>" . ucwords($r_list['emp_first_name']) . "</td>
                        <td>" . ucwords($r_list['emp_last_name']) . "</td>
                        <td>" . $r_list['request_type'] . "</td>
                        <td>" . $r_list['request_reason'] . "</td>
                        <td>" . $r_list['date_leave'] . "</td>
                        <td>" . $r_list['date_return'] . "</td>
                        <td>" . $r_list['request_approval'] . "</td>
                        <td><a class='btn btn-primary' href='#'>Approve</a> | <a class='btn btn-warning' href='#'>Deny</a></td>
                        </tr>";
                                $count = $count + 1;
                            }
                            ?>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>



</div>