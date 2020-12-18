<template>
  <div class="community-detail" v-show="isshow">
    <div @click="CommunityClose">
      <div class="community-detail-title">
        <h3>{{ community.name }}</h3>
      </div>
      <div class="community-detail-image-list">
        <img
          :src="'/uploads/' + community.image"
          alt=""
          class="community-detail-image"
        />
      </div>
      <div class="community-detail-menu">
        <div class="community-detail-menu-list">
          <div class=community-detail-menu-parts><a :href="'groupchat/' + community.groupid">トーク</a></div>
          <div class=community-detail-menu-parts><a :href="'group_detail/' + community.groupid">メンバー</a></div>
          <div class=community-detail-menu-parts><a href="">退会</a></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    isshow: {
      type: Boolean,
    },
    community: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {};
  },
  methods: {
    CommunityClose: function () {
      this.$emit("close");
    },
  },
};
</script>