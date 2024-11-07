let headerCount = 1;

function addHeader() {
    console.log("Add Header button clicked");
    headerCount++;
    
    const headerSection = document.createElement('div');
    headerSection.classList.add('header-section', 'mb-3');
    headerSection.id = `header-section-${headerCount}`; // Assign unique ID to each header section
    headerSection.innerHTML = `
        <label for="header-${headerCount}" class="form-label">Header ${headerCount}:</label>
        <input type="text" id="header-${headerCount}" name="headers[]" class="form-control" required>
        
        <div class="ingredient-list mt-3" id="ingredient-list-${headerCount}">
            <div class="ingredient-item d-flex align-items-center mb-2">
                <input type="text" name="ingredients[${headerCount}][]" class="form-control me-2" placeholder="Ingredient" required>
                <button type="button" class="btn btn-outline-primary add-ingredient-btn" data-header-id="${headerCount}">Add Ingredient</button>
            </div>
        </div>
    `;

    document.getElementById('headerContainer').appendChild(headerSection);
}

function deleteHeader() {
    console.log("delete header clicked");
    if (headerCount > 1) {
        const lastHeader = document.getElementById(`header-section-${headerCount}`);
        if (lastHeader) {
            lastHeader.remove(); // Remove the last added header section
            headerCount--; // Decrement header count
        }
    } else {
        alert("At least one header is required.");
    }
}

function addIngredient(headerId) {
    console.log(`Add Ingredient button clicked for header ${headerId}`);
    const ingredientList = document.getElementById(`ingredient-list-${headerId}`);
    
    const ingredientItem = document.createElement('div');
    ingredientItem.classList.add('ingredient-item', 'd-flex', 'align-items-center', 'mb-2');
    ingredientItem.innerHTML = `
        <input type="text" name="ingredients[${headerId}][]" class="form-control me-2" placeholder="Ingredient" required>
        <button type="button" class="btn btn-outline-danger remove-ingredient-btn">Remove</button>
    `;

    ingredientList.appendChild(ingredientItem);
}

function removeIngredient(button) {
    console.log("Remove Ingredient button clicked");
    button.parentElement.remove();
}

// Attach event listeners to Add Header and Delete Header buttons
document.getElementById('addHeaderButton').addEventListener('click', addHeader);
document.getElementById('deleteHeaderButton').addEventListener('click', deleteHeader);

// Event delegation for dynamically added Add/Remove Ingredient buttons
document.getElementById('headerContainer').addEventListener('click', function (event) {
    if (event.target && event.target.matches(".add-ingredient-btn")) {
        const headerId = event.target.getAttribute("data-header-id");
        addIngredient(headerId);
    } else if (event.target && event.target.matches(".remove-ingredient-btn")) {
        removeIngredient(event.target);
    }
});