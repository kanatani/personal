<template>

</template>
<script>
export default {
    data(){
        return {
            url:"",
        };
    },
    methods: {
         uploadFile(){
            const file = this.$refs.preview.files[0];
            this.url = URL.createObjectURL(file);
        },
        deletePreview() {
            this.url = '';
            URL.revokeObjectURL(this.url);
        }
    }
}
</script>