
        <?php
        $page_title = "Vehicles";
        require_once ("../../incl/head2.php"); require_once ("../../incl/sidebar.php"); ?>
        <div class="main-panel">
            <?php require_once ("../../incl/navbar.php"); ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">DataTables.net</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Type</th>
                                                    <th>Registration Number</th>
                                                    <th>Capacity</th>
                                                    <th>Condition</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Type</th>
                                                    <th>Registration Number</th>
                                                    <th>Capacity</th>
                                                    <th>Condition</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php
                                            include ("../../incl/connect.php");
                                            $query = "Select * From vehicle";
                                            $result = mysqli_query($dbcon, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                               echo '<tr>
                                                    <td>'.$row['ID'].'</td>
                                                    <td>'.$row['type'].'</td>
                                                    <td>'.$row['reg_num'].'</td>
                                                    <td>'.$row['num_of_seats'].'</td>
                                                    <td>'.$row['status'].'</td>
                                                    <td class="text-right">
                                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>
                                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                        <a href="#" id ='.$row['ID'].'  class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                                    </td>
                                                </tr>';
                                            }
                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                </div>
            </div>
            <?php include ("../../incl/footer2.php");?>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            let element = $(this);
            var del_id = element.attr("id");
            var info = 'id=' + del_id;
            if (confirm("Sure you want to delete this update? There is NO undo!")) {

                $.ajax({
                    type: "GET",
                    url: "../../incl/delete_vehicle.php",
                    data: info,
                    success: function () {

                    }
                });
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            }

        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>


<!-- Mirrored from www.urbanui.com/turbo/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Sep 2018 01:16:58 GMT -->
</html>
