var category = {

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
category1 = Object.create(category);
category1.init();