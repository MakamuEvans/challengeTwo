<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <router-link :to="{name: 'add-supplier'}">
                        <button class="btn btn-primary">Add Supplier</button>
                    </router-link>
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Suppliers</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Supplier Name</th>
                                        <th>Status</th>
                                        <th class="text-right">Created On</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="supplier in suppliers">
                                        <td class="text-center">{{supplier.id}}</td>
                                        <td>{{supplier.name}}</td>
                                        <td>{{supplier.status}}</td>
                                        <td class="text-right">{{supplier.created_at}}</td>
                                        <td class="td-actions text-right">
                                            <router-link :to="{name: 'edit-supplier', params: {id: supplier.id} }">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </router-link>
                                            <button @click="deleteSupplier(supplier.id)" type="button" rel="tooltip" class="btn btn-danger btn-simple">
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
        name: "SupplierList",
        mounted() {
            this.getSuppliers();
        },
        data() {
            return {
                suppliers: []
            }
        },
        methods: {
            getSuppliers() {
                let vm = this;
                axios.get('/suppliers')
                    .then(response => {
                        vm.suppliers = response.data.data;
                    })
            },
            deleteSupplier(id){
                let vm = this;
                axios.post('/suppliers/'+ id, {_method: 'DELETE'})
                .then(response=>{
                    vm.getSuppliers();
                })
            }
        }
    }
</script>

<style scoped>

</style>
