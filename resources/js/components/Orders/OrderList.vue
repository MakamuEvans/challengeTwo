<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Orders</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Job Position</th>
                                        <th>Since</th>
                                        <th class="text-right">Salary</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Andrew Mike</td>
                                        <td>Develop</td>
                                        <td>2013</td>
                                        <td class="text-right">&euro; 99,225</td>
                                        <td class="td-actions text-right">

                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>John Doe</td>
                                        <td>Design</td>
                                        <td>2012</td>
                                        <td class="text-right">&euro; 89,241</td>
                                        <td class="td-actions text-right">

                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Alex Mike</td>
                                        <td>Design</td>
                                        <td>2010</td>
                                        <td class="text-right">&euro; 92,144</td>
                                        <td class="td-actions text-right">

                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Mike Monday</td>
                                        <td>Marketing</td>
                                        <td>2013</td>
                                        <td class="text-right">&euro; 49,990</td>
                                        <td class="td-actions text-right">

                                            <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>Paul Dickens</td>
                                        <td>Communication</td>
                                        <td>2015</td>
                                        <td class="text-right">&euro; 69,201</td>
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
        name: "OrderList"
    }
</script>

<style scoped>

</style>
