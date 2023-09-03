<h1>Quizzes scafold</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Course</th>
            <th>Questions</th>
            <th>Available</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        {{-- @dd($quizzes) --}}
        @foreach ($quizzes as $quiz)
                
            <tr>
                <td>{{$quiz->title}}</td>
                <td>{{$quiz->course}}</td>
                <td>{{$quiz->questions}}</td>
                <td>{{$quiz->available}}</td>
                <td>{{$quiz->status}}</td>
                <td>{{$quiz->action}}</td>
            </tr>
        @endforeach
    </table>


