function openDoc(evt, name){
    let i, documentation, doclinks;
    documentation = document.getElementsByClassName("documentation");
    for(i = 0; i<documentation.length;i++){
        documentation[i].style.display="none";
    }
    doclinks = document.getElementsByClassName("doclinks");
     for(i = 0; i<doclinks.length;i++){
        doclinks[i].className=doclinks[i].className.replace(" active", "");
    }
    document.getElementById(name).style.display = "block";
    evt.currentTarget.className += "active";
}