document.querySelectorAll(".nav .nav-item").forEach(item => {
    item.addEventListener("click", () => {
        document.querySelectorAll(".forms").forEach(form => {
            form.classList.add("hide")
        })
        let form = "#form" + item.getAttribute("showForm")
        document.querySelector(form).classList.remove("hide")
    })
})


function userTypeChanged(element) {
    console.log(element.parentNode.querySelector(".userRole"));
    element.parentNode.querySelector(".userRole").value = element.value
}
function layoutOptionChanged(e) {
    if (e.target.value !== "text_full_width") {
        console.log();
        e.target.parentNode.querySelector(".form-control-file").classList.remove("hide")
        let name = e.target.parentNode.querySelector(".image_id").getAttribute("name")
        e.target.parentNode.querySelector(".form-control-file").setAttribute("name", name.replace("_id", ""))
    } else {
        e.target.parentNode.querySelector(".form-control-file").classList.add("hide")
        e.target.parentNode.querySelector(".form-control-file").setAttribute("name", "")
        e.target.parentNode.querySelector(".form-control-file").removeAttribute("required")

    }
}

let html = "";
let sources = [];
let markdowns = {};
let inc = 0;
let source_inc = 1;


document.querySelector(".add_source_btn").addEventListener("click", () => {
    let input = document.querySelector(".source_input");
    let name = document.querySelector(".source_name");

    sources.push({
        link: input.value,
        name: name.value
    })
    document.querySelector("#increment_source").innerText = `source ${++source_inc}`
    document.querySelector("#sources_input").value = `<ul class="sources_list">`
    sources.forEach(item => {
        document.querySelector("#sources_input").value += `<li><a href="${item.link}">${item.name}</a></li>`
    })
    document.querySelector("#sources_input").value += `</ul>`
    console.log(document.querySelector("#sources_input"));
    input.value = ""
    name.value = ""
})





document.querySelector("#add_row_form").addEventListener("click", () => {
    let isAdded = false;
    document.querySelectorAll(".add_blog_row_btn").forEach(element => {
        if (element.style.display !== "none") {
            isAdded = true
        }
    })
    if (isAdded) return;

    let random_number = Math.floor(Math.random() * 1000000) + "_" + Math.floor(Math.random() * 1000000);
    var div = document.createElement('div')
    div.setAttribute("class", "d-flex align-items-center mb-3  form-group")
    div.innerHTML =
        `<label for="exampleFormControlTextarea1" class="me-3">row ${++inc}</label>` +
        `<div>` +
        `<textarea type="text" id="markdown_n_${inc}" placeholder="text" class="blog_text form-control"></textarea>` +
        `</div>` +
        `<select name=""  class="me-3 ms-3 row_layout form-select" style="width:200px" onchange="layoutOptionChanged(event)">` +
        `<option value="text_full_width" selected>text full width</option>` +
        `<option value="text_top">text top image bottom</option>` +
        `<option value="text_bottom">text bottom image top</option>` +
        `<option value="text_left">text left image right</option>` +
        `<option value="text_right">text right image left</option>` +
        `</select>` +
        `<input type="file" class="form-control-file hide"  name="image_n_${inc}">` +
        `<input type="hidden" class="image_id form-control"  name="image_n_${inc}_id" value="${random_number}">` +
        `<button type="button" markdown_id="markdown_n_${inc}" class="btn btn-success add_blog_row_btn me-3">add</button>`

    
    document.querySelector("#add_row_blog").appendChild(div);
    markdowns[`markdown_n_${inc}`] = new SimpleMDE({
        element: document.getElementById(`markdown_n_${inc}`),
        status: false
    })




    document.querySelectorAll(".add_blog_row_btn").forEach(element => {
        element.addEventListener("click", () => {
            let file = element.parentNode.querySelector(".form-control-file")
            var fileExt = file.value.split('.').pop();


            let blog_text = element.parentNode.querySelector(".blog_text")
            let row_layout = element.parentNode.querySelector(".row_layout")
            let image_id = element.parentNode.querySelector(".image_id").value
            let body_input = document.querySelector("#body_input")
            let markdown_id = element.getAttribute("markdown_id")
            markdowns[markdown_id].toTextArea()
            blog_text.value = markdowns[markdown_id].options.previewRender(markdowns[markdown_id].value())

            if (!file.value) {
                if (row_layout.value !== "text_full_width") {
                    alert("please fill up all requirements")
                    return;
                }
            }
            if (row_layout.value === "text_full_width") {
                html += `<div class="text_full_width">` +
                    `<p> ${blog_text.value}</p>` +
                    `</div>`
            } else {
                let hostName = window.location.href
                hostName = hostName.replace("http://", "")
                hostName = hostName.replace("https://", "")
                hostName = hostName.slice(0, hostName.indexOf("/"));
                html += `<div class="${row_layout.value} ${row_layout.value.includes("left") || row_layout.value.includes("right") ? "text-row" : "text-column"}">` +
                    `<div>` +
                    `<p>${blog_text.value}</p>` +
                    `</div>` +
                    `<div class="image_container">` +
                    `<img src="//${hostName}/storage/images/${image_id}.${fileExt}" alt="">` +
                    `</div>` +
                    `</div>`
            }
            body_input.value = html;
            element.style.display = "none"
            console.log(body_input.value);
        })
    })
})



