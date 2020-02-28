<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <router-link :to="{name: 'order'}">
                        <button class="btn btn-primary">Create Order</button>
                    </router-link>
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Orders</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Order Number</th>
                                        <th class="text-right">Created On</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="order in orders">
                                        <td class="text-center">{{order.id}}</td>
                                        <td>{{order.order_number}}</td>
                                        <td>{{order.created_at}}</td>
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
        name: "OrderList",
        mounted() {
            this.getOrders();
        },
        data() {
            return {
                orders: []
            }
        },
        methods: {
            getOrders() {
                let vm = this;
                axios.get('/orders')
                    .then(response => {
                        vm.orders = response.data.data;
                    })
            }
        }
    }
</script>

<style scoped>

</style>
