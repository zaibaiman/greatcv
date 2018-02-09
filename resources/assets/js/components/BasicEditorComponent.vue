<template>
    <div style="margin: auto; max-width: 600px;">
        <div class="panel panel-white" v-for="section in sections" :key="section.id">
            <div class="panel-heading">
                <h4 class="panel-title">{{ section.title }}</h4>
            </div>
            <div class="panel-body">
                <div class="media no-margin" v-on:click="openSubsection()">
                    <div class="media-body">
                        <h6 class="media-heading text-semibold">Mortgage and private loan</h6>
                        <span class="text-muted">Standard rate is up to 4.5%</span>
                    </div>
                    <div class="media-right media-middle">
                        <i class="icon-arrow-right32 icon-2x text-purple-300"></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="subsection_modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Profile</h5>
                    </div>

                    <div class="modal-body">
                        <form class="form-horizontal" action="#">
                            <fieldset class="content-group">
                                <div class="form-group form-group-xlg">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-group-xlg">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-group-xlg">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
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
    </div>
</template>

<script>
    export default {
        data() {
            return {
                sections: []
            }
        },

        created() {
            this.sections.push({
                id: 0,
                title: 'Profile'
            });

            this.sections.push({
                id: 1,
                title: 'Work experience',
                subsections: [
                    {
                        jobTitle: '',
                        organization: '',
                        website: ''
                    }
                ]
            });

            this.sections.push({
                id: 2,
                title: 'Education'
            });

            this.sections.push({
                id: 3,
                title: 'Area of Expertice'
            });
        },

        mounted() {
        },

        methods: {
            openSubsection: function() {
                $('#subsection_modal').modal('show');
            }
        }
    }
</script>
