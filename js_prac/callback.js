console.log("starting ...")

let posts = [
    {title:"post1",message:"message1"},
]

function getposts(){

    setTimeout(()=>{

        posts.forEach((post) =>{

            console.log("post"+post.title)

        })


    }, 2000)

}

function createpost(){

    setTimeout(()=>{

        posts.push({title:"post2"})

    },2000)
}


// createpost();
// getposts();
//here the updated data is not displayed cz it was updated after the display was executed i.e teh update took long
//so use display as call back with update


function callback_createpost(showpost,data){

    setTimeout(()=>{

        posts.push({title:data})
        console.log("data added , it will be displayed after two sec")
        showpost();
    },1000)
}

// callback_createpost(getposts,"post2");
callback_createpost(getposts,"post3  ")














// 39696039

// 82,375