<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">New Product Supplier</h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-right">Select Product</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty" style="margin: 0px">
                                        <label class="control-label"></label>
                                        <select class="form-control" v-model="product_supplier.product_id">
                                            <option v-for="product in products" :key="product.id" :value="product.id">{{product.name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-right">Select Suppliers</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty" style="margin: 0px">
                                        <label class="control-label"></label>
                                        <select class="form-control" v-model="product_supplier.supply_id">
                                            <option v-for="supplier in suppliers" :key="supplier.id" :value="supplier.id">{{supplier.name}}</option>
                                        </select>
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
        name: "NewProductSupplier",
        mounted() {
            this.fetchData();
        },
        data(){
            return {
                product_supplier: {
                    'product_id': '',
                    'supply_id': '',
                },
                products: [],
                suppliers: []
            }
        },
        methods: {
            save(){
                let vm = this;
                axios.post('/product-suppliers', vm.product_supplier)
                    .then(response=>{
                        vm.$router.push({name: 'product-suppliers'})
                    })
            },
            fetchData(){
                let vm = this;
                axios.get('/product-suppliers/create')
                    .then(response=>{
                        vm.products = response.data.products;
                        vm.suppliers = response.data.suppliers;
                    })
            }
        }
    }
</script>

<style scoped>

</style>
