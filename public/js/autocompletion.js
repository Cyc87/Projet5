var autocompletion = {

     tab : ["Banana", "Orange", "Apple", "Mango"],
   


    init: function () {
        this.autocompletion();
    },

    autocompletion: function () {
        document.getElementById("containerSearch").addEventListener("click", function () {
           
            console.log('hello');
        
        
            
        });
    }
}   
autocompletion1 = Object.create(autocompletion);
autocompletion1.init();