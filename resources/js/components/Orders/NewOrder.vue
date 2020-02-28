<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Order #{{order.id}}</h4>
                            <new-order-product></new-order-product>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Date Added</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Andrew Mike</td>
                                        <td>Develop</td>
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
    import NewOrderProduct from "./NewOrderProduct";
    export default {
        name: "NewOrder",
        mounted() {
            this.createOrder();
        },
        components: {
            NewOrderProduct
        },
        data() {
            return {
                order: {},
            }
        },
        methods: {
            createOrder() {
                let vm = this;
                axios.post('/orders')
                    .then(response => {
                        vm.order = response.data.data;
                    })
            },
            addProduct(){
                this.$root.$emit('toggleModal', true);
            }
        }

    }
</script>

<style scoped>

</style>
