<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Color Assignment</title>
    <style>
        /* Add some default styles for the button */
        #myButton {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Your button with an initial ID value -->
<button id="myButton" onclick="changeColor()" data-name="Closing">Click me</button>

<script>
    function changeColor() {
        // Get the button element by its ID
        var button = document.getElementById("myButton");

        // Get the value of the button
        var buttonValue = button.getAttribute("data-name");

        // Assign background color based on the button value
        switch (buttonValue) {
            case "Opening":
                button.style.backgroundColor = "green";
                break;
            case "Midshift":
                button.style.backgroundColor = "orange";
                break;
            case "Closing":
                button.style.backgroundColor = "violet";
                break;
            case "":
                button.style.backgroundColor = "white";
                break;
            default:
                // Set a default color if none of the above conditions match
                button.style.backgroundColor = "gray";
        }
    }
</script>

</body>
</html>
