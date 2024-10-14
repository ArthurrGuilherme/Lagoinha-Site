function scrollto(element) {
    document.querySelector(element).scrollIntoView({ behavior: "smooth" });
}

document.querySelector(".Arrow").addEventListener("click", function (event) {
    event.preventDefault();

    scrollto("header")

    console.log("go to up")
})