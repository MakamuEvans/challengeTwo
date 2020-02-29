<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".example-modal-sm">Add Product</button>

        <div class="modal fade example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Select Product</label>
                            <select class="form-control" v-model="order_product.product_id">
                                <option v-for="product in products" :key="product.id" :value="product.id">{{product.name}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" @click="save()" class="btn btn-default">Update</button>
                        <button type="button" id="close_modal" class="btn btn-info" data-dismiss="modal">Close
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NewOrderProduct",
        mounted() {
            let vm = this;
            this.$root.$on('toggleModal', (status)=>{
                vm.toggleModal(status)
            })
            vm.fetchProducts()
        },
        data(){
            return {
                showModal: false,
                products: [],
                order_product: {
                    product_id: '',
                    order_id: this.$route.params.id
                }
            }
        },
        methods:{
            toggleModal(status){
                this.showModal = status
            },
            fetchProducts(){
                let vm = this;
                axios.get('/products')
                    .then(response => {
                        vm.products = response.data.data;
                    })
            },
            save(){
                let vm = this;
                axios.post('/order-product', vm.order_product)
                .then(response=>{
                    document.getElementById("close_modal").click();
                    vm.$emit('orderUpdate');
                })
            }
        }
    }
</script>

<style scoped>

</style>
