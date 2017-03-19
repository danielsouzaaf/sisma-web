<template>
  <li class="treeview" v-show="show" :class="[isActive, orActive]">
    <a href="#"><i class="fa fa-link"></i>
    <span>{{ title }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <slot></slot>
    </ul>
  </li>
</template>

<script>
  export default {
    data: function () {
      return { orActive: {} };
    },
    props: {
      title: {type: String},
      children: {type: Array}
    },
    computed: {
      query: function () {
        return this.$parent.query;
      },
      show: function () {
        if (!this.query) {
          return true;
        }

        return this.$children.some(function (e) {
          return e.show;
        });
      },
      isActive: function () {
        if (!this.query) {
          return {
            active: this.$children.some(function (e) {
              return e.active;
            })
          };
        }

        return {
          active: this.$children.some(function (e) {
            return e.show;
          })
        };
      }
    }
  }
</script>
