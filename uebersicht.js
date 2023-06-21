function sortieren() {
    var container = document.getElementById("container");
    var boxes = Array.from(container.getElementsByClassName("box"));

    boxes.sort(function (a, b) {
        return a.innerHTML.localeCompare(b.innerHTML);

    });

    while (container.firstChild) {
        container.firstChild.remove();
    }

    boxes.forEach(function (box) {
        container.appendChild(box);
    });
}