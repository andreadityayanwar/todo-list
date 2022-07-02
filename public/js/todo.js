document.getElementById("myPush").onclick = function() {
    if (document.getElementById("myTask").value.length == 0) {
        alert("Isi dulu task nya bodoh")
    }

    else {
        document.getElementById("tasks").innerHTML += `
        <div class = "task p-2 mx-5 my-2 text-white bg-blue-500 rounded border border-gray-700 content-between">
            <span id = "taskName">
                ${document.getElementById("myTask").value}
            </span>

            <button type="submit" class = "ml-auto hapus bg-black p-1 cursor-pointer rounded font-bold">Hapus</button>
        </div>
        `;

        var current_tasks = document.getElementsByClassName("hapus");
        for(var i=0; i<current_tasks.length; i++) {
            current_tasks[i].onclick = function() {
                this.parentNode.remove();
            }
        }
    }
}