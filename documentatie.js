let dropDownMenu = document.querySelector(".info");
let username = document.querySelector(".username");
let ok = 0;
username.addEventListener("click", () => {
  ok++;
  if (ok % 2 == 1) {
    dropDownMenu.classList.remove("disappear");
  } else {
    dropDownMenu.classList.add("disappear");
  }
});
function openDoc(evt, name) {
  let i, documentation, doclinks;
  documentation = document.getElementsByClassName("documentation");
  for (i = 0; i < documentation.length; i++) {
    documentation[i].style.display = "none";
  }
  doclinks = document.getElementsByClassName("doclinks");
  for (i = 0; i < doclinks.length; i++) {
    doclinks[i].className = doclinks[i].className.replace(" active", "");
  }
  document.getElementById(name).style.display = "block";
  evt.currentTarget.className += "active";
}
