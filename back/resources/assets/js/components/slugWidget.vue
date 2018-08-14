<style scoped>
    .slug-widget{
    display:flex;
    justify-content:flex-start;
    align-item:center;
    }
    .wrapper{
    margin-left: 8px;
    }
    .slug{
    background-color:#fdfd96;
    padding:3px 5px;
    }
</style>

<template>
    <div class="slug-widget">
        <div class="icon-wrapper wrapper">
            <i class="fa fa-link"></i>
        </div>
        <div class="url-wrapper">
            <span class="root-url">http://example.com</span>
            <span class="subdirectory-url">/blog/</span>
            <span class="slug">coolest-post-ever</span>
        </div>
        <div class="button-wrapper wrapper">
            <button class="button is-small">Edit</button>   
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
