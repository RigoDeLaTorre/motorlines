function menu() {
  console.log("clicked");
  let element = document.getElementById("mobile");

  if (element.classList.contains("active")) {
    console.log("it has it");
    element.classList.remove("active");
  } else {
    element.classList.add("active");
  }
}
