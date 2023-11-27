function insertData() {
   
}

new Vue ({
    el: '.container',

    data: {
        userName: "",
        password: ""
    },

    methods: {
        insertData: function (){
            var userName = this.$refs.userName.value
            var userEmail = this.$refs.userPassword.value
        
            $.ajax({
                type: "POST",
                url: "reg.php", 
                data: {
                    username: userName,
                    password: userEmail
                },
                success: function() {
                    alert("Добавляем пользователя"); 
                }
            });
        },
        checkLetter: function (){
            var addBtn = this.$refs.addBtn

            if (this.userName.length < 5 && this.password.length < 8){
                addBtn.setAttribute('style', 'display: none')
            }else {
                addBtn.setAttribute('style', 'display: block; cursor: pointer')

            }
        }
    }

})

