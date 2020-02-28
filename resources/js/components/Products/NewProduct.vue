<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">New Product</h4>
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
                                        <button @click="save()" class="btn btn-primary">Save</button>
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
        name: "NewProduct",
        data(){
            return {
                product: {
                    'name': '',
                    'description': '',
                    'quantity': ''
                }
            }
        },
        methods: {
            save(){
                let vm = this;
                axios.post('/products', vm.product)
                    .then(response=>{
                        vm.$router.push({name: 'products'})
                    })
            }
        }
    }
</script>

<style scoped>

</style>
