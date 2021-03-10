<html>
<?php
if (!defined('PREPEND_PATH')) define('PREPEND_PATH', '');
include(PREPEND_PATH . "views/partials/head.php");
include(PREPEND_PATH . "views/partials/header.php");
?>
<style>
    #years-table th, #years-table td {
        text-align: center;
        font-size: 14px;
    }

    #modal_remove_year .modal-body {
        text-align: center;
    }
</style>
<body data-sa-theme="5">
<?php include(PREPEND_PATH . "views/partials/sidebar.php"); ?>
<section class="content">

    <header class="content__title">
        <h1>Manage Years</h1>
        <div class="actions">
            <button class="btn btn-success" onclick="$('#modal_add_year').modal()">Add a new year</button>
        </div>
    </header>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive data-table">
                <table id="years-table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10%">No</th>
                        <th style="width: 30%">Year</th>
                        <th style="width: 30%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($years)) {
                        for ($i = 0; $i < count($years); $i++) { ?>
                            <tr id="year_<?php echo $years[$i]['id']; ?>">
                                <td class="year-id"><?php echo $years[$i]['id']; ?></td>
                                <td class="year-value"><?php echo $years[$i]['year']; ?></td>
                                <td class="year-action">
                                    <button class="btn btn-warning btn-sm" onclick="editYear(<?php echo $years[$i]['id']; ?>)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="removeYear(<?php echo $years[$i]['id']; ?>)">Remove</button>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- add a question modal -->
<div class="modal fade" id="modal_add_year" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Create a new year</h4>
            </div>
            <div class="modal-body">
                <form id="modal-add-year-form">
                    <div class="form-group">
                        <label>Year</label>
                        <input class="form-control input-mask" data-mask="0000" id="modal_add_year_value" type="text" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-link">Create</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- edit a question modal -->
<div class="modal fade" id="modal_edit_year" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Edit a year</h4>
            </div>
            <div class="modal-body">
                <form id="modal-edit-year-form">
                    <input type="hidden" id="modal_edit_year_id">
                    <div class="form-group">
                        <label>Year</label>
                        <input class="form-control input-mask" data-mask="0000" id="modal_edit_year_value" type="text" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-link">Save Changes</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- remove a question modal -->
<div class="modal fade" id="modal_remove_year" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div class="form-group">
                    <i class="zwicon-info-circle" style="font-size: 7rem"></i>
                </div>
                <div class="form-group">
                    <h3>Are you sure to remove?</h3>
                </div>
                <input type="hidden" id="modal_remove_year_id">
                <button type="button" class="btn btn-link" onclick="removeYearBtn()">Remove</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<?php include(PREPEND_PATH . "views/partials/footer.php"); ?>
<?php include(PREPEND_PATH . "views/partials/foot.php"); ?>
<script>
    let base_url = '';
    $(function () {
        $("#years-table").DataTable({
            aaSorting: [],
            autoWidth: !1,
            responsive: !0,
            lengthMenu: [[15, 40, 100, -1], ["15 Rows", "40 Rows", "100 Rows", "Everything"]],
            language: {searchPlaceholder: "Search for records..."},
            sDom: '<"dataTables__top"flB<"dataTables_actions">>rt<"dataTables__bottom"ip><"clear">',
        });
        base_url = $('meta[name="_base_url"]').attr('content');
    });
    $('#modal-add-year-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/manage-years',
            method: 'post',
            data: {action: "add_year", year_value: $('#modal_add_year_value').val()},
            success: function (res) {
                res = JSON.parse(res);
                if (res.status === "success") {
                    customAlert(res.message, true);
                    setTimeout(function () {
                        location.reload()
                    }, 2000)
                } else customAlert(res.message);
            }
        })
    });
    function editYear(id) {
        let year = $('#year_' + id + ' .year-value').text();
        $('#modal_edit_year_id').val(id);
        $('#modal_edit_year_value').val(year);
        $('#modal_edit_year').modal();
    }
    $('#modal-edit-year-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/manage-years',
            method: 'post',
            data: {
                action: "edit_year",
                year_id: $('#modal_edit_year_id').val(),
                year_value: $('#modal_edit_year_value').val()
            },
            success: function (res) {
                res = JSON.parse(res);
                if (res.status === "success") {
                    customAlert(res.message, true);
                    setTimeout(function () {
                        location.reload()
                    }, 2000)
                } else customAlert(res.message);
            }
        })
    });
    function removeYear(id) {
        $('#modal_remove_year_id').val(id);
        $('#modal_remove_year').modal();
    }
    function removeYearBtn() {
        let id = $('#modal_remove_year_id').val();
        $.ajax({
            url: base_url + '/manage-years',
            method: 'post',
            data: {action: "remove_year", year_id: id},
            success: function (res) {
                res = JSON.parse(res);
                if (res.status === "success") {
                    customAlert(res.message, true);
                    setTimeout(function () {
                        location.reload()
                    }, 2000)
                } else customAlert(res.message);
            }
        })
    }
</script>
</body>
</html>
