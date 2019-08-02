var app = {

    init: function () {
        this.categoryOpen();
        this.categoryClosed();
    },

    categoryOpen: function () {
         
           document.getElementById("category").addEventListener("click", function () {
               document.getElementById("resumeCategory").style.display = 'block';
           });
        
    },
    categoryClosed: function () {
       
        document.getElementById("croix").addEventListener("click", function () {
            document.getElementById("resumeCategory").style.display = 'none';
        });
    },

}
app1 = Object.create(app);
app1.init();