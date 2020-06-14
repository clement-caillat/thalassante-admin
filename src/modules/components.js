Vue.component('nav-menu-button', {
  props: ['title', 'link', 'icon', 'active'],
  template: `
      <li v-bind:class="{selected: active}">
      <a :href="link">
          <div class="nav-button-icon">
              <i :class="icon"></i>
          </div>
          <div class="nav-button-title">
              <span>{{ title }}</span>
          </div>
      </a>
    </li>
  `
})


new Vue({el: "#navigation-menu"})