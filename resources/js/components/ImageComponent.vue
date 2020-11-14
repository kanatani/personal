<template>
<div class="new_file">
    <h3 class="profile_image_text">プロフィール画像</h3>
      <label class="file">
        <input type="file" ref="preview" name="image" @change="uploadFile">
            ファイルを選択
        </label>
        <br>
        <div v-if="url" class="preview-item">
            <div style="position:absolute" @click="deletePreview" class="x_button">x</div>
                <img :src="url" alt="">
                <div>
                    <p class="preview-item-name"></p>
                </div>
            </div>
        </div>
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