<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <form method="get">
        <select multiple name="branch" id="branch">
            <option value="1" data-name="toyota">toyota</option>
            <option value="2" data-name="honda">Honda</option>
            <option value="3" data-name="Nissan">Nissan</option>
        </select>
        <button type='submit'>Send</button>
    </form>

    <script>
        const form = document.querySelector("form");

        form.onmousedown = function(event) {
            if (event.shiftKey) return;
            event.preventDefault();
            this.focus();
            var scroll = this.scrollTop;
            event.target.selected = !event.target.selected;
            this.scrollTop = scroll;
        
            this.dispatchEvent(new Event("change"));
            
        }

        form.onsubmit = function(event) {
            event.preventDefault();
            let selectedElement = "";
            const options = Array.from(form.firstElementChild.children);
            options.forEach(function(element){
                if(element.selected) {
                    selectedElement += `${element.value}=${element.getAttribute("data-name")}&`; 
                }
            })
            selectedElement = selectedElement.slice(0, selectedElement.length - 1);
            
            window.location.href = `process.php/?${selectedElement}`;
           
        }
    </script>
</body>
</html>
