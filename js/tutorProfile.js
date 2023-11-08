let originalFieldValues = {}; // Store original field values for each field

function displayImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('profileImage').src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function editField(fieldName, editButton) {
    const fieldElement = document.getElementById(fieldName);
    const fieldText = fieldElement.innerText;

    // Store the original field value for this field
    originalFieldValues[fieldName] = fieldText;

    const inputField = document.createElement("input");
    inputField.setAttribute("type", "text");
    inputField.setAttribute("id", "editInputField");
    inputField.value = fieldText;
    inputField.classList.add("form-control");

    const saveButton = document.createElement("button");
    saveButton.innerText = "Save";
    saveButton.classList.add("btn", "btn-success", "me-1");
    saveButton.onclick = function () {
        const updatedText = inputField.value;
        fieldElement.innerText = updatedText;
        editButton.style.display = "inline";
        inputField.remove();
        saveButton.remove();
        cancelButton.remove();
        brElement.remove();
    };

    const cancelButton = document.createElement("button");
    cancelButton.innerText = "Cancel";
    cancelButton.classList.add("btn", "btn-danger");
    cancelButton.onclick = function () {
        // Restore the original field value for this field
        fieldElement.innerText = originalFieldValues[fieldName];
        editButton.style.display = "inline";
        inputField.remove();
        saveButton.remove();
        cancelButton.remove();
        brElement.remove();
    };

    const brElement = document.createElement("br");

    editButton.style.display = "none";

    fieldElement.innerHTML = "";
    fieldElement.appendChild(inputField);
    fieldElement.appendChild(brElement);
    fieldElement.appendChild(saveButton);
    fieldElement.appendChild(cancelButton);

    inputField.focus();
}