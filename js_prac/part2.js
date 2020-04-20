// console.log("Welcome to part 2 of this practice session")

// // convert object literal to json string using JSON.stringify

// const data = [
//     {
//         name :'maheen',
//         age :'20'
//     },
//     {
//         name : 'sara',
//         age :'19'
//     },
// ]

// console.log(`this is noraml array ${data}`)
// const dataJSON = JSON.stringify(data)
// console.log(`this is noraml array ${dataJSON}`)
// // for loop
// for (let i = 0;i<=10;i+=2){
//     console.log("this is i = "+i)
// }
// // while loop
// let j = 1
// while (j<10){
//     console.log("this is j = "+j)
//     j++
// }

// // loop through an array iwith "of keyword"
// // for(let value of data){
// //     console.log(value)
// // }

// // loop thorugh array with the following keywords: these are HIGH ORDER ARRAY METHODS

// // **1** for each : it passes through each data with a fucntion
// const fromforeach = data.forEach(
//     function(obj){
//         console.log(obj)
//         console.log(typeof(obj))
//         return "happy"

// }
// )
// console.log("for each = "+fromforeach)//this is undefined cz for each doesnt return anything

// // **2** map : it returns
// const whats = data.map(function(obj){
//     console.log(obj)
// })

// console.log(whats) //this gives undefined cz we ddint put ret statemnet

// const what2 = data.map(function(obj){
//     console.log("from returning map : "+obj.name)
//     return "happy"
// })

// console.log(what2)//thsi iwll show the returned data from map functionality

// // **3** filter ketyword
// // returns teh data with the mentiond filter
// const f_data = data.filter(function(obj){

//     console.log("from filter function")
//     return obj.name == 'maheen'  //this will return the complete object for which this filter is true
// })


// console.log(f_data)

// // using filter to get particular data with map

// const myage = data.filter(function(obj){
//     return obj.name=="maheen"
// }).map(function(obj){
//     return obj.age
// })
// console.log("filtered+map = "+myage)


// CONDITIONALS
// if -else if - else

// let color = "blue";
// for (let i=0 ;i<2;i++){
//     if (color === 'blue'){
//         console.log("color is blue")
//         color= 'red'
//     }
//     else{
//         console.log("not blue")
//     }
// }
// // || is or && is and

// // ternery opertaor
// const mycolor = 11;
// const yours =  mycolor==10 ? 11:12; //? means "if" , the thng before ":" implies if teh condition before "?" is true, otherwise ,the thing after ":" is executed
// console.log(",ycolor is "+yours)


// // switches
// switch(mycolor){
//     case 10:
//         console.log("its 10");
//         break;
//     case 9:
//         console.log("its 9")
//         break;
//     default:
//         console.log("its defauls")
// }
// // functions

// function simple(name){
//     console.log("you entered "+name)
//     return "your name is "+name
// }

// simple("maheen")
// console.log(simple("maheen saleh"))


// // => operator
// const first  = (a,b)=>a+b
// console.log("sum is "+first(9,9))
// console.log("sum again is "+first)

// const complex  = (a,b)=>{
//     a= a*2
//     return a+b
// }

// console.log(" another example is "+complex(12,1))


///////////=====   OBJECT ORIENTED PROGRAMMING ===== /////////////


//create a constructor for your class
// function Book(name, author, year){

//     this.name = name;
//     this.author = author;
//     this.year = new Date(year)

//     //creating methods
//     this.getInfo = function(){
//         return `${this.name} has been written by ${this.author} in year ${this.year.getFullYear()}`
//     }
// }

// // instantiate your class by creating an object with the new keyword
// //" new" keyword used to create object of a class from its constructor

// let book1 = new Book("harrypotter")
// console.log(book1)

// let book2 = new Book("harrypotter2","jk rowling","12-5-1999")
// console.log(book2)

// console.log(book2.getInfo())

//////////////// creating methods with prototype ????////////////


// function Book(name, author, year){

//     this.name = name;
//     this.author = author;
//     this.year = new Date(year)

