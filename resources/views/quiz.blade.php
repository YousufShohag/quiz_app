

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
    <h1>Create Quiz</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Quiz Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="type">Quiz Type:</label>
            <select class="form-control" id="type" name="type" required>
                <option value="public">Public</option>
                <option value="private">Private</option>
            </select>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
        </div>
        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
        </div>
        <div class="form-group" id="question-container">
            <!-- Question fields will be added dynamically here -->
        </div>
        <button type="button" class="btn btn-primary" id="add-question">Add Question</button>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#add-question').click(function() {
            var questionField = '<div class="question mb-3">';
            questionField += '<label>Question:</label>';
            questionField += '<input type="text" class="form-control" name="questions[]" required>';
            questionField += '<div class="form-check mt-2">';
            questionField += '<input class="form-check-input" type="radio" name="question-type[]" value="short_text">';
            questionField += '<label class="form-check-label">Short Text</label>';
            questionField += '</div>';
            questionField += '<div class="form-check">';
            questionField += '<input class="form-check-input" type="radio" name="question-type[]" value="long_text">';
            questionField += '<label class="form-check-label">Long Text</label>';
            questionField += '</div>';
            questionField += '<div class="form-check">';
            questionField += '<input class="form-check-input" type="radio" name="question-type[]" value="radio">';
            questionField += '<label class="form-check-label">Radio</label>';
            questionField += '</div>';
            questionField += '<div class="form-check">';
            questionField += '<input class="form-check-input" type="radio" name="question-type[]" value="checkbox">';
            questionField += '<label class="form-check-label">Checkbox</label>';
            questionField += '</div>';
            questionField += '</div>';
            $('#question-container').append(questionField);
        });
    });
</script>

</body>
</html>








