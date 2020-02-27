<template>
    <div class="sidebar">
        <div class="logo">
            <a href="index.html#" class="simple-text">
                SoluTech
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="index.html#" class="simple-text">
                S
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <router-link :to="{name: 'suppliers'}">
                        <i class="material-icons">dashboard</i>
                        <p>Suppliers</p>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{name: 'products'}">
                        <i class="material-icons">dashboard</i>
                        <p>Products</p>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{name: 'orders'}">
                        <i class="material-icons">dashboard</i>
                        <p>Orders</p>
                    </router-link>
                </li>
            </ul>

        </div>
    </div>

</template>

<script>
    export default {
        name: "SidebarComponent"
    }
</script>

<style scoped>

</style>
