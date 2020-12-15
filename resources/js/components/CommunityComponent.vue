<template>
<div class="community-detail" v-show="isshow">
    <div @click="CommunityClose">
        <h3>{{ community.name }}</h3>
        <h3>{{ community }}</h3>
    </div>
</div>
</template>
<script>
export default {
   props: {
     'isshow' : {
         type:Boolean
     },
     'community' : {
         type:Object,
         required: true,
     },
},
  data() {
    return {
    //   isShow: false,
    };
  },
  methods: {
    CommunityClose: function () {
      this.$emit('close');
    },
  },
};
</script>