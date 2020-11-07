<template>
    <div>
        <div class="row my-4">
            <div class="col-md-8 offset-2">
                <form @submit.prevent="updateData" method="POST" enctype="multipart/form-data">
                    <!-- <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Choose an cover image</label>
                            <input type="file" @change="imageSelected" class="form-control">
                        </div>
                    </div> -->
                    <!-- <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="mt-1 ml-2">
                                    <img v-bind:src="'/media/sites/'+form.thumb" class="figure-img img-fluid rounded"
                                        style="max-height:100px;">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-7 my-2">
                            <label for="">Site name</label>
                            <input type="text" v-model="form.nama_situs" id="" class="form-control">
                        </div>
                        <div class="col-md-4 my-2">
                            <label for="">Current Plan</label>
                            <input type="text" v-model="form.plan_name" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Location</label>
                            <input type="text" v-model="form.location" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Person in Charge</label>
                            <input type="text" v-model="form.pic" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <router-link to="/admin/your-sites" class="btn btn-warning">Cancel</router-link>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                form: {
                    site_name: "",
                    location: "",
                    pic: "",
                    plan_name: ""
                }
            }
        },
        created() {
            this.loadData();
        },
        methods: {
            loadData() {
                axios
                    .get("/api/sites/" + this.$route.params.siteid)
                    .then(response => {
                        this.form.nama_situs = response.data.sitename;
                        this.form.location = response.data.location;
                        this.form.pic = response.data.pic;
                        this.form.plan_name = response.data.plan_name;

                    });
            }
            // imageSelected(e) {
            // this.image = e.target.files[0];
            // let reader = new FileReader();
            // reader.readAsDataURL(this.image);
            // reader.onload = e => {
            // this.imagepreview = e.target.result;
            // }
            // },
        }
    }

</script>
