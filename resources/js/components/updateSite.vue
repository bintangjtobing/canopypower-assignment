<template>
    <div>
        <div class="row my-4">
            <div class="col-md-8 offset-2">
                <form @submit.prevent="updateData" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Your current image</label>
                            <div class="mt-1">
                                <img v-bind:src="'/media/sites/'+getS.thumb" v-if="getS.thumb && getS.thumb!==''"
                                    class="figure-img img-fluid rounded" style="max-height:100px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Choose an cover image</label>
                            <input type="file" @change="imageSelected" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="mt-1 ml-2" v-if="imagepreview">
                                    <img :src="imagepreview" class="figure-img img-fluid rounded"
                                        style="max-height:100px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 my-2">
                            <label for="">Site name</label>
                            <input type="text" v-model="getS.sitename" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Location</label>
                            <input type="text" v-model="getS.location" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Person in Charge</label>
                            <input type="text" v-model="getS.pic" id="" class="form-control">
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
                getS: {
                    site_name: "",
                    location: "",
                    pic: "",
                    plan_name: ""
                },
                image: null,
                imagepreview: null,
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
                        // json_encode(this.getS);
                        this.getS.sitename = response.data.site_name;
                        this.getS.location = response.data.location;
                        this.getS.pic = response.data.pic;
                        this.getS.plan_name = response.data.plan_name;
                        this.getS.thumb = response.data.thumb;
                        // console.log(this.getS);
                    }).catch(err => console.log(err.response));
            },
            imageSelected(e) {
                this.image = e.target.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(this.image);
                reader.onload = e => {
                    this.imagepreview = e.target.result;
                }
            },
            updateData() {
                let dataU = new FormData();
                dataU.append('image', this.image);
                dataU.append('site_name', this.getS.sitename);
                dataU.append('location', this.getS.location);
                dataU.append('pic', this.getS.pic);
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }
                axios
                    .post('/api/sites/update/' + this.$route.params.siteid, dataU, config)
                    .then(response => {
                        console.log(this.dataU);
                        this.$router.push('/admin/your-sites');
                    }).catch(err => console.log(err.response));
            }
        }
    }

</script>
