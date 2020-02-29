<template>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <router-link :to="{name: 'add-product'}">
                        <button class="btn btn-primary">Add Product</button>
                    </router-link>
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Products</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="product in products">
                                        <td class="text-center">{{product.id}}</td>
                                        <td>{{product.name}}</td>
                                        <td>{{product.description}}</td>
                                        <td>{{product.quantity}}</td>
                                        <td class="td-actions text-right">
                                            <router-link :to="{name: 'edit-product', params: {id: product.id} }">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            </router-link>
                                            <button @click="deleteProduct(product.id)" type="button" rel="tooltip" class="btn btn-danger btn-simple">
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
        name: "ProductList",
        mounted() {
            this.getProducts();
        },
        data() {
            return {
                products: []
            }
        },
        methods: {
            getProducts() {
                let vm = this;
                axios.get('/products')
                    .then(response => {
                        vm.products = response.data.data;
                    })
            },
            deleteProduct(id){
                let vm = this;
                axios.post('/products/'+ id, {_method: 'DELETE'})
                    .then(response=>{
                        vm.getProducts();
                    })
            }
        }
    }
</script>

<style scoped>

</style>
