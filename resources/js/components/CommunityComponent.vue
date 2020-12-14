<template>
<div v-show="isshow">
    <div @click="CommunityClose">
        dfhoajfkjapfk@afklajp
    </div>
</div>
</template>
<script>
export default {
   props: [
     'isshow',
     ],
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