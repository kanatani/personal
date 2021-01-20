<template>
<div>
    <div :class="{'is-active':isActive}" class="btn-humburger" @click="toggleButton">
        <div></div>
        <div></div>
    </div>
     <hummenu-component :isActive="isActive"></hummenu-component>
</div>
  
</template>
<script>
import HummenuComponent from'./HummenuComponent.vue';
export default {
    components: {
    HummenuComponent
  },
    data(){
        return {
            isActive: false,
        };
    },
    methods: {
         toggleButton() {
            this.isActive = !this.isActive;
        },
    }
}
</script>