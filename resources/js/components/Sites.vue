<template>
    <div>
        <div class="row mt-5">
            <div class="col-lg-6 text-left">
                <h3>Your Sites</h3>
            </div>
            <div class="col-lg-6 text-right">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <router-link to="/admin/add-sites" class="btn btn-lg btn-block btn-primary btn-main">
                        <span><i class="fas fa-plus"></i></span>
                        <h4>Add new website?</h4>
                    </router-link>
                </div>
            </div>
            <div v-for="site in sites" :key="site.id" class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class="" v-bind:src="'/media/sites/'+site.thumb" alt="Card image cap">
                            <h5>{{site.site_name}}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>{{site.location}}</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>{{site.comdate}}</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>{{site.pic}}</span>
                        </p>
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
                sites: []
            };
        },
        mounted() {
            this.loadData();
        },
        methods: {
            loadData() {
                axios.get("/api/sites")
                    .then(response => {
                        this.sites = response.data;
                        // console.log(this);
                    })
            }
        }
    }

</script>
