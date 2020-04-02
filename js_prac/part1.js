// console.log("hello")
// alert('hey there')

// basic data types:
const fixed = 12
let notfixed = 10
notfixed = 11

const a = 'maheen'
const b = true
const c  = null
const d = 0
let e  ;

console.log(typeof(e) ) // get the type of data

// Concatenation :
console.log(a+"saleh")
let last  = "saleh"

// template string
console.log(`first is ${a} and last is ${last}`)

// properties and methods on strings:
// propertyhas no ending ()
console.log(a.length) // is a property
console.log(a.toUpperCase()); // is  a method
 
//  ---------------    Array   ----------// 

// declare with constructor:
let myarray = new Array(1,2,"maheen");

console.log(`this is a ${typeof(myarray)}  and is equal to ${myarray}`)

// or declare diretly:
const another = ["a",1 ,2, true]
console.log(another);

const q = "js array are hetrogenous and not fixed size"
let onemore = q.split(" ")
console.log("this is with split function = "+ onemore)

// slicing in string 
const full_name  = "maheen saleh"
console.log(full_name.substring(1,5))

// array access with index:""
const names = ["maheen","sara","ali"]
console.log(names[1])

// adding data at end of array
names[3] = 'maryum'
console.log(names)

names.push("saad")
console.log(names)

// add data at the beginning
names.unshift("allfive")
console.log(names)

// remove with pop
names.pop()
console.log(names)

// chk whetehr an array or nit
console.log(Array.isArray("maheen")+" "+Array.isArray(names))

// get index of a value

console.log(names.indexOf("maheen"))

// ----------------- OBJECT LITERALS -------------
// objects just like dics in python
// can contain different datatypes as values, nested objects also possible
const animated ={
    'comedy':"monsters university",
    'horror':"mosters house",
    'barbie':{
        'superhero':"puppy power",
        'animals':"puppy rescue"
    },
    "harrypotter": 8,
    "winxclub":['cahrmix','enchantrix','believeix']

}

// accessing data with in objects
console.log(`${animated.comedy} is a great movie`)

// destructuring data within objects:
const { comedy, horror,barbie,harrypotter, barbie :{ animals} ,winxclub} = animated
console.log(barbie,winxclub[0])




