<template>
    <div id="subsection_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <h3 class="text-semibold">Settings</h3>
                    <form class="form-horizontal" action="#">
                        <fieldset class="content-group">
                            <div class="form-group form-group-xlg">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn border-primary text-primary btn-flat" data-dismiss="modal"><span class="text-light">Delete cover letter</span></button>
                    <button type="button" class="btn btn-primary"><span class="text-light">Save</span></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>
