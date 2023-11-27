let user_infoBtn = document.querySelector('.user_infoBtn')
let userInfo = document.querySelector('.userInfo')
let product_infoBtn = document.querySelector('.product_infoBtn')
let productInfo = document.querySelector('.productInfo')
let addProductsDiv = document.querySelector('.addProductsDiv')
let addProducts = document.querySelector('.addProducts')

class AdminPage{
    getUserPage(){
        const userInfo = new Info()
        userInfo.showUserInfo()
        userInfo.showProductInfo()
        userInfo.addNewProduct()
    }
}

class Info{
    showUserInfo(){
        user_infoBtn.onclick = function (){
            userInfo.setAttribute('style', 'display: block')
            productInfo.setAttribute('style', 'display: none')
            addProductsDiv.setAttribute('style', 'display: none')

        }
    }
    showProductInfo(){
        product_infoBtn.onclick = function (){
            userInfo.setAttribute('style', 'display: none')
            productInfo.setAttribute('style', 'display: block')
            addProductsDiv.setAttribute('style', 'display: none')

        }
    }

    addNewProduct(){
        addProducts.onclick = function (){
            addProductsDiv.setAttribute('style', 'display: block')
            userInfo.setAttribute('style', 'display: none')
            productInfo.setAttribute('style', 'display: none')
            
        }
    }
}

const admin = new AdminPage()
admin.getUserPage()


 function insertData(){
    var product_name = document.querySelector('#productName').value
    var price = document.querySelector('#productPrice').value
    var product_year = document.querySelector('#productYear').value

    $.ajax({
        type: "POST",
        url: "admin.php", 
        data: {
            product_name: product_name,
            price: price,
            product_year:product_year
        },
        success: function() {
            alert("Добавляем продукт"); 
        }
    });
}

let securityBtn = document.querySelector('#securityBtn')
let passwordFail = document.querySelector('.passwordFail')
let attemptCount = 0;
class Security {
    secureData(){
        securityBtn.onclick = function (){
            attemptCount++;
            let inputSecurity = document.querySelector('#inputSecurity').value;
            switch (inputSecurity) {
                case "admin":
                    document.querySelector('.container').setAttribute('style', 'display: block')
                    document.querySelector('.security').setAttribute('style', 'display: none')

                    break;
            
                default:
                    passwordFail.innerHTML = "Вы вели неправильный пароль. У вас осталось только 2 попытки"
                    break;
            }
            switch (attemptCount) {
                case 2:
                    passwordFail.innerHTML = "Вы вели неправильный пароль. У вас осталось только 1 попытки"
                    
                    break;
            
                default:
                    break;
            }
            if (attemptCount == 3){
                location.href = "http://localhost/shop/"
            }
        }
    }
}

const security = new Security()
security.secureData()