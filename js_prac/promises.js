console.log("starting promises ...")

let posts = [
    {title:"post1",message:"message1"},
]

function getposts(){

    setTimeout(()=>{
        console.log("displayng posts")
        let res =""
        posts.forEach((post) =>{

            // console.log("post"+post.title)
            res+=`<li> ${post.title}</li>` 


        })
        document.body.innerHTML=res

    }, 2000)

}



// createpost();
// getposts();
//here the updated data is not displayed cz it was updated after the display was executed i.e teh update took long
//so use display as call back with update


function newpost(data){

    return new Promise((resolve, reject) => {
    
        setTimeout(()=>{
            posts.push({title:data})
            console.log("added new")
            resolve()
        },5000)
        
    });

}

// getposts();
// newpost('post2')
//     .then(getposts)
//     .catch(err=>{ console.log(err)})


//here 

// 1- getpost is called : timeout 2 secs
// 2- newpost called timeout : 5secs

// first - after 2 secs post1 displayed
// second newpost has  5 secs delay and it has already done 2 secs delay in parallel with getpost, 
// now it has to 3 secs delay legft only

// hence , now after 3 secs, new post added and promise resolved

// when resolve called in promise, the then part is called i.e get post which has 2 secs delay
// hence now after 2 secs new data displayed

//PROMISE.ALL

let promise1 = Promise.resolve("done p1");
let promise2 =new Promise((resolve,reject)=>{
    setTimeout(resolve,3000," done p2")
});

let promise3 = new Promise((resolve,reject)=>{
    resolve()
}).then(()=>{console.log("done p3")})


Promise.all([promise1,promise2,promise3]).then((values)=>{
        console.log(values)
})





// 39696039

// 82,375