<div id="delete<?php echo $infastracture_data['fldID'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-danger">
                <h4 class="modal-title" id="info-header-modalLabel">Warning</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <div class="modal-body">
                Are you sure you want to archive this data?
            </div>

            <div class="modal-footer">
                <form action="backend/infastracture-delete-process.php?id=<?php echo $infastracture_data['fldID'] ?>" method="post">
                    <button name="delete-iec" class="btn btn-danger">Archive</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  