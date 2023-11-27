let currentLogin = localStorage.getItem('currentLogin')

// variable
let profileName = document.querySelector('.profileName')
let adminGUI = document.querySelector('.adminGUI')
let companyNameText = document.querySelector('.companyNameText')
let shopButton = document.querySelector('.shopButton')
let instrument = document.querySelector('.instrument')

class Interface {
    defineInterface(login){
        if (login == "admin"){
            const adminInterface = new AdminInterface()
            adminInterface.showAdminInterface()
        }else {
            const userInterface = new UserInterface()
            userInterface.showUserInterface()
        }
    }

    generalFunctions(){
        profileName.innerHTML = currentLogin[0].toUpperCase()

        companyNameText.onclick = function (){
            location.reload()
        }

        shopButton.onclick = function (){
            location.href = "http://localhost/shop/product/product.php"
        }
    }

    gsapAnimation (){
        let gsapTimeLine = gsap.timeline()
        
        gsapTimeLine.from('.generalImg', {opacity: 0, duration: 1, y: -10, stragger: 0.25})
        gsapTimeLine.from("#textAnimation", {y: -10, opacity: 0, duration: 0.6, stragger: 0.25})
    }
}

class AdminInterface {
    showAdminInterface(){
        adminGUI.setAttribute('style', 'display: flex')
        instrument.onclick = function (){
            location.href = ('http://localhost/shop/admin/admin.php')
            
        }
    }
}

class UserInterface {
    showUserInterface(){
        console.log("user");
    }
}

const interface = new Interface()
interface.defineInterface(currentLogin)
interface.generalFunctions()
interface.gsapAnimation()

