<template>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <router-link :to="{name: 'add-product-supplier'}">
                        <button class="btn btn-primary">Add Product-Supplier</button>
                    </router-link>
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Product Suppliers</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Product Name</th>
                                        <th>Supplier Name</th>
                                        <th>Dated</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="item in productSuppliers">
                                        <td class="text-center">{{item.id}}</td>
                                        <td>{{item.product.name}}</td>
                                        <td>{{item.supplier.name}}</td>
                                        <td>{{item.created_at}}</td>
                                        <td class="td-actions text-right">

                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                <i class="material-icons">close</i>
                                            </button>
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
        name: "ProductSupplierList",
        mounted() {
            this.getProducts();
        },
        data() {
            return {
                productSuppliers: []
            }
        },
        methods: {
            getProducts() {
                let vm = this;
                axios.get('/product-suppliers')
                    .then(response => {
                        vm.productSuppliers = response.data.data;
                    })
            }
        }
    }
</script>

<style scoped>

</style>
