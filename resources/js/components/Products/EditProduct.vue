<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">Edit Product</h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-right">Product Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty" style="margin: 0px">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" v-model="product.name">
                                        <span class="help-block">Enter Product Name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-right">Product Description</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty" style="margin: 0px">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" v-model="product.description">
                                        <span class="help-block">Enter Product Description</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-right">Product Quantity</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty" style="margin: 0px">
                                        <label class="control-label"></label>
                                        <input type="number" class="form-control" v-model="product.quantity">
                                        <span class="help-block">Enter Product Quantity</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left"></label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty" style="margin: 0px">
                                        <button @click="update()" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
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
        name: "EditProduct",
        mounted() {
            this.getProduct();
        },
        data(){
            return {
                product: {
                    'name': '',
                    'description': '',
                    'quantity': '',
                }
            }
        },
        methods: {
            update(){
                let vm = this;
                vm.product._method = 'PUT';
                axios.post('/products/'+vm.product.id, vm.product)
                    .then(response=>{
                        vm.$router.push({name: 'products'})
                    })
            },
            getProduct(){
                let vm = this;
                axios.get('/products/' + vm.$route.params.id + '/edit/')
                    .then(response => {
                        vm.product = response.data.data;
                    })
            }
        }
    }
</script>

<style scoped>

</style>
