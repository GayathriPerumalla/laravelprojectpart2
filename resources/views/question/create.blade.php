


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create New Questionarre</div>
                <div class="card-body">
                    <form action="/questionnaires/{{ $questionnaire ?? '$questionnaire->id' }}/questions" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="questions[question]" type="text" class="form-control"
                             value="{{ old('question.question') }}"
                             id="question" aria=describedby="titleHelp" placeholder="Enter question">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point questions.</small>
                            @error('question.question')
                            <small class="text-danger">{{$message }}</small>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">give choices.</small>
                                <div>

                                    <div class="form-group">
                                        <label for="answer1">Choice1</label>
                                        <input name="answers[][answer]" type="text"
                                        value="{{ old('answers.0.answer') }}" 
                                        class="form-control" id="answer1" aria-describedby="choicesHelp"
                                         placeholder="Enter choice1">
                                        @error('answers.0.answer')
                                        <small class="text-danger">{{$message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer2">choice2</label>
                                        <input name="answers[][answer]" type="text" 
                                        value="{{ old('answers.1.answer') }}" 
                                        class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Enter choice2">
                                        @error('answers.1.answer')
                                        <small class="text-danger">{{$message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Choice3</label>
                                        <input name="answers[][answer]" type="text" 
                                        value="{{ old('answers.2.answer') }}" 
                                        class="form-control" id="answer3" aria-describedby="choicesHelp" placeholder="Enter choice3">
                                        @error('answers.2.answer')
                                        <small class="text-danger">{{$message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Choice4</label>
                                        <input name="answers[][answer]" type="text" 
                                        value="{{ old('answers.3.answer') }}" 
                                        class="form-control" id="answer4" aria-describedby="choicesHelp" placeholder="Enter choice4">
                                        @error('answers.3.answer')
                                        <small class="text-danger">{{$message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
