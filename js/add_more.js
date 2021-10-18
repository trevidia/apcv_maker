var addMore = document.getElementById("add_more");


var forms = document.getElementById("forms");

addMore.onclick = function() {
    var id = forms.lastElementChild.className;
    var lsi = id.split("-");
    var formNumber = Number.parseInt(lsi[1]) + 1;
    var formFormat = forms.lastElementChild.outerHTML;
    var newFormat = formFormat.replace(id, `form-${formNumber}`)
    forms.insertAdjacentHTML("beforeend", newFormat);
}