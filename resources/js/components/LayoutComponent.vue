<template>
    <span>
        <sidebar-component></sidebar-component>
        <div class="main-panel">
            <header-component></header-component>
            <router-view></router-view>
            <footer-component></footer-component>
        </div>
    </span>
</template>

<script>
    import FooterComponent from './includes/FooterComponent'
    import HeaderComponent from './includes/HeaderComponent'
    import SidebarComponent from './includes/SidebarComponent'


    export default {
        name: "LayoutComponent",
        components: {
            FooterComponent,HeaderComponent,SidebarComponent
        }
    }
</script>

<style scoped>

</style>
