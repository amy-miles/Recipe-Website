<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Form</title>

    <!-- Bootstrap, Browser Icon, Stylesheet -->
    <?php include '../../includes/head-elements.php'; ?>
    
    <script src="../../js/recipe-form-handler.js" defer></script>


</head>

<body>

    <!-- Navbar -->
    <?php include '../../includes/navbar.php'; ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card" style="max-width: 500px;">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Submit Your Recipe</h4>
                    </div>
                    <div class="card-body">
                        <form id="recipeForm" action="submit-recipe-controller.php" method="POST" enctype="multipart/form-data">
                            <!-- Recipe Title -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Recipe Title:</label>
                                <input type="text" id="title" name="title" class="form-control" required>
                            </div>

                            <!-- Recipe Image -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Recipe Image:</label>
                                <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                            </div>

                            <!-- Dynamic Headers and Ingredient List -->
                            <div id="headerContainer">
                                <div class="header-section mb-3">
                                    <label for="header-1" class="form-label">Header 1:</label>
                                    <input type="text" id="header-1" name="headers[]" class="form-control">
                                    <div class="ingredient-list mt-3" id="ingredient-list-1">
                                        <div class="ingredient-item d-flex align-items-center mb-2">
                                            <input type="text" name="ingredients[1][]" class="form-control me-2" placeholder="Ingredient" required>
                                            <button type="button" class="btn btn-outline-primary" onclick="addIngredient(1)">Add Ingredient</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                            <p>You may add another header and more ingredients, for example, if you need to add another section for "Frosting". </p>
                            </div>
                            <!-- Button to add more headers -->
                            <div class="mb-3 d-flex gap-2">
                                
                                <button type="button" id="addHeaderButton" class="btn btn-secondary">Add Header</button>                               
                                <button type="button" id="deleteHeaderButton" class="btn btn-danger">Delete Header</button>
                            </div>

                            <!-- Instructions Text Box -->
                            <div class="mb-3">
                                <label for="instructions" class="form-label">Instructions:</label>
                                <textarea id="instructions" name="instructions" class="form-control" placeholder="Enter the instructions here..." rows="5" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success">Submit Recipe</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../../includes/footer.php'; ?>
</body>

</html>