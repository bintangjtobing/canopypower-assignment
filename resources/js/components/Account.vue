<template>
    <div>
        <div class="row mt-5">
            <div class="col-lg-6 text-left">
                <h3>Account</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <div class="row">
                            <div class="col-lg-4 imgprofile text-center">
                                <img v-bind:src="img" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-8 short-info">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td id="head">Company</td>
                                            <td>Canopy Power</td>
                                        </tr>
                                        <tr>
                                            <td id="head">Email</td>
                                            <td>li.xiang@canopypower.com</td>
                                        </tr>
                                        <tr>
                                            <td id="head">User Since</td>
                                            <td>Fri, 01 Apr 2016</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Subcription</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Site</th>
                                            <th scope="col">Current Plan</th>
                                            <th scope="col">Valid Until</th>
                                            <th scope="col">Act.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="list in lists" :key="list.siteid">
                                            <td>{{list.site_name}}</td>
                                            <td><span style="color: green;"><i class="fas fa-fire"></i></span>
                                                {{list.plan_name}}
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <router-link class="btn btn-primary"
                                                    :to="'/admin/update-sites/'+list.siteid">Update</router-link>
                                                <button class="btn btn-danger"
                                                    v-on:click="deleteData(list.siteid)">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'account',
        data() {
            return {
                img: '/asset/logo-nav.png',
                lists: []
            };
        },
        mounted() {
            this.loadData();
        },
        methods: {
            loadData() {
                axios.get("/api/list-sites")
                    .then(response => {
                        this.lists = response.data;
                        // console.log(this);
                    })
            },
            deleteData(siteid) {
                axios.delete("/api/list-sites/" + siteid).then(response => {
                    this.loadData();
                });
            }
        }
    }

</script>
