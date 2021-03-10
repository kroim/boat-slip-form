<html>
<?php
if (!defined('PREPEND_PATH')) define('PREPEND_PATH', '');
include(PREPEND_PATH . "views/partials/head.php");
include(PREPEND_PATH . "views/partials/header.php");
?>
<style>
    #slip-table th, #slip-table td {
        text-align: center;
        font-size: 14px;
    }
</style>
<body data-sa-theme="5">
<?php include(PREPEND_PATH . "views/partials/sidebar.php"); ?>
<section class="content">

    <header class="content__title">
        <h1>Slip Data</h1>
    </header>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive data-table">
                <table id="slip-table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 10%">Email</th>
                        <th style="width: 10%">Length</th>
                        <th style="width: 10%">Winter Storage</th>
                        <th style="width: 10%">Shrink Wrap</th>
                        <th style="width: 10%">Slip Number</th>
                        <th style="width: 10%">Slip Price</th>
                        <th style="width: 10%">Winter Storage Price</th>
                        <th style="width: 10%">Tax</th>
                        <th style="width: 10%">Total</th>
                        <th style="width: 10%">Shrink Wrap Price</th>
                        <th style="width: 10%">Update Time</th>
                        <th style="width: 10%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i = 0; $i < count($slips); $i++) { ?>
                        <tr id="slip_<?php echo $slips[$i]['id']; ?>">
                            <td class="slip-id"><?php echo $slips[$i]['id']; ?></td>
                            <td class="slip-email"><?php echo $slips[$i]['email']; ?></td>
                            <td class="slip-length"><?php echo $slips[$i]['slip_length']; ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['winter_storage'] ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['shrink_wrap'] ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['slip_number'] ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['slip_price'] ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['winter_storage_price'] ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['tax_price'] ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['total_winter_storage'] ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['shrink_wrap_value'] ?></td>
                            <td class="slip-ws"><?php echo $slips[$i]['created_at'] ?></td>
                            <td class="question-action">
                                <button class="btn btn-success btn-sm mb-2" onclick="updateSlip(<?php echo $slips[$i]['id']; ?>, 1)">view</button>
                                <button class="btn btn-warning btn-sm mb-2" onclick="updateSlip(<?php echo $slips[$i]['id']; ?>, 2)">edit</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- update a slip modal -->
<div class="modal fade" id="modal_update_slip" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Cornetta's Marina Boat Slip</h4>
            </div>
            <div class="modal-body">
                <form id="modal-update-slip-form">
                    <input type="hidden" id="modal_update_slip_id">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="modal_update_slip_first_name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="modal_update_slip_last_name">
                    </div>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" id="modal_update_slip_full_name" readonly>
                    </div>
                    <div class="form-group">
                        <label>Vessel Name</label>
                        <input type="text" class="form-control" id="modal_update_slip_vessel_name">
                    </div>
                    <div class="form-group">
                        <label>Street Address</label>
                        <input type="text" class="form-control" id="modal_update_slip_address_1">
                    </div>
                    <div class="form-group">
                        <label>Address 2</label>
                        <input type="text" class="form-control" id="modal_update_slip_address_2">
                    </div>
                    <div class="form-group">
                        <label>City, ST ZIP Code</label>
                        <input type="text" class="form-control" id="modal_update_slip_address_3">
                    </div>
                    <div class="form-group">
                        <label>Home Phone</label>
                        <input type="text" class="form-control" id="modal_update_slip_home_phone">
                    </div>
                    <div class="form-group">
                        <label>Cell Phone</label>
                        <input type="text" class="form-control" id="modal_update_slip_cell_phone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="modal_update_slip_email">
                    </div>
                    <div class="form-group">
                        <label>Length</label>
                        <input type="number" class="form-control" id="modal_update_slip_length" step="1" required>
                    </div>
                    <div class="form-group">
                        <label>Winter Storage</label>
                        <select class="form-control page-select" id="modal_update_slip_winter_storage">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Shrink Wrap</label>
                        <select class="form-control page-select" id="modal_update_slip_shrink_wrap">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Slip Number</label>
                        <input type="text" class="form-control" id="modal_update_slip_number" readonly>
                    </div>
                    <div class="form-group">
                        <label>Slip Price</label>
                        <input type="number" class="form-control" id="modal_update_slip_price" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Winter Storage Price</label>
                        <input type="number" class="form-control" id="modal_update_slip_winter_storage_price" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tax</label>
                        <input type="number" class="form-control" id="modal_update_slip_tax" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Total Winter Storage</label>
                        <input type="number" class="form-control" id="modal_update_slip_total_winter_storage" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Shrink Wrap Price</label>
                        <input type="number" class="form-control" id="modal_update_slip_shrink_wrap_price" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Zipper Door</label>
                        <input type="text" class="form-control" id="modal_update_slip_zipper_door">
                    </div>
                    <div class="form-group">
                        <label>Flybridge</label>
                        <input type="text" class="form-control" id="modal_update_slip_flybridge">
                    </div>
                    <div class="form-group">
                        <label>Mast Up (Sailboat)</label>
                        <input type="text" class="form-control" id="modal_update_slip_mast_up">
                    </div>
                    <div class="form-group">
                        <label>Total Shrink Wrap</label>
                        <input type="text" class="form-control" id="modal_update_slip_total_shrink_wrap">
                    </div>
                    <div class="form-group">
                        <label>Payment Information</label>
                        <select class="form-control page-select" id="modal_update_slip_payment">
                            <option value="1">Check</option>
                            <option value="2">Credit Card</option>
                            <option value="3">Cash</option>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-link">Update</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include(PREPEND_PATH . "views/partials/footer.php"); ?>
