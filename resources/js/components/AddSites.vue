<template>
    <div>
        <div class="row my-4">
            <div class="col-md-8 offset-2">
                <form @submit.prevent="addSites" method="POST" enctype="multipart/form-data">
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
                            <input type="text" v-model="form.site_name" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-4 my-2">
                            <label for="">Choose plan:</label>
                            <select v-model="form.plan_id" class="form-control custom-select">
                                <option>Choose your plan..</option>
                                <option v-bind:value="plan.id" v-for="plan in plans" :key="plan.id">
                                    {{plan.plan_name}}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Location</label>
                            <input type="text" v-model="form.location" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label for="">Person in Charge</label>
                            <input type="text" v-model="form.pic" class="form-control" placeholder="">
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
                    site_name: '',
                    location: '',
                    pic: '',
                },
                image: null,
                imagepreview: null,
                plans: [],
            }
        },
        mounted() {
            this.loadData();
        },
        methods: {
            imageSelected(e) {
                this.image = e.target.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(this.image);
                reader.onload = e => {
                    this.imagepreview = e.target.result;
                }
            },
            addSites() {
                let data = new FormData;
                data.append('image', this.image);
                data.append('site_name', this.form.site_name);
                data.append('location', this.form.location);
                data.append('pic', this.form.pic);
                data.append('plan_id', this.form.plan_id);
                axios.post('/add-new-site', data)
                    .then(response => {
                        this.$router.push('/admin/your-sites');
                    }).catch(() => {

                    })
            },
            loadData() {
                axios.get("/api/get-plan")
                    .then(response => {
                        this.plans = response.data;
                    })
            }
        }
    }

</script>
