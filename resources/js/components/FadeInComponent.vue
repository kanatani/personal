<template>
<div>
    
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