//     //creating methods

// }

// Book.prototype.getInfo = function(){
//     return `${this.name} has been written by ${this.author} in year ${this.year.getFullYear()}`
// }

// // instantiate your class by creating an object with the new keyword
// //" new" keyword used to create object of a class from its constructor

// let book1 = new Book("harrypotter")
// console.log(book1)

// let book2 = new Book("harrypotter2","jk rowling","12-5-1999")
// console.log(book2)

// console.log(book2.getInfo())



////// creating classes in a simpler manner///////


// class Book{

//     constructor(name, author, year){

//         this.name = name;
//         this.author = author;
//         this.year = new Date(year)

//     }
    
//     //creating methods

//     getInfo = function(){
//         return `${this.name} has been written by ${this.author} in year ${this.year.getFullYear()}`
//     }


// }




// // instantiate your class by creating an object with the new keyword
// //" new" keyword used to create object of a class from its constructor

// let book1 = new Book("harrypotter")
// console.log(book1)

// let book2 = new Book("harrypotter2","jk rowling","12-5-1999")
// console.log(book2)

// console.log(book2.getInfo())
 

///////////////////------------ working with DOM ----------------////////////

// console.log(document.getElementById("my-form"))
// console.log(document.getElementsByClassName("container"))
// console.log(document.getElementsByTagName("h1"))
//get element by class name
// console.log(document.getElementsByClassName("item"))
// this returns a colection not a node , cannot run array methods direvtly on it, have to cinvert it in arry first



//query selector selects elemnets by id or class or tag, all
// console.log(document.querySelector(".items")) // by class
// console.log(document.querySelector("h1")) // by tag
// console.log("by id "+document.querySelector("#my-form").innerHTML) // by id
//query selector is a  single lement sleector , if there are more tahn 1 h1, it will only get 1 h1

// for multiple sleectors use query sleector all:

// console.log(document.querySelectorAll("h1"))
// console.log(document.querySelectorAll(".item")) //this gives a node list, can work on array opertaions

// do some functionality with  the list items
// var list_items = document.querySelectorAll(".item")
// // list_items.remove
// list_items.forEach(function(item){
//     //  item.remove();
//     item.textContent="maheen"

// })
// // list_items.forEach((items)=>console.log(items))
// const items = document.querySelector(".items")
// console.log(items.children[0].innerHTML)
// items.children[1].textContent="maheen"
// console.log(items.children[1].innerHTML)

// //add html dynamically with js:
// items.children[2].innerHTML = "<h1>maheen</h1>"


//chamge styles dynamically
// const btn = document.querySelector(".btn")
// btn.style.color = "white"
// btn.style.background  = "green"
// console.log(btn)

// //event can ve "click","mouseover","mouseout"

// btn.addEventListener('mouseover',function(a){
//     a.preventDefault();
//     console.log("workings")
//     btn.style.background="red"

//     //add a class
//     document.querySelector('body').classList.add("pink_bag")
// })


/////// task //////////

const nameinput = document.querySelector("#name")
const emailinput = document.querySelector("#email")
// const nameinput = document.querySelector("#name")

const submit_btn = document.querySelector(".btn");
const list = document.querySelector(".items")

submit_btn.addEventListener('click',onsubmit)

function onsubmit(a){
    a.preventDefault();

    if (nameinput.value==="" || emailinput.value===""){

        const msg=  document.querySelector(".msg")
        msg.classList.add("error")
        msg.textContent = "enter the details"

        setTimeout(()=>{
            msg.textContent = ""
            msg.classList.remove('error')}
            ,1000)


    }

    else{
    console.log(nameinput.value);
    console.log(emailinput.value);

    const list_item = document.createElement("li")
    list_item.appendChild(document.createTextNode(nameinput.value)) 
    list.appendChild(list_item);
    console.log(list_item.textContent)

    nameinput.value = ""
    emailinput.value =""
    }


}











///prototype? - uses of each of above ?? - for each on dom data
// methods on html dom item i.e manipulating data

// changing gtml content data and styles 
//events











