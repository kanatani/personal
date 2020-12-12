<template>
<div>
    <nav class="navi" v-show="isActive">
      <ul>
        <li><a href="/person">トップページ</a></li>
        <li><a href="/person/contact">お問い合わせ</a></li>
        <li><a href="" v-on:click.prevent.stop="openModal">sign up</a></li>
      </ul>
    </nav>
    <div id="overlay" v-show="showContent">
      <div class="login_form">
        <div>
          <form action="/person/top" method="post">
            <input type="hidden" name="_token" :value="csrf">
            <div class="login_title"><h3>sign up</h3></div>
            <div>
              <div class="name_form">
                <p class="form_text">name</p>
                <input
                  type="text"
                  name="login_name"
                  class="login_name"
                  placeholder="&#xf007; yourname"
                />
                <small id="emailHelp" class="form-text text-muted"
                  >We'll never share your email with anyone else.</small
                >
              </div>
              <div class="email_form">
                <p class="form_text">email</p>
                <input
                  type="email"
                  name="login_mail"
                  class="login_mail"
                  placeholder="&#xf0e0; your@emal"
                />
                <small id="emailHelp" class="form-text text-muted"
                  >We'll never share your email with anyone else.</small
                >
              </div>
              <div class="pass_form">
                <p class="form_text">password</p>
                <input
                  type="password"
                  name="login_pass"
                  class="login_pass"
                  placeholder="&#xf3c1; password"
                />
                <small id="emailHelp" class="form-text text-muted"
                  >We'll never share your password with anyone else.</small
                >
              </div>
            </div>
            <button class="btn btn-primary" id="login_submit">submit</button>
          </form>
          <button
            class="btn btn-info"
            id="login_submit"
            v-on:click="closeModal"
          >
            close
          </button>
        </div>
      </div>
    </div>
</div>
</template>
<script>
export default {
   props: [
     'isActive',
     ],
  data() {
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      showContent: false,
    };
  },
  methods: {
    openModal: function () {
      this.showContent = true;
    },
    closeModal: function () {
      this.showContent = false;
    },
  },
};
</script>