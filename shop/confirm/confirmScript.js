let currentLogin = localStorage.getItem('currentLogin')

new Vue ({
    el: ".container",

    data: {
        checkLogin: ""
    },

    methods: {
        loginConfirm: function (){
          localStorage.setItem('currentLogin', this.checkLogin)
        }
    }
})