<?php include(PREPEND_PATH . "views/partials/foot.php"); ?>
<script>
    let base_url = '';
    $(function () {
        $("#slip-table").DataTable({
            aaSorting: [],
            autoWidth: !1,
            responsive: !0,
            lengthMenu: [[15, 40, 100, -1], ["15 Rows", "40 Rows", "100 Rows", "Everything"]],
            language: {searchPlaceholder: "Search for records..."},
            sDom: '<"dataTables__top"flB<"dataTables_actions">>rt<"dataTables__bottom"ip><"clear">',
        });
        base_url = $('meta[name="_base_url"]').attr('content');
    });
    function updateSlip(id, mode) {
        $.ajax({
            url: base_url + '/get-slip-item-by-id',
            method: 'post',
            data: {slip_id: id},
            success: function (res) {
                res = JSON.parse(res);
                if (res.status === "success") {
                    $('#modal_update_slip_id').val(id);
                    $('#modal_update_slip_first_name').val(res.data.first_name);
                    $('#modal_update_slip_last_name').val(res.data.last_name);
                    $('#modal_update_slip_full_name').val(res.data.first_name + " " + res.data.last_name);
                    $('#modal_update_slip_vessel_name').val(res.data.vessel_name);
                    $('#modal_update_slip_address_1').val(res.data.address1);
                    $('#modal_update_slip_address_2').val(res.data.address2);
                    $('#modal_update_slip_address_3').val(res.data.address3);
                    $('#modal_update_slip_home_phone').val(res.data.home_phone);
                    $('#modal_update_slip_cell_phone').val(res.data.cell_phone);
                    $('#modal_update_slip_email').val(res.data.email);
                    $('#modal_update_slip_length').val(res.data.slip_length);
                    $('#modal_update_slip_winter_storage').val(res.data.winter_storage);
                    $('#modal_update_slip_shrink_wrap').val(res.data.shrink_wrap);
                    $('#modal_update_slip_number').val(res.data.slip_number);
                    $('#modal_update_slip_price').val(res.data.slip_price);
                    $('#modal_update_slip_winter_storage_price').val(res.data.winter_storage_price);
                    $('#modal_update_slip_tax').val(res.data.tax_price);
                    $('#modal_update_slip_total_winter_storage').val(res.data.total_winter_storage);
                    $('#modal_update_slip_shrink_wrap_price').val(res.data.shrink_wrap_value);
                    $('#modal_update_slip_zipper_door').val(res.data.zipper_door);
                    $('#modal_update_slip_flybridge').val(res.data.flybridge);
                    $('#modal_update_slip_mast_up').val(res.data.mast_up);
                    $('#modal_update_slip_total_shrink_wrap').val(res.data.total_shrink_wrap);
                    $('#modal_update_slip_payment').val(res.data.payment);
                    if (mode !== 2) {
                        $('#modal_update_slip input').prop('disabled', true);
                        $('#modal_update_slip select').prop('disabled', true);
                        $('#modal_update_slip button[type="submit"]').css('display', 'none');
                    } else {
                        $('#modal_update_slip input').prop('disabled', false);
                        $('#modal_update_slip select').prop('disabled', false);
                        $('#modal_update_slip button[type="submit"]').css('display', 'inline-block');
                    }
                    $('#modal_update_slip').modal();
                } else customAlert(res.message);
            }
        })
    }
    $('#modal-update-slip-form').on('submit', function (e) {
        e.preventDefault();
        let data = {
            action: "update_slip",
            slip_id: $('#modal_update_slip_id').val(),
            first_name: $('#modal_update_slip_first_name').val(),
            last_name: $('#modal_update_slip_last_name').val(),
            vessel_name: $('#modal_update_slip_vessel_name').val(),
            address_1: $('#modal_update_slip_address_1').val(),
            address_2: $('#modal_update_slip_address_2').val(),
            address_3: $('#modal_update_slip_address_3').val(),
            home_phone: $('#modal_update_slip_home_phone').val(),
            cell_phone: $('#modal_update_slip_cell_phone').val(),
            email: $('#modal_update_slip_email').val(),
            slip_length: $('#modal_update_slip_length').val(),
            winter_storage: $('#modal_update_slip_winter_storage').val(),
            shrink_wrap: $('#modal_update_slip_shrink_wrap').val(),
            slip_number: $('#modal_update_slip_number').val(),
            slip_price: $('#modal_update_slip_price').val(),
            winter_storage_price: $('#modal_update_slip_winter_storage_price').val(),
            slip_tax: $('#modal_update_slip_tax').val(),
            total_winter_storage: $('#modal_update_slip_total_winter_storage').val(),
            shrink_wrap_price: $('#modal_update_slip_shrink_wrap_price').val(),
            zipper_door: $('#modal_update_slip_zipper_door').val(),
            flybridge: $('#modal_update_slip_flybridge').val(),
            mast_up: $('#modal_update_slip_mast_up').val(),
            total_shrink_wrap: $('#modal_update_slip_total_shrink_wrap').val(),
            payment: $('#modal_update_slip_payment').val(),
        };
        $.ajax({
            url: base_url + '/save-slip-data',
            method: 'post',
            data: data,
            success: function (res) {
                res = JSON.parse(res);
                if (res.status === "success") {
                    customAlert(res.message, true);
                    setTimeout(function () {
                        location.reload();
                    }, 2000)
                } else customAlert(res.message);
            }
        })
    })
</script>
</body>
</html>
