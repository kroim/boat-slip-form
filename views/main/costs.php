<html>
<?php
if (!defined('PREPEND_PATH')) define('PREPEND_PATH', '');
include(PREPEND_PATH . "views/partials/head.php");
include(PREPEND_PATH . "views/partials/header.php");
?>
<style>
    #cost-table th, #cost-table td {
        text-align: center;
        font-size: 14px;
    }
</style>
<body data-sa-theme="5">
<?php include(PREPEND_PATH . "views/partials/sidebar.php"); ?>
<section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>All Costs</h1>
        </header>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive data-table">
                    <table id="cost-table" class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th style="width: 10%">Name</th>
                            <th style="width: 10%">Cost</th>
                            <th style="width: 15%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for ($i = 0; $i < count($costs); $i++) { ?>
                            <tr id="cost_<?php echo $costs[$i]['id']; ?>">
                                <td class="cost-id"><?php echo $costs[$i]['id']; ?></td>
                                <td class="cost-name"><?php echo $costs[$i]['name']; ?></td>
                                <td class="cost-value"><?php echo $costs[$i]['cost']; ?></td>
                                <td class="question-action">
                                    <button class="btn btn-warning btn-sm" onclick="editCost(<?php echo $costs[$i]['id']; ?>)">Edit</button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- edit a question modal -->
<div class="modal fade" id="modal_edit_cost" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Edit a cost item</h4>
            </div>
            <div class="modal-body">
                <form id="modal-edit-cost-form">
                    <input type="hidden" id="modal_edit_cost_id">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="modal_edit_cost_name" readonly>
                    </div>
                    <div class="form-group">
                        <label>Cost</label>
                        <input type="number" class="form-control" id="modal_edit_cost_value" step="0.01" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-link">Save changes</button>
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
        $("#cost-table").DataTable({
            aaSorting: [],
            autoWidth: !1,
            responsive: !0,
            lengthMenu: [[15, 40, 100, -1], ["15 Rows", "40 Rows", "100 Rows", "Everything"]],
            language: {searchPlaceholder: "Search for records..."},
            sDom: '<"dataTables__top"flB<"dataTables_actions">>rt<"dataTables__bottom"ip><"clear">',
        });
        base_url = $('meta[name="_base_url"]').attr('content');
    });
    function editCost(id) {
        let name = $('#cost_' + id + ' .cost-name').text();
        let cost = $('#cost_' + id + ' .cost-value').text();
        $('#modal_edit_cost_id').val(id);
        $('#modal_edit_cost_name').val(name);
        $('#modal_edit_cost_value').val(cost);
        $('#modal_edit_cost').modal();
    }
    $('#modal-edit-cost-form').on('submit', function (e) {
        e.preventDefault();
        let data = {
            id: $('#modal_edit_cost_id').val(),
            name: $('#modal_edit_cost_name').val(),
            cost: $('#modal_edit_cost_value').val()
        };
        $.ajax({
            url: base_url + '/costs',
            method: 'post',
            data: data,
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
    })
</script>

</body>
</html>
