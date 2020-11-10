<template>
<div class="new_file">
     <h4>プロフィール画像</h4>
     <label class="file">
        <input type="file" name="file" @change="onFileChange" />
        ファイルを選択
    </label>
    <br>
    <div class="preview-item">
        <img
        v-show="uploadedImage"
        class="preview-item-file"
        :src="uploadedImage"
        alt=""
      />
     <div v-show="uploadedImage" class="preview-item-btn" @click="remove">
        <p class="preview-item-name">{{ img_name }}</p>
       <p>close</p>
      </div>
    </div>
 </div>
</template>