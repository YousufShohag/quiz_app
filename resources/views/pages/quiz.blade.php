


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<x-app-layout>
    <x-slot name="header">
     
        
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
        <h1><b>Create Quiz</b></h1>
        
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
           <button type="button" class="btn btn-primary" id="add-question" style="color:black">Add Radio Question</button>
            <!-- <button type="submit" class="btn btn-primary mt-3" style="color:black">Submit</button>  -->
            <button type="button" class="btn btn-primary" id="add-short-text-question"  style="color:black">Add Short Text Question</button>
        <button type="button" class="btn btn-primary" id="add-long-text-question"  style="color:black">Add Long Text Question</button>
        <button type="button" class="btn btn-primary" id="add-checkbox-question"  style="color:black">Add Checkbox Question</button>
        <button type="submit" class="btn btn-primary mt-3"  style="color:black">Submit</button>
        </form>


    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        $(document).ready(function() {
        $('#add-short-text-question').click(function() {
            addQuestionField('short_text');
        });
        $('#add-long-text-question').click(function() {
            addQuestionField('long_text');
        });
        $('#add-checkbox-question').click(function() {
            addQuestionField('checkbox');
        });

        $(document).on('click', '.close-btn', function() {
            $(this).closest('.question').remove();
        });

        $(document).ready(function() {
            $('#add-question').click(function() {
                
                var questionField = '<div class="question mb-3">';
            questionField += '<button type="button" class="close close-btn" aria-label="Close">';
            questionField += '<span aria-hidden="true">&times;</span>';
            questionField += '</button>';
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


 

        function addQuestionField(type) {
            var questionField = '<div class="question mb-3">';
            questionField += '<button type="button" class="close close-btn" aria-label="Close">';
            questionField += '<span aria-hidden="true">&times;</span>';
            questionField += '</button>';
            questionField += '<label>Question:</label>';
            questionField += '<input type="text" class="form-control" name="questions[]" required>';
            if (type === 'short_text' || type === 'long_text') {
                questionField += '<input type="hidden" name="question-type[]" value="' + type + '">';
            } else if (type === 'checkbox') {
                questionField += '<input type="hidden" name="question-type[]" value="' + type + '">';
                questionField += '<div class="form-check mt-2">';
                questionField += '<input class="form-check-input" type="checkbox" name="question-options[]" value="Option 1">';
                questionField += '<label class="form-check-label">Option 1</label>';
                questionField += '</div>';
                questionField += '<div class="form-check">';
                questionField += '<input class="form-check-input" type="checkbox" name="question-options[]" value="Option 2">';
                questionField += '<label class="form-check-label">Option 2</label>';
                questionField += '</div>';
                // Add more options if needed
            }
            questionField += '</div>';
            $('#question-container').append(questionField);
        }
    });



    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



    <footer class="bg-gray-800 py-4 text-center text-white">
        <p>&copy; 2024 Interactive care Platform. All rights reserved.</p>
    </footer>
</body>

</html>

