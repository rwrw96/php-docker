
// alert('こんにちは');
var Member = function(firstName, lastName){
    this.firstName = firstName;
    this.lastName = lastName;
    this.getName = function(){
        return this.lastName + this.firstName;
    }
    
};
    var mem = new Member('test', 'query');
    console.log(mem.getName());

// var current = new Date();
// var result = document.getElementById('result');
// result.textContent = current.toLocaleString();

$(function(){
    $('.box').hover(
        function(){
            $(this).fadeOut();
        },
        function(){
            $(this).fadeIn();
        }
    );
})