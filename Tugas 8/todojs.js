function cb(){
    var check = document.createElement("input");
    var text = document.createElement("p");
    var del = document.createElement('button');
    var t = document.createTextNode('Hapus');
    check.setAttribute("type","checkbox");
    del.appendChild(t);
    text.innerHTML = document.getElementById('text').value;
    
    document.getElementById("list").appendChild(check); 
    document.getElementById("list").appendChild(text);
    document.getElementById("list").appendChild(del);
    document.getElementById("text").value=" ";
    
    del.onclick = function(){
        if(check.checked){
            document.getElementById("list").remove();
            document.getElementById("list").remove();
            document.getElementById("list").remove();
        }
    }
}