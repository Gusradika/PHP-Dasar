var a = 3;
var b = 4;

var c = a + b;

console.log(c);

const select_body = document.querySelector("body");
const select_textOperator = document.querySelector(".op1");

select_textOperator.addEventListener("mouseenter",function(){
    select_textOperator.style.backgroundColor = "salmon";
});

select_textOperator.addEventListener("mouseleave",function(){
    select_textOperator.style.backgroundColor = "";
});

for ( var i = 0; i < 5; i++){
    console.log (i+1);
}