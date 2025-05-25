<?php
session_start(); // Ensure session is started at the top
?>

<!-- Result Modal -->
<div class="modal fade mt-5" id="resultModal" tabindex="-1" aria-labelledby="addQuiz" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="result">Result saved successfully !</h5>
            </div>
            <div class="modal-body">
                <form action="./endpoint/add-result.php" method="POST">
                    <div class="form-group">
                        <label for="quizTaker">Name</label>
                        <input type="text" class="form-control" id="quizTaker" name="quiz_taker" value="<?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : ''; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="regNo">Registration Number</label>
                        <input type="text" class="form-control" id="regNo" name="registration_number" value="<?php echo isset($_SESSION['registration_number']) ? htmlspecialchars($_SESSION['registration_number']) : ''; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="section">Section</label>
                        <input type="text" class="form-control" id="section" name="section" value="<?php echo isset($_SESSION['section_name']) ? htmlspecialchars($_SESSION['section_name']) : ''; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="totalScore">Total Score</label>
                        <input type="text" class="form-control" id="totalScore" name="total_score" readonly>
                    </div>

                    <!-- Star rating part -->
                    <div class="form-group">
                        <label for="rating">How was your test experience?</label><br>
                        <div class="star-rating">
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                        </div>
                        <input type="hidden" id="rating" name="rating" value="0"> <!-- Hidden field for storing the rating -->
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle star selection
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = this.getAttribute('data-value');
            ratingInput.value = rating; // Set the rating value
            updateStarRating(rating); // Update the star UI
        });
    });

    function updateStarRating(rating) {
        stars.forEach(star => {
            const starValue = star.getAttribute('data-value');
            if (starValue <= rating) {
                star.style.color = 'gold'; // Fill star with gold color
            } else {
                star.style.color = ''; // Empty star
            }
        });
    }

    // Disable modal close on click outside or pressing ESC key
    var resultModal = new bootstrap.Modal(document.getElementById('resultModal'), {
        backdrop: 'static',
        keyboard: false
    });

    // Optionally, you can show the modal using:
    // resultModal.show();
</script>