console.log("starting async await")

async function getapidata(){

    let res = await fetch("https://jsonplaceholder.typicode.com/posts")

    let data = await res.json()
    console.log("res is "+data)
}

getapidata()

// here await means we first wait for fetch to compleye teh we wait for .json to complete and tehn console.log is run
// if remove await from here the all we be executed without waiting for othe rand this give error   