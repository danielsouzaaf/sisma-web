<template>
  <li v-show="show" :class="{'active': active}"><a :href="href"><slot></slot></a></li>
</template>

<script>
  export default {
    data: function () {
      return {
        active: window.location.href.indexOf(this.href) !== -1
      }
    },
    props: {
      href: {type: String}
    },
    computed: {
      query: function () {
        return this.$parent.query;
      },
      show: function () {
        if (!this.query) {
          return true;
        }

        return this.$el.textContent.toLowerCase().indexOf(this.$parent.query.toLowerCase()) !== -1;
      }
    },
    created: function () {
      if (this.active) {
        this.$set(this.$parent, 'orActive', {active: true});
      }
    }
  }
</script>
