console.log("Welcome to part 2 of this practice session")

// convert object literal to json string using JSON.stringify

const data = [
    {
        name :'maheen',
        age :'20'
    },
    {
        name : 'sara',
        age :'19'
    },
]

console.log(`this is noraml array ${data}`)
const dataJSON = JSON.stringify(data)
console.log(`this is noraml array ${dataJSON}`)
// for loop
for (let i = 0;i<=10;i+=2){
    console.log("this is i = "+i)
}
// while loop
let j = 1
while (j<10){
    console.log("this is j = "+j)
    j++
}

// loop through an array iwith "of keyword"
// for(let value of data){
//     console.log(value)
// }

// loop thorugh array with the following keywords: these are HIGH ORDER ARRAY METHODS

// **1** for each : it passes through each data with a fucntion
const fromforeach = data.forEach(
    function(obj){
        console.log(obj)
        console.log(typeof(obj))
        return "happy"

}
)
console.log("for each = "+fromforeach)//this is undefined cz for each doesnt return anything

// **2** map : it returns
const whats = data.map(function(obj){
    console.log(obj)
})

console.log(whats) //this gives undefined cz we ddint put ret statemnet

const what2 = data.map(function(obj){
    console.log("from returning map : "+obj.name)
    return "happy"
})

console.log(what2)//thsi iwll show the returned data from map functionality

// **3** filter ketyword
// returns teh data with the mentiond filter
const f_data = data.filter(function(obj){

    console.log("from filter function")
    return obj.name == 'maheen'  //this will return the complete object for which this filter is true
})


console.log(f_data)

// using filter to get particular data with map

const myage = data.filter(function(obj){
    return obj.name=="maheen"
}).map(function(obj){
    return obj.age
})
console.log("filtered+map = "+myage)


// CONDITIONALS
// if -else if - else
// || is or && is and

// ternery opertaor
// switches
























