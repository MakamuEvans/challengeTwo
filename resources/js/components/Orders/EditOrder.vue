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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="detail in order.order_details">
                                        <td>{{detail.product.name}}</td>
                                        <td>{{detail.created_at}}</td>
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
        name: "EditOrder",
        mounted() {
            this.fetchOrder();
            this.$on('orderUpdate', ()=>{
                this.fetchOrder();
            })
        },
        components: {
            NewOrderProduct
        },
        data() {
            return {
                order: [],
            }
        },
        methods: {
            fetchOrder() {
                let vm = this;
                axios.get('/orders/'+vm.$route.params.id)
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
