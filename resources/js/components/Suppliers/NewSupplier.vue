<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">New Supplier</h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-right">Supplier Name</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty" style="margin: 0px">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" v-model="name">
                                        <span class="help-block">Enter supplier Name</span>
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
        name: "NewSupplier",
        data(){
            return {
                name: '',
            }
        },
        methods:{
            save(){
                let vm = this;
                axios.post('/suppliers', {name: vm.name})
                .then(response=>{
                    vm.$router.push({name: 'suppliers'})
                })
            }
        }
    }
</script>

<style scoped>

</style>
