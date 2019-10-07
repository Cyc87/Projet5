var addImage = {

    init: function () {
        this.categoryOpen();
        this.categoryClosed();
    },
    categoryOpen: function () {
        document.getElementById("buttonAddImage").addEventListener("click", function () {
            document.getElementById("addImage").style.display = 'block';
            document.getElementById("crossAddbutton").style.display = 'block';
        });
    },

    categoryClosed: function () {
        document.getElementById("crossAdd").addEventListener("click", function () {
            document.getElementById("addImage").style.display = 'none';
            document.getElementById("crossAddbutton").style.display = 'none';
        });
    },
}
addImage1 = Object.create(addImage);
addImage1.init();