<template>
    <footer class="footer">
        <div class="container-fluid">
            <p class="copyright pull-right">
                &copy; {{date}}
            </p>
        </div>
    </footer>
</template>

<script>
    export default {
        name: "FooterComponent",
        data(){
            return {
                date: new Date().getFullYear()
            }
        }
    }
</script>

<style scoped>

</style>
