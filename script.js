document.querySelector("#nav-diciplina-btn").addEventListener("mouseenter",()=>{
    let navul = document.querySelector("#nav-diciplina-list");
    let navlist = document.querySelectorAll("#nav-diciplina-list li");
    console.log(navlist);
    navul.style.padding = "10px 0 0"
    navlist.forEach(x =>{x.style.display = "block"})

})

