<div id="update<?php echo $infastracture_data['fldID'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <h4 class="modal-title" id="primary-header-modalLabel">EDIT INFASTRACTURE PROPOSAL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            
            <form action="backend/infastracture-edit-process.php?id=<?php echo $infastracture_data['fldID'] ?>" method="post"  id="myAwesomeDropzone" enctype="multipart/form-data">

                <div class="mb-3">
                    <input type="hidden" name="infastractureid" id="simpleinput" class="form-control" value="<?php echo $edit_qry_fetch['fldID']?>">
                </div>
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Title</label><span class="text-danger"> *</span>
                            <input type="text" name="title" id="simpleinput" class="form-control" value="<?php echo $infastracture_data['fldTitle']?>" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Proponent (Researcher)</label><span class="text-danger"> *</span>
                            <input type="text" name="proponent" id="simpleinput" class="form-control" value="<?php echo $infastracture_data['fldProponents']?>" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="example-select" class="form-label">Date Of Approval</label><span class="text-danger"> *</span>
                            <input type="text" class="form-control date" name="dateofapproval" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true" value="<?php echo $infastracture_data['fldDateofApproval']?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="example-select" class="form-label">Target Completion</label><span class="text-danger"> *</span>
                            <input type="text" class="form-control date" name="targetcompletion" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true" value="<?php echo $infastracture_data['fldTargetCompletion']?>">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Description</label><span class="text-danger"> *</span>
                            <input type="text" name="description" id="simpleinput" class="form-control" value="<?php echo $infastracture_data['fldDescription']?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h6>Proposal</h6>
                        <a class="btn btn-danger btn-sm form-control" href="files/infastracture/<?php echo $infastracture_data['fldCopyOfProposal'] ?>" target="_blank">
                            <?php echo $infastracture_data['fldCopyOfProposal'] ?>
                        </a>
                    </div>
                    <div class="col-6">
                        <h6>HGDG</h6>
                        <a class="btn btn-danger btn-sm form-control" href="files/infastracture/<?php echo $infastracture_data['fldHGDG'] ?>" target="_blank">
                            <?php echo $infastracture_data['fldHGDG'] ?>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-6 col-form-label">Copy of Proposal</label>
                    <div class="col-6 fallback">
                        <input name="proposal" type="file" accept="pdf" multiple />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-6 col-form-label">Accomplished HGDG Design</label>
                    <div class="col-6 fallback">
                        <input name="hgdg" type="file" accept="pdf" multiple />
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button name="update" class="btn btn-primary">UPDATE</button>
            </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->