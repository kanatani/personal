<template>
    <div>いいね</div>
</template>

<script>
    export default {
       data() {
        return {
            visible: false
        };
    },
    created() {
        window.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
        window.removeEventListener("scroll", this.handleScroll);
    },
    method: {
        handleScroll() {
            if(!this.visible) {
                var top = this.$el.getBoundingClientRect().top;
                this.visible = top < window.innerHeight + 100;
            }
        }
    }
}
</script>