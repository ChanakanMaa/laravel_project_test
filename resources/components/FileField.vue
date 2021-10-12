<template>
    <div class="FileField__wrapper">
        <img v-bind:src="imagePreview" class="preview-image" v-on:click="openUpload">
        <!--<div class="form-group">
            <label for=""></label>
            <input type="text" name="" id="" class="form-control">
        </div>-->
        <input 
        name="image"
        type="file"
        id="file-field"
        v-on:change="updatePreview"
        style="display: none;">
        <h1>Hi</h1>
    </div>
</template>

<script>

export default ({
    data () {
        return {
            imagePreview: 'pic/asset-01.png'
        }
    },

    methods: {
        openUpload () {

        },

        updatePreview (e) {
            
        }
    }
})
</script>

<style>

</style>